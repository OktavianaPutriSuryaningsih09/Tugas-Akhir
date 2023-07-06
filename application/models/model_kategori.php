<?php

class Model_kategori extends CI_Model
{
	public function data_spongecake()
	{
		return $this->db->get_where("tb_produk", array('kategori' => 'sponge cake'));
	}

	public function data_chiffoncake()
	{
		return $this->db->get_where("tb_produk", array('kategori' => 'chiffon cake'));
	}
	public function data_buttercake()
	{
		return $this->db->get_where("tb_produk", array('kategori' => 'butter cake'));
	}
}
