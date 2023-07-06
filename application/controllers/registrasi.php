<?php

class Registrasi extends CI_Controller
{

	public function index()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required'	=> 'Wajib Diisi'
		]);
		$this->form_validation->set_rules('username', 'Username', 'required', [
			'required'	=> 'Wajib Diisi'
		]);
		$this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', [
			'required'	=> 'Wajib Diisi',
			'matches'		=> 'password tidak cocok'
		]);
		$this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('registrasi');
			//$this->load->view('templates/footer');
		} else {
			$data = array(
				'id'			=> '',
				'nama'			=> $this->input->post('nama'),
				'username'		=> $this->input->post('username'),
				'email'			=> $this->input->post('email'),
				'password'		=> $this->input->post('password_1'),
				'notelp'		=> $this->input->post('notelp'),
				'alamat'		=> $this->input->post('alamat'),
				'role_id'		=> 2,
			);

			$this->db->insert('tb_user', $data);
			redirect('auth/login');
		}
	}
}
