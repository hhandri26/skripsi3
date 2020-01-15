<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Master_models extends CI_Model
{

    public function get_table_guru(){
        $this->db->select('a.id, a.alamat, a.tgl_lahir, a.kd_guru, a.nama_guru, a.jenis_kelamin, a.mapel, b.nama_mapel');
        $this->db->from('tb_guru a');
        $this->db->join('tb_mapel b','b.id = a.mapel','left');
        return $this->db->get();
    }

    public function get_data_murid(){
        $this->db->select('a.id, a.nisn, a.nama_murid, a.alamat, a.tgl_lahir, a.jenis_kelamin, a.kelas, b.nama_ruangan');
        $this->db->from('tb_murid a');
        $this->db->join('tb_ruangan b','b.id = a.kelas','left');
        return $this->db->get();

    }

    public function get_jadwal(){
        $this->db->select('a.id, a.id_kelas, a.id_guru, a.id_matapelajaran, a.hari, a.waktu, b.nama_ruangan as kelas, c.nama_guru, d.nama_mapel');
        $this->db->from('tb_jadwal a');
        $this->db->join('tb_ruangan b','b.id = a.id_kelas','left');
        $this->db->join('tb_guru c','c.id = a.id_guru','left');
        $this->db->join('tb_mapel d','d.id = a.id_matapelajaran','left');
        return $this->db->get();

    }

    public function get_data_jadwal($id)
    {
        $this->db->select('a.id, a.id_kelas, a.id_guru, a.id_matapelajaran, a.hari, a.waktu, b.nama_ruangan as kelas, c.nama_guru, d.nama_mapel');
        $this->db->from('tb_jadwal a');
        $this->db->join('tb_ruangan b','b.id = a.id_kelas','left');
        $this->db->join('tb_guru c','c.id = a.id_guru','left');
        $this->db->join('tb_mapel d','d.id = a.id_matapelajaran','left');
        $this->db->where('a.id',$id);
        return $this->db->get();
    }

    public function get_jadwal_murid($id){
        $this->db->select('a.id, a.id_kelas, a.id_guru, a.id_matapelajaran, a.hari, a.waktu, b.nama_ruangan as kelas, c.nama_guru, d.nama_mapel');
        $this->db->from('tb_jadwal a');
        $this->db->join('tb_ruangan b','b.id = a.id_kelas','left');
        $this->db->join('tb_guru c','c.id = a.id_guru','left');
        $this->db->join('tb_mapel d','d.id = a.id_matapelajaran','left');
        $this->db->where('a.id_kelas',$id);
        return $this->db->get();

    }

    public function get_jadwal_guru($id){
        $this->db->select('a.id, a.id_kelas, a.id_guru, a.id_matapelajaran, a.hari, a.waktu, b.nama_ruangan as kelas, c.nama_guru, d.nama_mapel');
        $this->db->from('tb_jadwal a');
        $this->db->join('tb_ruangan b','b.id = a.id_kelas','left');
        $this->db->join('tb_guru c','c.id = a.id_guru','left');
        $this->db->join('tb_mapel d','d.id = a.id_matapelajaran','left');
        $this->db->where('a.id_guru',$id);
        return $this->db->get();

    }

    public function get_penilaian(){
        $this->db->select('a.id, a.id_bulan, a.id_kelas, a.tgl, b.nama_bulan, c.nama_ruangan');
        $this->db->from('tbl_penilaian a');
        $this->db->join('tbl_bulan b','b.id = a.id_bulan','left');
        $this->db->join('tb_ruangan c','c.id = a.id_kelas','left');
        return $this->db->get();

    }

    public function get_data_penilaian($id){
        $this->db->select('a.id, a.id_bulan, a.id_kelas, a.tgl, b.nama_bulan, c.nama_ruangan');
        $this->db->from('tbl_penilaian a');
        $this->db->join('tbl_bulan b','b.id = a.id_bulan','left');
        $this->db->join('tb_ruangan c','c.id = a.id_kelas','left');
        $this->db->where('a.id',$id);
        return $this->db->get();

    }

    public function get_materi(){
        $this->db->select('a.id, a.id_mapel, a.id_kelas, a.nama, a.file , b.nama_mapel, c.nama_ruangan');
        $this->db->from('tbl_materi a');
        $this->db->join('tb_mapel b','b.id = a.id_mapel','left');
        $this->db->join('tb_ruangan c','c.id = a.id_kelas','left');
        return $this->db->get();

    }

    public function get_materi_by($id_kelas){
        $this->db->select('a.id, a.id_mapel, a.id_kelas, a.nama, a.file , b.nama_mapel, c.nama_ruangan');
        $this->db->from('tbl_materi a');
        $this->db->join('tb_mapel b','b.id = a.id_mapel','left');
        $this->db->join('tb_ruangan c','c.id = a.id_kelas','left');
        $this->db->where('id_mapel',1);
        $this->db->where('id_kelas',$id_kelas);
        return $this->db->get();

    }

    public function get_materi_edit($id){
        $this->db->select('a.id, a.id_mapel, a.id_kelas, a.nama, a.file ,b.id as id_mapel, b.nama_mapel, c.nama_ruangan');
        $this->db->from('tbl_materi a');
        $this->db->join('tb_mapel b','b.id = a.id_mapel','left');
        $this->db->join('tb_ruangan c','c.id = a.id_kelas','left');
        $this->db->where('a.id',$id);
        return $this->db->get();
        

    }

    
}