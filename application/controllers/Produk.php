<?php

class Produk extends CI_Controller {

	public function index() {
		$params = array(
			"page" => 1,
			"per_page" => 5,
			"search" => ""
		);
		$result = apiRequest("produk?".http_build_query($params), "GET");
		$meta = $result["body"]->meta;
		$products = $result["body"]->produk_data;
		$data = array(
			"products" => $products,
			"page" => "produk/v_list_produk"
		);
		$this->load->view("layout/main", $data);
	}

	public function register() {
		$data = array(
			"page" => "produk/v_register_produk"
		);
		$this->load->view("layout/main", $data);
	}

	public function proses_simpan() {
		$produk = $this->input->post();
		$result = apiRequest("produk", "POST",$produk);
		echo $result["kode"];
	}
}
