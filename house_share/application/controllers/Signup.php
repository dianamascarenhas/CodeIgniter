<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {



  public function index()
  {

    $this->load->view('signup');

  }

  function register(){
    //validation library
    $this->load->model('Users_Model');
  $this->load->library('form_validation');

  $this->form_validation->set_error_delimiters('<div class = "error">', '</div>');

  //validating inputs
  $this->form_validation->set_rules('username','UserName', 'required|min_length[4]|max_length[20]');

  $this->form_validation->set_rules('fname','FName', 'required|min_length[4]|max_length[20]');

  $this->form_validation->set_rules('lname','LName', 'required|min_length[4]|max_length[20]');

  $this->form_validation->set_rules('password','Password', 'trim|required|min_length[4]|max_length[15]');

  $this->form_validation->set_rules('confirm_password','Confirm Password', 'trim|required|matches[password]');

  $this->form_validation->set_rules('emailid','Email',  'required|valid_email');


  $this->form_validation->set_rules('phnbr','Phone Number', 'required|regex_match[/^[0-9]{10}$/]');

  if ($this->form_validation->run() == FALSE){
    $this->load->view('Signup');
      }
    else {
      if ($this->input->post('userrole')=='owner'){
        $guestid=null;
      }
      else{
        $guestid=$this->input->post('guestOf');
      }
        $data = array(
          'username' => $this->input->post('username'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname'),
          'phnbr' => $this->input->post('phnbr'),
          'emailid' => $this->input->post('emailid'),
          'password' => $this->input->post('password'),
          'guestOf' => $guestid,
          'userrole' => $this->input->post('userrole')
        );
    $this->Users_Model->user_insert($data);
    $this->load->view('login', $data);

      }


  }

}
