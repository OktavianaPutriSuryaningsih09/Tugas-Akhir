<?php

class Pembayaran extends CI_Controller
{

    public function konfirmasi_pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('konfirmasi_pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_konfirmasi()
    {
        $config['upload_path'] = './path/ke/direktori/tujuan/'; // Tentukan direktori tujuan untuk menyimpan bukti pembayaran
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048; // Batasan ukuran berkas (dalam kilobita)

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('bukti_pembayaran')) {
            $error = $this->upload->display_errors();
            echo $error;
        } else {
            $data = $this->upload->data();
            $file_path = $data['full_path'];

            // Proses penyimpanan path gambar ke dalam basis data
            // Lakukan langkah-langkah yang diperlukan, seperti mengupdate kolom `bukti_pembayaran` di tabel transaksi dengan path gambar

            // Tampilkan pesan sukses atau redirect ke halaman lain
            echo "Konfirmasi pembayaran berhasil!";
        }
    }
}
