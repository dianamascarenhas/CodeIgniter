<?php

 defined('BASEPATH') OR exit('No direct script access allowed');

 class  Adduser  extends CI_Controller{

public function index(){
	$this->load->view('houseshare/adduser');
}


public function form_validation() {

$this->load->library('form_validation');

   $this->form_validation->set_rules('FirstName','First Name','required|alpha');
   $this->form_validation->set_rules('LastName','Last Name','required|alpha');
   $this->form_validation->set_rules('email','email id','required|valid_email|trim');
   $this->form_validation->set_rules('UserID','User id','required');
   $this->form_validation->set_rules('PhoneNumber','Phone Number','required|regex_match[/^[0-9]{10}$/]');
   $this->form_validation->set_rules('pwd','Password','required');
   $this->form_validation->set_rules('cpwd','Password','required|matches[pwd]');
   if ($this->input->post('User-Role')=='guest'){
     $this->form_validation->set_rules('Guestof','Owner Id','required');
   }

if($this->form_validation->run()){
	$this->load->model('Houseshare_m');

  if($this->input->post('User-Role')=='owner'){
    $guestid=null;
  }
  else{
    $guestid=$this->input->post('Guestof');
  }

	$data = array(
		"fname"=>$this->input->post("FirstName"),
		"lname"=>$this->input->post("LastName"),
		"username"=>$this->input->post("UserID"),
		"password"=>$this->input->post("pwd"),
		"emailid"=>$this->input->post("email"),
		"userrole"=>$this->input->post("User-Role"),
		"phnbr"=>$this->input->post("PhoneNumber"),
    "guestOf"=>$guestid
	);

	$this->Houseshare_m->add_data($data);
	redirect(base_url()."index.php/Adduser/inserted");
}
else
{
     $this->index();
}
}


public function inserted(){

	$this->load->view('templates/header');
      $this->load->view('houseshare/adminmanageuser');
}



}



?>
