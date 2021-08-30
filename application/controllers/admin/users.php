<?php 
error_reporting(0);
class Users extends CI_Controller {	
	public function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
    }
	public function session(){
		if(isset($this->session->userdata['logged_in']['name'])){
				$data['user'] = $this->session->userdata['logged_in']['userid'];
				return $data;
		}
	}
	public function index() {
			if(!isset($this->session->userdata['logged_in']['userid'])){
				redirect("welcome");
			}
			$session               =  $this->session();
			$data['information']   =  $this->users_model->get_users_data();
			$this->load->view('admin/header');
			$this->load->view('admin/nav');
			$this->load->view('admin/users',$data);
			$this->load->view('admin/footer');
	}
	
 
}