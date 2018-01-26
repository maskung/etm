<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//location: application/controller/auth.php

class Auth extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->Model('Auth_model');
  }

  public function index() {
  	//do_dump($data);
    $data['title'] = "LOGIN";
    $this->load->view('login',$data);
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('/' ,'refresh');
    exit;
  }

  public function login(){
    $username =  $this->input->post('username');
    $password =  $this->input->post('password');

    //call the model for auth
    if($this->Auth_model->login($username, $password)){
      redirect('/home/index' ,'refresh');
    }
    else{
        echo'something went wrong';
    }
  }
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */
