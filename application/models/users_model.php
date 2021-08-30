<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(0);
class Users_Model extends CI_Model {

    public function __construct()  {
		header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
        parent::__construct();
		$this->load->helper('url');
    }
	
	
	
	public function get_users_data() {
		$this->db->select('*');
		$this->db->from('covidtracer_user_accounts');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function add_new_user($data) {
	    $this->db->insert('covidtracer_user_accounts',$data);
		redirect('admin/users?added');
	}
	public function remove_user_data($data) {
        $this->db->where('accountID', $data['accountID']);
		$this->db->delete('covidtracer_user_accounts');
		redirect('admin/users?deleted');
    }
	public function update_user_data($data) {
	    $this->db->where('accountID', $data['accountID']);
        $this->db->update('covidtracer_user_accounts', $data);
		redirect('admin/users?updated');
	}
	
}
