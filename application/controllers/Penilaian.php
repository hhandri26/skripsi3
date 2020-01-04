<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('form', 'security');
        $this->load->library('form_validation');
        $this->load->model('crud_models');
        $this->load->model('security_models');
        $this->load->model('Penilaian_models');
        $this->security_models->get_security();

    }

    public function index(){
        $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
        $data['kelas']                  = $this->crud_models->get_all_data('tb_ruangan')->result();
        $data['script_top']    			= 'admin/script_top';
        $data['script_bottom']  		= 'admin/script_btm';
        $data['admin_nav']				= 'admin/admin_nav';
        $data['judul'] 					= 'Penilaian';
        $data['sub_judul'] 				= 'Pilih Kelas Untuk Input Nilai';
        $data['content'] 				= 'penilaian/table';
        $data['nav_top']				= 'nilai';
        $data['nav_sub']				= 'nilai';
        $this->load->view('admin/home', $data);
    }

    public function assign_nilai($id_kelas){
        $data['id_kelas']               = $id_kelas;
        $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
        $data['pertemuan']              = $this->crud_models->get_all_data('tbl_penilaian')->result();
        $data['siswa']                  = $this->db->get_where('tb_murid', array('kelas' => $id_kelas))->result();
        $data['table']                  = $this->Penilaian_models->get_data_nilai($id_kelas)->result();
        $data['script_top']    			= 'admin/script_top';
        $data['script_bottom']  		= 'admin/script_btm';
        $data['admin_nav']				= 'admin/admin_nav';
        $data['judul'] 					= 'Penilaian';
        $data['sub_judul'] 				= 'input nilai';
        $data['content'] 				= 'penilaian/table_penilaian';
        $data['nav_top']				= 'nilai';
        $data['nav_sub']				= 'nilai';
        $this->load->view('admin/home', $data);

    }

    public function get_data_nilai($id_kelas){

        $data = array();
        $siswa = $this->db->get_where('tb_murid', array('kelas' => $id_kelas))->result();

        foreach($siswa as $row){
            $dat['nama_murid'] = $row->nama_murid;
            $dat['nisn']       = $row->nisn;
            $dat['nilai']      = array();
            $cek_nilai         = $this->Penilaian_models->get_nilai($id_kelas, $row->id)->result();
            $pet               = 1;
            foreach($cek_nilai as $row2){
                $tad['pertemuan'] = $pet++;
                $tad['tgl']     = date('d F, Y', strtotime($row2->tgl));
                $tad['score']   = $row2->score;
                array_push($dat['nilai'],$tad);
            }
            array_push($data,$dat);
        }
        echo json_encode($data);





    }

    public function add_nilai(){
        $id_kelas = $this->input->post('id_kelas');
        $data = array(
            "id_penilaian" => $this->input->post('id_penilaian'),
            "id_siswa"     => $this->input->post('id_siswa'),
            "id_mapel"	   => $this->input->post('id_mapel'),
            "id_kelas"     => $this->input->post('id_kelas'),
            "score"        =>$this->input->post('score')
        );

        if($this->crud_models->add_data($data,'tbl_penilaian_siswa')){
            $this->session->set_flashdata('info', 'data berhasil di tambah!');				
            redirect('penilaian/assign_nilai/'.$id_kelas);

        }else{
            $this->session->set_flashdata('danger', 'kesalahan menginput data');				
            redirect('penilaian/assign_nilai/'.$id_kelas);
        }
    }

    public function edit_nilai(){

    }

    public function update_nilai(){

    }

    public function delete_nilai(){
        
    }
}