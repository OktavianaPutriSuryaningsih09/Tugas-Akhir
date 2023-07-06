<?php

class Model_invoice extends CI_Model
{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama 	= $this->input->post('nama');
		$alamat = $this->input->post('alamat');

		$invoice = array(
			'nama'			=> $nama,
			'alamat'		=> $alamat,
			'tgl_pesan'		=> date('Y-m-d H:i:s'),
			'batas_bayar'	=> date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
		);
		$this->db->insert('tb_invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item) {
			$data = array(
				'id_invoice'		=> $id_invoice,
				'id_produk'			=> $item['id'],
				'nama_produk'		=> $item['name'],
				'jumlah'			=> $item['qty'],
				'harga'				=> $item['price'],
				'ukuran_kue'		=> $item['ukuran_kue'],
				'jasa_pengiriman'	=> $this->input->post('jasa_pengiriman'),
				'notelp'			=> $this->input->post('notelp'),
				'bank'				=> $this->input->post('bank'),
			);
			$this->db->insert('tb_pesanan', $data);

			//oper database dari pesanan ke invoice
			$this->db->set('nama_produk', $item['name']);
			$this->db->set('harga', $item['price']);
			$this->db->set('jumlah', $item['qty']);
			$this->db->set('ukuran_kue', $item['ukuran_kue']);
			$this->db->set('jasa_pengiriman', $this->input->post('jasa_pengiriman'));
			$this->db->set('notelp', $this->input->post('notelp'));
			$this->db->set('bank', $this->input->post('bank'));
			$this->db->where('id', $id_invoice);
			$this->db->update('tb_invoice');
		}

		return TRUE;
	}
	public function tampil_data()
	{
		$result = $this->db->get('tb_invoice');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	public function ambil_id_invoice($id_invoice)
	{
		$result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return false;
		}
	}
	public function ambil_id_pesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	public function hapus_invoice($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
