<?php

class Pendaftaran extends CI_Controller

{
    public function index()
    {
        $data['judul'] = 'Pendaftaran Mahasiswa';
        $this->load->view('layouts/header', $data);
        $this->load->view('home/pendaftaran');
        $this->load->view('layouts/footer');
    }
}
