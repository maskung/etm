<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home controller - realete with the main page
 *
 * This file is main controll of main page TIN project
 * @author Suphanut Thanyaboon <suphanut@gmail.com>
 * @version 0.0.1
 *
 */

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('home_model');
        $this->load->library('form_validation');
        $this->load->Model('Auth_model');
        $this->load->Model('Student');
        $this->load->Model('Car');
        $this->load->Model('Parents');

	}
	/**
 	 * index page show on default
     */
	public function index() {
		$data['title'] = "บันทึกข้อมูลของนักเรียน";

    //check user logged in or not
    $this->Auth_model->isLoggedIn();

		//get username detail
		$data['fullname'] = $this->session->userdata('firstname')." ".$this->session->userdata('lastname');

		$userdetail = $this->Parents->getParentById($this->session->userdata('userid'));
		$data['userdetail'] = $userdetail;

		//get student name
	  $data['students'] = $this->Student->getParentStduent($this->session->userdata('userid'));

		//get user cars
		$data['usercars'] = $this->Car->getUserCars($this->session->userdata('userid'));

		//get Default car
		$data['defaultcar'] = $this->Car->getCarByID($userdetail->Default_Car_ID);

		$this->load->view('header',$data);
		$this->load->view('home',$data);
		$this->load->view('footer',$data);

	}

	/***
	 * find the status of student and synchronize to mobile app
	 */

	public function studentchecked($userid)
	{

		//find the status of student

		//return status to mobile app
		echo "1";
	}

        public function fillgrid(){
		    $week = $this->Week->getWeek();
			$data['week'] = $week;
            $this->home_model->fillgrid($week->week_start,$week->week_end);
        }


        public function create(){
            $this->form_validation->set_rules('name', 'Name', 'required');
            //$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            //$this->form_validation->set_rules('contact', 'Contact Number', 'required|numeric|max_length[10]|min_length[10]');
            if ($this->form_validation->run() == FALSE){
               echo'<div class="alert alert-danger">'.validation_errors().'</div>';
               exit;
            }
            else{
                $this->home_model->create();
            }
        }

        public function edit(){
            $id =  $this->uri->segment(3);
            $this->db->where('id',$id);
            $data['query'] = $this->db->get('curd');
            $data['id'] = $id;
            $this->load->view('edit', $data);
            }

        public function update(){
                $res['error']="";
                $res['success']="";
                $this->form_validation->set_rules('name', 'Name', 'required');
                //$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                //$this->form_validation->set_rules('contact', 'Contact Number', 'required|numeric|max_length[10]|min_length[10]');
                if ($this->form_validation->run() == FALSE){
                $res['error']='<div class="alert alert-danger">'.validation_errors().'</div>';
                }
            else{
                $data = array('name'=>  $this->input->post('name'),
                'email'=>$this->input->post('email'),
                'contact'=>$this->input->post('contact'),
                'facebook_link'=>$this->input->post('facebook'));
                $this->db->where('id', $this->input->post('hidden'));
                $this->db->update('curd', $data);
                $data['success'] = '<div class="alert alert-success">ข้อมูลถูกบันทึกเรียบร้อยแล้ว</div>';
            }
            header('Content-Type: application/json');
            echo json_encode($res);
            exit;
        }


        public function delete(){
            $id =  $this->input->POST('id');
            $this->db->where('id', $id);
            $this->db->delete('curd');
            echo'<div class="alert alert-success">ข้อมูลถูกลบแล้ว</div>';
            exit;
        }


		public function search_jquery_autocomplete() {
          $arr=array();
          $result="";
          if(isset($_GET['q'])){ //ตรวจสอบว่ามีการส่งค่า get มาหรือเปล่า
            $name=$_GET['q'];
				  $this->db->distinct();
				  $this->db->where("email",$this->session->userdata('groupname'));
                  $this->db->like("name",$name)->select('name'); //ให้แสดงชื่อสีอะไรก็ตาม ที่มีคำคล้ายกับตัวอักษรที่ส่งมา
            $result=$this->db->from("curd")->get()->result();
          }

          foreach($result as $key){
                $arr[]=$key->name;//จากนั้นก็นำสีมา เข้ารหัสแบบ json
          }
          echo $_GET['callback']."(".json_encode($arr).")";   //แล้วก็ส่งค่ามันกลับไป
		}
}
