<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['judul'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
}
