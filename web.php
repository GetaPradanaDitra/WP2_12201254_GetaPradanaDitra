<?php
defined('BASEPATH') or exit ('no direct script acces allowed');

class web extends CI_Controller

    function _construct(){
        parent::_construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = "halaman depan";
        $this->load->views('v_header',$data);
        $this->load->views('v_index',$data);
        $this->load->views('v_footer',$data);
    }

    public function about()
    {
        $data['judul'] = "halaman about";
        $this->load->views('v_header',$data);
        $this->load->views('v_about',$data);
        $this->load->views('v_footer',$data);
    }
}