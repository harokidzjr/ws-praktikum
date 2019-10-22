<?php
class Produk extends CI_Controller{

    public function index(){
        $data = apiRequest("produk","GET");
        var_dump($data);
    }
}
