<?php

class Transaksi extends CI_Controller
{
    public function riwayat_transaksi()
    {
        $this->load->model('model_transaksi');
        $user_id = $this->session->userdata('user_id');
        $riwayat_transaksi = $this->model_transaksi->getRiwayatTransaksiByUserId($user_id);
        $data['riwayat_transaksi'] = $riwayat_transaksi;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('riwayat_transaksi', $data);
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            // Ambil data yang diinput dari form pembayaran
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');
            $jasa_pengiriman = $this->input->post('jasa_pengiriman');

            // Buat array data untuk disimpan ke tabel transaksi
            $data_transaksi = array(
                'tgl_transaksi' => date('Y-m-d'), // Tanggal saat ini
                'nama' => $nama,
                'alamat' => $alamat,
                'notelp' => $notelp,
                'jasa_pengiriman' => $jasa_pengiriman,
            );

            // Simpan data transaksi ke dalam tabel transaksi
            $this->load->model('Model_Transaksi');
            $this->model_transaksi->simpanTransaksi($data_transaksi);

            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf pesanan anda gagal diproses";
        }
    }
}
