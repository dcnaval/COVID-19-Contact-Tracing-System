<?php 
error_reporting(0);
class Coviddata extends CI_Controller {	
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
			$session               =  $this->session();
			$data['information']   =  $this->covid_model->get_covid_data();
			$this->load->view('users/header');
			$this->load->view('users/nav');
			$this->load->view('users/covid_data',$data);
			$this->load->view('users/footer');
	}
	public function contact_tracing() {
			if(!isset($this->session->userdata['logged_in']['userid'])){
				redirect("welcome");
			}
			$session               =  $this->session();
			$data['information']   =  $this->covid_model->covidtracer_contact_tracing($_GET['id']);
			$this->load->view('users/header');
			$this->load->view('users/nav');
			$this->load->view('users/contact_tracing',$data);
			$this->load->view('users/footer');
	}
	
 
}