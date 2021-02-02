<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller 
		{
			public function __construct()
			{
                parent::__construct();
				$this->load->helper('form', 'security');
				$this->load->library('form_validation');
				$this->load->model('crud_models');
                $this->load->model('security_models');
                $this->load->model('master_models');
				$this->security_models->get_security();

            }

            public function guru()
            {

                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['table']                  = $this->master_models->get_table_guru()->result();
                $data['mapel']                  = $this->crud_models->get_all_data('tb_mapel')->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Guru';
				$data['content'] 				= 'master/guru';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'guru';
				$this->load->view('admin/home', $data);

            }

            public function add_guru()
            {
                $data = array(
                    "kd_guru"	=> $this->input->post('kd_guru'),
                    "nama_guru" => $this->input->post('nama_guru'),
                    "jenis_kelamin" => $this->input->post('jenis_kelamin'),
                    "mapel" => $this->input->post('mapel'),
                    "alamat" => $this->input->post('alamat'),
                    "tgl_lahir" => $this->input->post('tgl_lahir'),
                    "email" => $this->input->post('email'),
                    "no_tlpn" => $this->input->post('no_tlpn'),
                    "agama" => $this->input->post('agama'),
                    "password" =>$this->converPassword(date($this->input->post('tgl_lahir')))
                );

                if($this->crud_models->add_data($data,'tb_guru')){
                    $this->session->set_flashdata('info', 'data berhasil di tambah!');				
                    redirect('master/guru');

                }else{
                    $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                    redirect('master/guru');
                }

            }

            public function form_edit_guru($id){
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['edit']                   = $this->master_models->get_edit_guru($id)->row();
                $data['mapel']                  = $this->crud_models->get_all_data('tb_mapel')->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Guru';
				$data['content'] 				= 'master/edit_guru';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'guru';
				$this->load->view('admin/home', $data);
            }

            public function edit_guru()
            {
                $id 		= $this->input->post('id');
				$data       = array(
                                        "kd_guru"	=> $this->input->post('kd_guru'),
                                        "nama_guru" => $this->input->post('nama_guru'),
                                        "jenis_kelamin" => $this->input->post('jenis_kelamin'),
                                        "mapel" => $this->input->post('mapel'),
                                        "alamat" => $this->input->post('alamat'),
                                        "tgl_lahir" => $this->input->post('tgl_lahir'),
                                        "email" => $this->input->post('email'),
                                        "no_tlpn" => $this->input->post('no_hp'),
                                        "agama" => $this->input->post('agama'),
                                        "password" =>$this->converPassword(date($this->input->post('tgl_lahir')))
                                    );

				if($this->crud_models->edit_data($data,$id,'tb_guru')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/guru');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/guru');
				}

            }

            public function delete_guru()
            {
                $id 		= $this->input->post('id');
                if($this->crud_models->delete_data($id,'tb_guru')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/guru');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/guru');
				}

            }

            public function mapel()
            {
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['table']                  = $this->crud_models->get_all_data('tb_mapel')->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Mata Pelajaran';
				$data['content'] 				= 'master/mapel';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'mapel';
				$this->load->view('admin/home', $data);

            }
            public function add_mapel()
            {
                $data = array(
                    "kd_mapel"	=> $this->input->post('kd_mapel'),
                    "nama_mapel" => $this->input->post('nama_mapel')
                );

                if($this->crud_models->add_data($data,'tb_mapel')){
                    $this->session->set_flashdata('info', 'data berhasil di tambah!');				
                    redirect('master/mapel');

                }else{
                    $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                    redirect('master/mapel');
                }

            }

            public function edit_mapel()
            {
                $id 		= $this->input->post('id');
				$data       = array(
                                        "kd_mapel"	=> $this->input->post('kd_mapel'),
                                        "nama_mapel" => $this->input->post('nama_mapel')
                                    );

				if($this->crud_models->edit_data($data,$id,'tb_mapel')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/mapel');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/mapel');
				}

            }

            public function delete_mapel()
            {
                $id 		= $this->input->post('id');
                if($this->crud_models->delete_data($id,'tb_mapel')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/mapel');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/mapel');
				}

            }

            public function ruangan()
            {
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['table']                  = $this->crud_models->get_all_data('tb_ruangan')->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Ruangan';
				$data['content'] 				= 'master/ruangan';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'ruangan';
				$this->load->view('admin/home', $data);

            }

            public function add_ruangan()
            {
                $data = array(
                    "kd_ruangan"	=> $this->input->post('kd_ruangan'),
                    "nama_ruangan" => $this->input->post('nama_ruangan')
                );

                if($this->crud_models->add_data($data,'tb_ruangan')){
                    $this->session->set_flashdata('info', 'data berhasil di tambah!');				
                    redirect('master/ruangan');

                }else{
                    $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                    redirect('master/ruangan');
                }

            }

            public function edit_ruangan()
            {
                $id 		= $this->input->post('id');
				$data       = array(
                                        "kd_ruangan"	=> $this->input->post('kd_ruangan'),
                                        "nama_ruangan" => $this->input->post('nama_ruangan')
                                    );

				if($this->crud_models->edit_data($data,$id,'tb_ruangan')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/ruangan');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/ruangan');
				}

            }

            public function delete_ruangan()
            {
                $id 		= $this->input->post('id');
                if($this->crud_models->delete_data($id,'tb_ruangan')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/ruangan');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/ruangan');
				}

            }

            public function murid()
            {
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['table']                  = $this->master_models->get_data_murid()->result();
                $data['kelas']                  = $this->crud_models->get_all_data('tb_ruangan')->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Ruangan';
				$data['content'] 				= 'master/murid';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'murid';
				$this->load->view('admin/home', $data);

            }

            public function add_murid()
            {
                $data = array(
                    "nisn"	=> $this->input->post('nisn'),
                    "nama_murid" => $this->input->post('nama_murid'),
                    "jenis_kelamin"	=> $this->input->post('jenis_kelamin'),
                    "kelas" => $this->input->post('kelas'),
                    "alamat" => $this->input->post('alamat'),
                    "tgl_lahir" => $this->input->post('tgl_lahir'),
                    "agama" => $this->input->post('agama'),
                    "tempat_lahir" => $this->input->post('tempat_lahir'),
                    "password" =>$this->converPassword(date($this->input->post('tgl_lahir')))
                );

                if($this->crud_models->add_data($data,'tb_murid')){
                    $this->session->set_flashdata('info', 'data berhasil di tambah!');				
                    redirect('master/murid');

                }else{
                    $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                    redirect('master/murid');
                }

            }

            public function edit_murid()
            {
                $id 		= $this->input->post('id');
				$data       = array(
                                        "nisn"	=> $this->input->post('nisn'),
                                        "nama_murid" => $this->input->post('nama_murid'),
                                        "alamat" => $this->input->post('alamat'),
                                        "tgl_lahir" => $this->input->post('tgl_lahir'),
                                        "agama" => $this->input->post('agama'),
                                        "tempat_lahir" => $this->input->post('tempat_lahir'),
                                        "password" =>$this->converPassword(date($this->input->post('tgl_lahir')))
                                    );

				if($this->crud_models->edit_data($data,$id,'tb_murid')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/murid');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/murid');
				}

            }

            public function delete_murid()
            {
                $id 		= $this->input->post('id');
                if($this->crud_models->delete_data($id,'tb_murid')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/murid');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/murid');
				}

            }

            public function jadwal()
            {
                $data['guru']                   =$this->crud_models->get_all_data('tb_guru')->result();
                $data['materi']                   =$this->crud_models->get_all_data('tbl_materi')->result();
                $data['mapel']                  =$this->crud_models->get_all_data('tb_mapel')->result();
                $data['kelas']                  =$this->crud_models->get_all_data('tb_ruangan')->result();
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['table']                  = $this->master_models->get_jadwal()->result();

				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'jadwal';
				$data['content'] 				= 'master/jadwal';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'jadwal';
				$this->load->view('admin/home', $data);

            }

            public function add_jadwal()
            {
                $data = array(
                    "id_kelas"	        => $this->input->post('id_kelas'),
                    "id_guru"           => $this->input->post('id_guru'),
                    "id_matapelajaran"	=> 1,
                    "date_start"              => $this->input->post('date_start'),
                    "date_end"             => $this->input->post('date_end'),
                    "id_materi"             => $this->input->post('id_materi')
                );

                if($this->crud_models->add_data($data,'tb_jadwal')){
                    $this->session->set_flashdata('info', 'data berhasil di tambah!');				
                    redirect('master/jadwal');

                }else{
                    $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                    redirect('master/jadwal');
                }
            }

            public function edit_jadwal($id)
            {
                $data['guru']                   =$this->crud_models->get_all_data('tb_guru')->result();
                $data['mapel']                  =$this->crud_models->get_all_data('tb_mapel')->result();
                $data['kelas']                  =$this->crud_models->get_all_data('tb_ruangan')->result();
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['edit']                   = $this->master_models->get_data_jadwal($id)->row();

				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'jadwal';
				$data['content'] 				= 'master/edit_jadwal';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'jadwal';
				$this->load->view('admin/home', $data);

            }

            public function update_jadwal()
            {
                $id 		= $this->input->post('id');
                $data = array(
                    "id_kelas"	        => $this->input->post('id_kelas'),
                    "id_guru"           => $this->input->post('id_guru'),
                    "id_matapelajaran"	=> 1,
                    "hari"              => $this->input->post('hari'),
                    "waktu"             => $this->input->post('waktu'),
                    "date_start"              => $this->input->post('date_start'),
                    "date_end"             => $this->input->post('date_end'),
                    "id_materi"             => $this->input->post('id_materi')
                );

                if($this->crud_models->edit_data($data,$id,'tb_jadwal')){
                    $this->session->set_flashdata('info', 'data berhasil di update!');				
                    redirect('master/jadwal');

                }else{
                    $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                    redirect('master/jadwal');
                }

            }

            public function hapus_jadwal($id)
            {
                if($this->crud_models->delete_data($id,'tb_jadwal')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/jadwal');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/jadwal');
				}

            }

            function converPassword($getDate)
            {
                $arrDate    = explode("-", $getDate);
                if(is_array($arrDate)){
                    $date = $arrDate[2].$arrDate[1].$arrDate[0];
                }      
                return $date;
            }

            // master penilaian
            public function penilaian(){
                $data['bulan']                   =$this->crud_models->get_all_data('tbl_bulan')->result();
                $data['kelas']                  =$this->crud_models->get_all_data('tb_ruangan')->result();
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['table']                  = $this->master_models->get_penilaian()->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Penilaian';
				$data['content'] 				= 'master/penilaian';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'penilaian';
				$this->load->view('admin/home', $data);

            }

            public function add_penilaian(){
                $data = array(
                    "id_bulan"	=> $this->input->post('id_bulan'),
                    "id_kelas"  => $this->input->post('id_kelas'),
                    "tgl"	    => $this->input->post('tgl')
                );

                if($this->crud_models->add_data($data,'tbl_penilaian')){
                    $this->session->set_flashdata('info', 'data berhasil di tambah!');				
                    redirect('master/penilaian');

                }else{
                    $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                    redirect('master/penilaian');
                }


            }

            public function edit_penilaian($id){
                $data['bulan']                   =$this->crud_models->get_all_data('tbl_bulan')->result();
                $data['kelas']                  =$this->crud_models->get_all_data('tb_ruangan')->result();
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['edit']                   = $this->master_models->get_data_penilaian($id)->row();

				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Penilaian';
				$data['content'] 				= 'master/edit_penilaian';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'penilaian';
				$this->load->view('admin/home', $data);

            }

            public function update_penilaian(){
                $id 		= $this->input->post('id');
                $data = array(
                    "id_bulan"	=> $this->input->post('id_bulan'),
                    "id_kelas"  => $this->input->post('id_kelas'),
                    "tgl"	    => $this->input->post('tgl')
                );

                if($this->crud_models->edit_data($data,$id,'tbl_penilaian')){
                    $this->session->set_flashdata('info', 'data berhasil di update!');				
                    redirect('master/penilaian');

                }else{
                    $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                    redirect('master/penilaian');
                }

            }

            public function delete_penilaian(){
                $id 		= $this->input->post('id');
                if($this->crud_models->delete_data($id,'tbl_penilaian')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/penilaian');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/penilaian');
				}

            }

            public function materi(){
                $data['mapel']                  = $this->crud_models->get_all_data('tb_mapel')->result();
                $data['kelas']                  = $this->crud_models->get_all_data('tb_ruangan')->result();
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['table']                  = $this->master_models->get_materi()->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Materi';
				$data['content'] 				= 'master/materi';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'materi';
				$this->load->view('admin/home', $data);

            }

            public function add_materi(){
              
                $config =  array(
					'upload_path'     => "./assets/materi/",
					'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                    'encrypt_name'    => TRUE, 
                    'file_name'       =>uniqid()
                );
                $this->load->library('upload',$config);
				$this->upload->initialize($config);
					

				if ( ! $this->upload->do_upload('file')){
                    $this->session->set_flashdata('danger','Materi Harus di upload');
					redirect('master/materi');
				} else {
                    $upload_data  	=$this->upload->data();
                    $nama_file    	=$upload_data['file_name'];
                    $ukuran_file  	=$upload_data['file_size'];

                    $data = array(
                        "id_mapel"	=> $this->input->post('id_mapel'),
                        "id_kelas"  => $this->input->post('id_kelas'),
                        "nama"	    => $this->input->post('nama'),
                        "deskripsi"	    => $this->input->post('deskripsi'),
                        "file"      => $nama_file
                    );
    
                    if($this->crud_models->add_data($data,'tbl_materi')){
                        $this->session->set_flashdata('info', 'data berhasil di tambah!');				
                        redirect('master/materi');
    
                    }else{
                        $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                        redirect('master/materi');
                    }

                }
               

            }

            public function edit_materi($id){
                $data['mapel']                  = $this->crud_models->get_all_data('tb_mapel')->result();
                $data['kelas']                  = $this->crud_models->get_all_data('tb_ruangan')->result();
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['edit']                   = $this->master_models->get_materi_edit($id)->row();

				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Materi';
				$data['content'] 				= 'master/edit_materi';
				$data['nav_top']				= 'master';
				$data['nav_sub']				= 'materi';
				$this->load->view('admin/home', $data);


            }

            public function update_materi(){
                $id 		= $this->input->post('id');
                $config =  array(
					'upload_path'     => "./assets/materi/",
					'allowed_types'   => "gif|jpg|png|jpeg|pdf",
                    'encrypt_name'    => TRUE, 
                    'file_name'       =>uniqid()
                );
                $this->load->library('upload',$config);
				$this->upload->initialize($config);
					

				if ( ! $this->upload->do_upload('file')){
                   
                    $get         = $this->db->get_where('tbl_materi', array('id' => $id))->row();
                    $nama_file   = $get->file;
				} else {
                    $upload_data  	=$this->upload->data();
                    $nama_file    	=$upload_data['file_name'];
                    $ukuran_file  	=$upload_data['file_size'];
                   
                }
                
                $data = array(
                    "id_mapel"	=> $this->input->post('id_mapel'),
                    "id_kelas"  => $this->input->post('id_kelas'),
                    "nama"	    => $this->input->post('nama'),
                    "deskripsi"	    => $this->input->post('deskripsi'),
                    "file"      => $nama_file
                );

                if($this->crud_models->edit_data($data,$id,'tbl_materi')){
                    $this->session->set_flashdata('info', 'data berhasil di update!');				
                    redirect('master/materi');

                }else{
                    $this->session->set_flashdata('danger', 'kesalahan menginput data');				
                    redirect('master/materi');
                }

               


            }

            public function delete_materi(){
                $id 		= $this->input->post('id');
                if($this->crud_models->delete_data($id,'tbl_materi')){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('master/materi');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('master/materi');
				}

            }

            public function download_materi($id_kelas){
                $data['mapel']                  = $this->crud_models->get_all_data('tb_mapel')->result();
                $data['kelas']                  = $this->crud_models->get_all_data('tb_ruangan')->result();
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
                $data['table']                  = $this->master_models->get_materi_by($id_kelas)->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Materi';
				$data['content'] 				= 'master/materi';
				$data['nav_top']				= 'materi';
				$data['nav_sub']				= 'materi';
				$this->load->view('admin/home', $data);

            }

            public function pilih_kelas_materi(){
                $data['mapel']                  = $this->crud_models->get_all_data('tb_mapel')->result();
                $data['kelas']                  = $this->crud_models->get_all_data('tb_ruangan')->result();
                $data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Materi';
				$data['content'] 				= 'master/pilih_kelas_materi';
				$data['nav_top']				= 'materi';
				$data['nav_sub']				= 'materi';
				$this->load->view('admin/home', $data);

            }

            
        }