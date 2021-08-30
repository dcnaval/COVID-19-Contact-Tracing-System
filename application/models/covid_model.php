<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// error_reporting(0);
class Covid_Model extends CI_Model {

    public function __construct()  {
		header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
        parent::__construct();
		$this->load->helper('url');
    }
	
	
	
	public function get_covid_data() {
		$this->db->select('*');
		$this->db->from('covidtracer_positive_list');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_listed_count() {
		$this->db->select('*');
		$this->db->from('covidtracer_positive_list');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function get_tracing_count() {
		$this->db->select('*');
		$this->db->from('covidtracer_contact_tracing');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function add_new_covid_data($data) {
	    $this->db->insert('covidtracer_positive_list',$data);
		redirect('users/coviddata?added');
	}
	public function add_new_covid_data_admin($data) {
	    $this->db->insert('covidtracer_positive_list',$data);
		redirect('admin/coviddata?added');
	}
	public function add_new_tracing_data($data) {
	    $this->db->insert('covidtracer_contact_tracing',$data);
		redirect('users/coviddata/contact_tracing?id='.$data['listID'].'&added');
	}
	public function add_new_tracing_data_admin($data) {
	    $this->db->insert('covidtracer_contact_tracing',$data);
		redirect('admin/coviddata/contact_tracing?id='.$data['listID'].'&added');
	}
	public function covidtracer_contact_tracing($data) {
	    $this->db->select('*');
        $this->db->from('covidtracer_contact_tracing');
        $this->db->where('listID',$data['id']);
        $query = $this->db->get();
        return $query->result();
	}
	public function remove_data($data) {
        $this->db->where('listID', $data['listID']);
		$this->db->delete('covidtracer_positive_list');
		redirect('admin/coviddata?deleted');
    }
	public function remove_tracing($data) {
        $this->db->where('tracingID', $data['tracingID']);
		$this->db->delete('covidtracer_contact_tracing');
		redirect('admin/coviddata/contact_tracing?id='.$data['listID'].'&added');
    }
}
