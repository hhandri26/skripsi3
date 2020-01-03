<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diskusi extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('form', 'security');
            $this->load->library('form_validation');
            $this->load->model('crud_models');
            $this->load->model('security_models');
            $this->load->model('Diskusi_models');
            $this->security_models->get_security();

        }

        public function index(){
            $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
            $data['kelas']                  = $this->crud_models->get_all_data('tb_ruangan')->result();
            $data['script_top']    			= 'admin/script_top';
            $data['script_bottom']  		= 'admin/script_btm';
            $data['admin_nav']				= 'admin/admin_nav';
            $data['judul'] 					= 'Diskusi';
            $data['sub_judul'] 				= 'Pilih Kelas Untuk Diskusi';
            $data['content'] 				= 'diskusi/table';
            $data['nav_top']				= 'diskusi';
            $data['nav_sub']				= 'diskusi_table';
            $this->load->view('admin/home', $data);
        }

        public function start_diskusi($id_kelas){
            $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();       
            $data['id_kelas']               = $id_kelas;
            $data['diskusi']                = $this->Diskusi_models->get_data_diskusi($id_kelas)->result(); 
            $data['script_top']    			= 'admin/script_top';
            $data['script_bottom']  		= 'admin/script_btm';
            $data['admin_nav']				= 'admin/admin_nav';
            $data['judul'] 					= 'Diskusi';
            $data['sub_judul'] 				= 'Mulai Diskusi';
            $data['content'] 				= 'diskusi/diskusi';
            $data['nav_top']				= 'diskusi';
            $data['nav_sub']				= 'diskusi_table';
            $this->load->view('admin/home', $data);
        }

        public function mulai_diskusi($id_kelas){
            return $this->start_diskusi($id_kelas);
        }

        public function submit(){
            $tgl        = date("Y-m-d H:i:s");
            $id_kelas   = $this->input->post('id_kelas');
            $data = array(
                "id_kelas"	=> $id_kelas,
                "id_mapel"  => $this->input->post('id_mapel'),
                "nama"	    => $this->input->post('nama'),
                "des"       => $this->input->post('des'),
                "tgl"       => $tgl,               
            );

            if($this->crud_models->add_data($data,'tbl_diskusi')){
                $this->session->set_flashdata('info', 'Diskusi berhasil di tambah!');				
                redirect('diskusi/start_diskusi/'.$id_kelas);

            }else{
                $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                redirect('diskusi/start_diskusi/'.$id_kelas);
            }
        }
    }
