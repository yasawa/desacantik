<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Desa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function pipaPutih()
    {
        $data['judul'] = 'Desa Pipa Putih';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('desa/pipaputih');
        $this->load->view('templates/footer');
    }
    public function burai()
    {
        $data['judul'] = 'Desa Burai';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('desa/burai');
        $this->load->view('templates/footer');
    }
}
