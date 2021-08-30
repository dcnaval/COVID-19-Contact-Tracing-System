<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(0);
class Authentication_Model extends CI_Model {

    public function __construct()  {
		header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
        parent::__construct();
		$this->load->helper('url');
    }
	
	
	
	public function user_authentication($data) {
		$this->db->select('*');
		$this->db->from('covidtracer_user_accounts');
		$this->db->where($data);
		$query = $this->db->get();
		if ( $query->num_rows() > 0 ) {
					$datas 	      = $query->result();
					$session_data    = array(
						'userid'              => $datas[0]->accountID,
						'username'            => $datas[0]->user_name,
						'name'                => $datas[0]->first_name .' '. $datas[0]->last_name,
						);
					$this->session->set_userdata('logged_in', $session_data);
					if($datas[0]->userLevel ==1){
							redirect('admin/index');
					} else{
							redirect('users/index');
					}
				
		} else {
							redirect('welcome?error&login');
		}
	}
	
}
