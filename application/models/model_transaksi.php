<?php

class Model_transaksi extends CI_Model
{
    public function getRiwayatTransaksiByUserId($user_id)
    {
        $this->db->where('user_id', $user_id);
        return $this->db->get('tb_transaksi')->result();
    }

    public function updateBuktiPembayaran($id_transaksi, $bukti_pembayaran)
    {
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('tb_transaksi', ['bukti_pembayaran' => $bukti_pembayaran]);
    }

    public function simpanTransaksi($data_transaksi)
    {
        $this->db->insert('tb_transaksi', $data_transaksi);
        return $this->db->insert_id(); // Mengembalikan ID transaksi yang baru saja disimpan
    }
}
