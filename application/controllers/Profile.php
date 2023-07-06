<?php

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('role_id') || $this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda belum login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('auth/login');
        }
        $this->load->model('Model_user');
    }

    public function profile()
    {
        $user_id = $this->session->userdata('user_id'); // Sesuaikan dengan nama sesi ID pengguna yang sesuai
        $this->load->model('Model_user');
        $user = $this->Model_user->get_user($user_id);

        if (!$user) {
            show_error('User not found.');
        }

        // Kirim data pengguna ke view
        $data['user'] = $user;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('profile', $data);
        $this->load->view('templates/footer');
    }

    public function updateProfile()
    {
        // Ambil data yang dikirim oleh pengguna
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $notelp = $this->input->post('notelp');

        // Proses pembaruan profil pada basis data
        // Lakukan sesuai dengan kebutuhan aplikasi Anda

        // Setelah pembaruan berhasil, redirect pengguna kembali ke halaman profil
        redirect('profile');
    }


    public function editProfile()
    {
        // Dapatkan informasi pengguna dari sesi atau basis data
        $user = $this->session->userdata('id'); // Sesuaikan dengan nama sesi pengguna yang sesuai

        //var_dump($user); // Tambahkan baris ini untuk memeriksa nilai dan struktur variabel $user

        // Kirim data pengguna ke halaman pembaruan profil
        $data['user'] = $user;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_profile', $data);
        $this->load->view('templates/footer');
    }
}
