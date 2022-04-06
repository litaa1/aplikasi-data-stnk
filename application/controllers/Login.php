<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('Login_model', 'lm');
	}
	public function index()
	{
		$this->load->view('halaman_login');
	}
    public function home()
	{
		$this->load->view('template/header');
		$this->load->view('admin/index');
		$this->load->view('template/footer');
	}

	function admin()
    {
		$data['admin'] = $this->lm->admin();

        $this->load->view('template/header');
		$this->load->view('admin/data_admin', $data);
		$this->load->view('template/footer');
    }
	function hapusadmin($id)
	{
		$this->lm->hapusadmin($id);
		redirect('Login/admin');
	}
	function tambah_admin()
	{
		$this->load->view('template/header');
		$this->load->view('admin/tambah_admin');
		$this->load->view('template/footer');
	
	}
	function simpan_admin()
	{
		$this->lm->simpan_admin();
		redirect('Login/admin');
	}
	function konsumen()
	{
		$data['konsumen'] = $this->lm->konsumen();

        $this->load->view('template/header');
		$this->load->view('admin/data_konsumen', $data);
		$this->load->view('template/footer');
	}
	function hapuskonsumen($id)
	{
		$this->lm->hapuskonsumen($id);
		redirect('Login/konsumen');
	}
	function tambah_konsumen()
	{
		$this->load->view('template/header');
		$this->load->view('admin/tambah_konsumen');
		$this->load->view('template/footer');
	
	}
	function simpan_konsumen()
	{
		$this->lm->simpan_konsumen();
		redirect('Login/konsumen');
	}
	function pengambilan()
	{
		$data['pengambilan'] = $this->lm->pengambilan();

		$this->load->view('template/header');
		$this->load->view('admin/data_pengambilan', $data);
		$this->load->view('template/footer');
	}
	function hapuspengambilan($id)
	{
		$this->lm->hapuspengambil($id);
		redirect('Login/pengambilan');
	}
	function tambah_pengambilan()
	{
		$this->load->view('template/header');
		$this->load->view('admin/tambah_pengambilan');
		$this->load->view('template/footer');

	}
	function simpan_pengambilan()
	{
		$this->lm->simpan_pengambilan();
		redirect('Login/pengambilan');
	}

	function edit_admin($id_admin)
	{
	    $data['edit_admin']= $this->lm->edit_admin($id_admin);

		$this->load->view('template/header');
		$this->load->view('admin/edit_admin',$data);
		$this->load->view('template/footer');

	}

	function simpan_editadmin()
	{
		$this->lm->simpan_editadmin();
        redirect('Login/admin');
	}
	function edit_konsumen($id_konsumen)
	{
	    $data['edit_konsumen']= $this->lm->edit_konsumen($id_konsumen);

		$this->load->view('template/header');
		$this->load->view('admin/edit_konsumen',$data);
		$this->load->view('template/footer');

	}

	function simpan_editkonsumen()
	{
		$this->lm->simpan_editkonsumen();
        redirect('Login/konsumen');
	}
	
	function edit_pengambilan($id_pengambil)
	{
	    $data['edit_pengambilan']= $this->lm->edit_pengambilan($id_pengambil);

		$this->load->view('template/header');
		$this->load->view('admin/edit_pengambilan',$data);
		$this->load->view('template/footer');

	}

	function simpan_editpengambilan()
	{
		$this->lm->simpan_editpengambilan();
        redirect('Login/pengambilan');
	}

	function print($id_pengambil)
    {
    $data['pengambilan'] = $this->lm->print($id_pengambil);
    $this->load->view('admin/print',$data);    
    }

}
	


