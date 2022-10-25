<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Hotelku extends CI_Controller{ 
    function __construct(){
         parent::__construct();
         $this->load->helper('url');
    }

    public function index(){ 
        $data['judul'] = "Selamat Datang di Hotelku"; 
        $this->load->view('header',$data); 
        $this->load->view('index',$data);
        $this->load->view('footer',$data); 
    } 
    public function reservasi() { 
        $data['judul'] = "Silahkan Reservasi"; 
        $this->load->view('header', $data); 
        $this->load->view('reservasi', $data); 
        $this->load->view('footer', $data); 
    }
    }
?>