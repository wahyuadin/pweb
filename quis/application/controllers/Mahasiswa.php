<?php
class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}



	public function index()
	{
		$data['judul'] = "Daftar Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		$this->load->view('template/header',$data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('template/footer');
	}


	public function tambah()
	{
		$data['judul'] = "Form Tambah Mahasiswa";


		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('nrp', 'NRP', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('jurusan', 'jurusan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header' ,$data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('template/footer');
		}else{
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('mahasiswa');

		}
	}


	public function hapus ($id)
	{
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('mahasiswa');
	}

	public function detail ($id)
	{
		$data['judul'] = 'Detail Data';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$this->load->view('template/header' ,$data);
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('template/footer');
	}
}
