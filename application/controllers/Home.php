<?php

class Home extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }
    public function index()
    {
        $data['judul'] = 'data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('layouts/header', $data);
        $this->load->view('home/index');
        $this->load->view('layouts/footer');
    }
}
