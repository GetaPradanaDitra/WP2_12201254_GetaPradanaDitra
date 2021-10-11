<?php
class controller_latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. Selamat Belajar WEB PROGRAMMING";
        //$this->load->view('view-latihan');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('models_latihan1');
        $hasil = $this->models_latihan1->jumlah($n1, $n2);
        echo "hasil penjumlahan dari". $n1 ." + ". $n2 ." = " 
.$hasil;

    }
}