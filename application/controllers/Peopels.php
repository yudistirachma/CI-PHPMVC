<?php

class Peopels extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'List Of Peopels';

        $this->load->model('Peopels_model', 'Peopels');
        $this->load->library('pagination');

        //  cek klik url
        if ($this->uri->segment(4) == "ya") {
            $data['keyword'] = null;
            $this->session->set_userdata('keyword', $data['keyword']);
            // ambil data keyword
        } elseif ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else if ($this->input->post('submit') == 0) {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        //    config pagination
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 7;


        // intialize
        $this->pagination->initialize($config);

        // persiapan data untuk model
        $data['start'] = $this->uri->segment(3);
        $data['peopels'] = $this->Peopels->getPeopels($config['per_page'], $data['start'], $data['keyword']);


        // tampilkan view
        $this->load->view('templates/header', $data);
        $this->load->view('peopels/index');
        $this->load->view('templates/footer');
    }
}
