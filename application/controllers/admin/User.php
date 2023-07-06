<?php

class User extends CI_Controller
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
        $this->load->model('Model_user');
    }
    public function index()
    {
        $data['users'] = $this->Model_user->tampil_datauser()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/datauser', $data);
        $this->load->view('templates_admin/footer');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Model_user->hapus_datauser($where, 'tb_user');
        redirect('admin/user/index');
    }
    public function detail($id)
    {
        $data['users'] = $this->Model_user->detail_user($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_user', $data);
        $this->load->view('templates_admin/footer');
    }
}
