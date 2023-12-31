<?php

class Data_produk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role_id') != '1') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 			 Anda belum login
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  			</button>
		</div>');
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['produk'] = $this->model_produk->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_produk', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_produk	= $this->input->post('nama_produk');
		$keterangan 	= $this->input->post('keterangan');
		$kategori		= $this->input->post('kategori');
		$ukuran_kue		= $this->input->post('ukuran_kue');
		$harga			= $this->input->post('harga');
		$stok			= $this->input->post('stok');
		$gambar  		= $_FILES['gambar']['name'];
		if ($gambar = '') {
		} else {
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';


			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "gambar gagal";
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_produk'	=> $nama_produk,
			'keterangan'	=> $keterangan,
			'kategori'		=> $kategori,
			'ukuran_kue'	=> $ukuran_kue,
			'harga'			=> $harga,
			'stok'			=> $stok,
			'gambar'		=> $gambar
		);

		$this->model_produk->tambah_produk($data, 'tb_produk');
		redirect('admin/data_produk/index');
	}

	public function edit($id)
	{
		$where = array('id_produk' => $id);
		$data['produk'] = $this->model_produk->edit_produk($where, 'tb_produk')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_produk', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id				= $this->input->post('id_produk');
		$nama_produk 	= $this->input->post('nama_produk');
		$keterangan 	= $this->input->post('keterangan');
		$ukuran_kue 	= $this->input->post('ukuran_kue');
		$kategori 		= $this->input->post('kategori');
		$harga 			= $this->input->post('harga');
		$stok 			= $this->input->post('stok');

		$data = array(
			'nama_produk'	=> $nama_produk,
			'keterangan'	=> $keterangan,
			'kategori'		=> $kategori,
			'ukuran_kue'	=> $ukuran_kue,
			'harga'			=> $harga,
			'stok'			=> $stok
		);

		$where = array(
			'id_produk' => $id
		);
		$this->model_produk->update_data($where, $data, 'tb_produk');
		redirect('admin/data_produk/index');
	}

	public function hapus($id)
	{
		$where = array('id_produk' => $id);
		$this->model_produk->hapus_data($where, 'tb_produk');
		redirect('admin/data_produk/index');
	}
}
