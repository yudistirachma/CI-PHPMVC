<?php

class Mahasiswa_model extends CI_Model
{

    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'nim' => $this->input->post('nim', true),
            'jurusan' => $this->input->post('jurusan', true),
        ];
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->delete('mahasiswa', array('id' => $id));
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
        // row_array() untuk mngambil 1 baris result saja
    }

    public function ubahDataMahasiswa($id)
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'nim' => $this->input->post('nim', true),
            'jurusan' => $this->input->post('jurusan', true),
        ];
        $this->db->update('mahasiswa', $data, ['id' => $id]);
    }
    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);

        $this->db->like('nama', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}
