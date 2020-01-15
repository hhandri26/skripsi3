<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Penilaian_models extends CI_Model
{
    public function get_nilai($id_kelas, $id_siswa){
        $this->db->select('a.id_kelas, a.tgl, b.id_penilaian, b.id_siswa, b.id_mapel, b.id_kelas,b.score');
        $this->db->from('tbl_penilaian a');
        $this->db->join('tbl_penilaian_siswa b', 'a.id = b.id_penilaian','left');
        $this->db->where('b.id_kelas', $id_kelas);
        $this->db->where('b.id_siswa', $id_siswa);
        $this->db->order_by('a.tgl');
        return $this->db->get();
    }

    public function get_data_nilai($id_kelas){
        $this->db->select('a.id, a.score, b.nama_murid, b.nisn, c.tgl');
        $this->db->from('tbl_penilaian_siswa a');
        $this->db->join('tb_murid b', 'a.id_siswa = b.id','left');
        $this->db->join('tbl_penilaian c', 'a.id_penilaian = c.id','left');
        $this->db->where('a.id_kelas', $id_kelas);
        $this->db->order_by('c.tgl');
        return $this->db->get();

    }

    public function get_data_nilai_edit($id, $id_kelas){
        $this->db->select('a.id, a.score, a.id_siswa, a.id_penilaian, b.nama_murid, b.nisn, c.tgl');
        $this->db->from('tbl_penilaian_siswa a');
        $this->db->join('tb_murid b', 'a.id_siswa = b.id','left');
        $this->db->join('tbl_penilaian c', 'a.id_penilaian = c.id','left');
        $this->db->where('a.id_kelas', $id_kelas);
        $this->db->where('a.id', $id);
        $this->db->order_by('c.tgl');
        return $this->db->get();

    }

    public function get_data_nilai_per_siswa($id, $id_kelas){
        $this->db->select('a.id, a.score, a.id_siswa, a.id_penilaian, b.nama_murid, b.nisn, c.tgl');
        $this->db->from('tbl_penilaian_siswa a');
        $this->db->join('tb_murid b', 'a.id_siswa = b.id','left');
        $this->db->join('tbl_penilaian c', 'a.id_penilaian = c.id','left');
        $this->db->where('a.id_kelas', $id_kelas);
        $this->db->where('a.id_siswa', $id);
        $this->db->order_by('c.tgl');
        return $this->db->get();

    }
}