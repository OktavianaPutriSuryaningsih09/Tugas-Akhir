<?php

class Kategori extends CI_Controller
{
    public function sponge_cake()
    {
        $data['sponge_cake'] = $this->model_kategori->data_spongecake()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('spongecake', $data);
        $this->load->view('templates/footer');
    }

    public function butter_cake()
    {
        $data['butter_cake'] = $this->model_kategori->data_buttercake()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('buttercake', $data);
        $this->load->view('templates/footer');
    }
    public function chiffon_cake()
    {
        $data['chiffon_cake'] = $this->model_kategori->data_chiffoncake()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('chiffoncake', $data);
        $this->load->view('templates/footer');
    }
}
