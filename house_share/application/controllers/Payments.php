<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends CI_Controller {

	public function index()
	{
		$query="";
		if ($this->session->userdata('username')==null) {
			$this->load->view('login');
		}
		else{
    $userrole = $this->session->userdata('userrole');
		if ($userrole=='guest'){
			$this->load->view('userindex');
		}
		else{
		$username = $this->session->userdata('username');
    if ($userrole=="owner"){
			$this->db->select('*');
			$this->db->from('payment');
			$this->db->join('users', 'payment.PayerId = users.username');
			$query = $this->db->get();
			$payments =  $query->result();
    }
    $pymt['payments'] = $payments;
    $pymt['usrole'] = $userrole;
		$pymt['usname'] = $username;
		$this->load->view('managepayments.php',$pymt);
		}
		}
	}

	public function delete_payment() {
         $this->load->model('Payment_Model');
         $paymentid = $this->uri->segment('3');
         $this->Payment_Model->delete($paymentid);
         $this->index();
      }

	public function createpayment()
	{
		 $this->load->view('createpayment');
	}

	public function addnewpayment()
  {
		$this->load->helper(array('form', 'url'));
  	$this->load->library('form_validation');

		$this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('amt', 'Amount', 'required|numeric');
		$this->form_validation->set_rules('pdate', 'Payment Date', 'required');

    $payerid=$this->session->userdata('username');
    $payer="";
    $userrole = $this->session->userdata('userrole');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('createpayment');
    }
    else
    {
			$this->load->model('Payment_Model');

	         $data = array(
	            'PayerId'=>$payerid,
	            'Description' =>$this->input->post('desc'),
	            'Amount' =>$this->input->post('amt'),
	            'PaymentDate' =>date('Y-m-d', strtotime($this->input->post('pdate'))),
	         );
	         $this->Payment_Model->insert($data);
	         $this->index();
    }
  }

}
