<?php 
class Api extends CI_Controller {	
	
	public function __construct() {
        parent::__construct();
        $this->load->model('authentication_model');
        $this->load->model('users_model');
        $this->load->model('covid_model');
    }
	
	public function login_user_account() {
		$username = $this->input->post('user_name');
		$password = $this->input->post('password');
		$data = array(
				'user_name' => $username,
				'password'  => $password,
			);
		$this->authentication_model->user_authentication($data);
	}
	public function add_new_user() {
		$this->users_model->add_new_user($_POST);
	}
	public function update_user_data() {
		$this->users_model->update_user_data($_POST);
	}
	public function remove_user_data() {
		$this->users_model->remove_user_data($_POST);
	}
	public function add_new_covid_data() {
		$this->covid_model->add_new_covid_data($_POST);
	}
	public function add_new_covid_data_admin() {
		$this->covid_model->add_new_covid_data_admin($_POST);
	}
	public function add_new_tracing_data() {
		$this->covid_model->add_new_tracing_data($_POST);
	}
	public function add_new_tracing_data_admin() {
		$this->covid_model->add_new_tracing_data_admin($_POST);
	}
	public function remove_data() {
		$this->covid_model->remove_data($_POST);
	}
	public function remove_tracing() {
		$this->covid_model->remove_tracing($_POST);
	}
	
}