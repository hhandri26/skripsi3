<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
		{
			public function __construct()
			{
				parent::__construct();
				$this->load->helper('form', 'security');
				$this->load->library('form_validation');
				$this->load->library('pdf');
				$this->load->model('admin_models');
				$this->load->model('security_models');
				$this->load->model('master_models');
				$this->load->model('crud_models');

				$this->security_models->get_security();

			}
// ---------------------------------------------Admin Login & Logout -----------------------------------------------------------//
			public function index()
			{
				$this->security_models->get_security();
				$data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['count_murid'] 			= $this->admin_models->count_murid();
				$data['count_guru'] 			= $this->admin_models->count_guru();
				$data['count_materi'] 			= $this->admin_models->count_materi();
				$data['count_kelas'] 			= $this->admin_models->count_kelas();
				$data['jadwal'] 				= $this->master_models->get_jadwal()->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Home';
				$data['sub_judul'] 				= 'Dashboard';
				$data['content'] 				= 'admin/dashboard';
				$data['nav_top']				= 'dashboard';
				$data['nav_sub']				= 'home';
				$this->load->view('admin/home', $data);
			}

			

		

			public function cetak($type){
				if($type=='guru'){
					$data['guru']		=$this->admin_models->get_data_guru()->result();
					$html = $this->load->view('cetak/guru', $data, true);

				}elseif($type=='murid'){
					$data['murid']		=$this->admin_models->get_data_murid()->result();
					$html = $this->load->view('cetak/murid', $data, true);
					

				}elseif($type=='mapel'){
					$data['mapel']		=$this->crud_models->get_all_data('tb_mapel')->result();
					$html = $this->load->view('cetak/mapel', $data, true);

				}elseif($type=='ruangan'){
					$data['ruangan']		=$this->crud_models->get_all_data('tb_ruangan')->result();
					$html = $this->load->view('cetak/ruangan', $data, true);

				}elseif($type=='classmeet'){
					$data['classmeet']		= $this->admin_models->get_data_role()->result();
					$html = $this->load->view('cetak/classmeet', $data, true);

				}else{
					$data['jadwal']		=$this->master_models->get_jadwal()->result();
					$html = $this->load->view('cetak/jadwal', $data, true);
				} 				
				$this->pdf->generate($html,'contoh');
			}

			public function cetak_mapel_murid($id){
				$data['jadwal']		=$this->master_models->get_jadwal_murid($id)->result();
				$html = $this->load->view('cetak/jadwal', $data, true);
				$this->pdf->generate($html,'contoh');

			}
			public function cetak_mapel_guru($id){
				$data['jadwal']		=$this->master_models->get_jadwal_guru($id)->result();
				$html = $this->load->view('cetak/jadwal', $data, true);
				$this->pdf->generate($html,'contoh');

			}
			
		}