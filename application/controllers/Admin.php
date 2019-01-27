<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/dashboard');
	}
	public function newpost()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/newpost');
		$this->load->view('admin/footer');
	}
	public function posts()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/post');
		$this->load->view('admin/footer');
	}
	// public function tambah_artikel() {
	// 	if ($this->session->userdata('login') == TRUE) {
	// 		if ($this->input->post('submit')) {
	// 			$this->load->model('m_artikel');
	// 			$this->m_artikel->do_upload();
				
	// 			redirect('cadmin/manajemen_artikel');
	// 		}
	// 		$this->load->plugin('xinha_pi');
	// 		$data['xinha_java']= javascript_xinha(array('isi')); // this line for the xinha
	// 		$data['jenis'] = 'tambah_artikel';
	// 		$this->load->view('admin', $data);
	// 	}
	// 	else {
	// 		redirect('cadmin');
	// 	}
	// }
}
