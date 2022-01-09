<?php

class Pendaftaran extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }
    public function index()
    {
        $this->load->helper('form');
        $data['judul'] = 'Pendaftaran Mahasiswa';
        $this->load->view('layouts/header', $data);
        $this->load->view('home/pendaftaran');
        $this->load->view('layouts/footer');
    }
    public function tambahData()
    {
        $data['foto_mahasiswa'] = '';
        $foto_mahasiswa = $_FILES['foto_mahasiswa']['name'];
        $data['foto_ktp'] = '';
        $foto_ktp = $_FILES['foto_ktp']['name'];

        $config['upload_path'] = './images';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_mahasiswa') || !$this->upload->do_upload('foto_ktp')) {
            echo 'gagal';
        } else {
            $foto_mahasiswa = $this->upload->data('file_name');
            $foto_ktp = $this->upload->data('file_name');
            $data = [
                "nim" => $this->input->post('nim'),
                "nama" => $this->input->post('nama'),
                "foto_mahasiswa" => $foto_mahasiswa,
                "foto_ktp" => $foto_ktp
            ];
        }
        $this->db->insert('mahasiswa', $data);
        redirect('home');
    }
}
