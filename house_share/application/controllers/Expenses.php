<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expenses extends CI_Controller {

	public function index()
	{
		$query="";
		if ($this->session->userdata('username')==null) {
			$this->load->view('login');
		}
		else{
    $userrole = $this->session->userdata('userrole');
    if ($userrole=="owner"){
			$this->db->select('*');
			$this->db->from('expenses');
			$this->db->join('users', 'expenses.toBePayedBy = users.username');
			$query = $this->db->get();
    }
    else {
      $guestof = $this->session->userdata('guestOf');
			$this->db->select('*');
			$this->db->from('expenses');
			$this->db->join('users', 'expenses.toBePayedBy = users.username');
			$this->db->where('toBePayedBy', $guestof);
			$query = $this->db->get();
      //$query = $this->db->get_where('expenses', array('toBePayedBy' => $guestof));
    }
    $expenses =  $query->result();


    $expns['expense'] = $expenses;
    $expns['usrole'] = $userrole;
		$this->load->view('manageexpenses.php',$expns);
		}
	}


  public function createexpense()
  {
    $this->load->view('createexpense');
  }

  public function addnewexpense()
  {
    $incurer=$this->session->userdata('username');
    $payer="";
    $userrole = $this->session->userdata('userrole');



    if ($userrole=='owner'){
      $payer=$incurer;
    }
    else{
      $payer=$this->session->userdata('guestOf');
    }

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('amt', 'Amount', 'required|numeric');
		$this->form_validation->set_rules('edate', 'Expense Date', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('createexpense');
    }
    else
    {
			$this->load->model('Expense_Model');

	         $data = array(
	            'toBePayedBy'=>$payer,
	            'IncurrerId' => $incurer,
	            'Description' =>$this->input->post('desc'),
	            'Amount' =>$this->input->post('amt'),
	            'EDate' =>date('Y-m-d', strtotime($this->input->post('edate'))),
	            'Remarks' => $this->input->post('remarks'),
	         );

	         $this->Expense_Model->insert($data);
	         $this->index();
		}

  }

  public function delete_expense() {
         $this->load->model('Expense_Model');
         $expenseid = $this->uri->segment('3');
         $this->Expense_Model->delete($expenseid);
         $this->index();
      }

  public function update()
  {
			$expenseid = $this->uri->segment('3');
			$query=$this->db->get_where('expenses', array('ExpenseId' => $expenseid));
			$expns[]="";
			foreach($query->result() as $row){
				$expns['expenseid']= $expenseid;
				$expns['desc']= $row->Description;
				$expns['amt']= $row->Amount;
				$expns['edate']= $row->EDate;
				$expns['remarks']= $row->Remarks;
			}
      $this->load->view('updateexpense',$expns);

  }

	public function update_expense()
  {
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('amt', 'Amount', 'required|numeric');
		$this->form_validation->set_rules('edate', 'Expense Date', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$expns['expenseid']= $this->input->post('expenseid');
			$expns['desc']= $this->input->post('desc');
			$expns['amt']= $this->input->post('amt');
			$expns['edate']= $this->input->post('edate');
			$expns['remarks']= $this->input->post('remarks');
			$this->load->view('updateexpense',$expns);
    }
    else
    {
			$this->load->model('Expense_Model');
			$edate=date('Y-m-d', strtotime($this->input->post('edate')));
			$expenseid=$this->input->post('expenseid');
			$description=$this->input->post('desc');
			$amount=$this->input->post('amt');
			$remarks=$this->input->post('remarks');

			$data = array(
				 'Description' =>$this->input->post('desc'),
				 'Amount' =>$this->input->post('amt'),
				 'EDate' =>date('Y-m-d', strtotime($this->input->post('edate'))),
				 'Remarks' => $this->input->post('remarks'),
			);
			$this->Expense_Model->update($data,$expenseid);
      $this->index();
		}

  }





}
