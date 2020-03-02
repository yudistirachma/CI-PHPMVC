<?php


class Home extends CI_Controller
{
    public function index($nama = 'rahma yudistira')
    {
        $data['nama'] = $nama;
        $data['judul'] = 'Halaman Home';
        $this->load->view('templates/header.php', $data);
        $this->load->view('home/index.php');
        $this->load->view('templates/footer.php');
    }
}
