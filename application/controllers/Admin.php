<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('datatables'); //load library ignited-dataTable
		$this->load->model('mberita'); //load model mberita
		$this->load->model('muser'); 
	}

	public function index()
	{
		if($this->session->userdata('akses')=='1'){
			 $berita = $this->mberita->berita_list();
			 $data['n_post'] = $berita ->num_rows();
			$this->load->view('admin/dashboard',$data);
		}else{
			$this->load->view('admin/login');
		}
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
	public function masuk()
	{
		$this->load->view('admin/login');
	}
	function data_berita(){
		$data = $this->mberita->berita_list()->result();
		echo json_encode($data);
	}

	function get_berita(){
		$id 	= $this->input->get('id');
		$data 	= $this->mberita->get_berita_by_kode($id);
		echo json_encode($data);
	}

	function simpan_berita(){
		$id 	= $this->input->post('id');
		$judul 	= $this->input->post('judul');
		$konten = $this->input->post('konten');
		$gambar = $this->input->post('gambar');
		$iduser = $this->input->post('id_user');
		$data 	= $this->mberita->simpan_berita($id,$judul,$konten,$gambar,$iduser);
		echo json_encode($data);
	}

	function update_berita(){
		$id 	= $this->input->post('id');
		$judul 	= $this->input->post('judul');
		$konten = $this->input->post('konten');
		$gambar = $this->input->post('gambar');
		$iduser = $this->input->post('id_user');
		$data 	= $this->mberita->update_berita($id,$judul,$konten,$gambar,$iduser);
		echo json_encode($data);
	}

	function hapus_berita(){
		$id 	= $this->input->post('id');
		$data 	= $this->mberita->hapus_berita($id);
		echo json_encode($data);
	}

	function auth(){
		$username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

		$cek = $this->muser->cek($username,$password);
		// die($cek);
        if($cek->num_rows() > 0){ //jika login sebagai dosen
        	$data = $cek->row_array();
        	$this->session->set_userdata('masuk',TRUE);
        	$this->session->set_userdata('akses','1');
        	$this->session->set_userdata('iduser',$data['id']);
        	$this->session->set_userdata('username',$data['username']);

        }
         redirect(base_url('admin'));

    }

    function logout(){
    	$this->session->sess_destroy();
    	$url = base_url('admin');
    	redirect($url);
    }

}
