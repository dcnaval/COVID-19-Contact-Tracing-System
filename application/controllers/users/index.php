<?php 
error_reporting(0);
class Index extends CI_Controller {	
	public function __construct() {
        parent::__construct();
		$this->load->helper('url');
		$this->load->model('covid_model');
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
			$session            =  $this->session();
			$data['listed']     =  $this->covid_model->get_listed_count();
			$data['tracing']    =  $this->covid_model->get_tracing_count();
			$this->load->view('users/header');
			$this->load->view('users/nav');
			$this->load->view('users/index',$data);
			$this->load->view('users/footer');
	}
	
 
}