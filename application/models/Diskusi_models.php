<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Diskusi_models extends CI_Model
{
    public function get_data_diskusi($id_kelas){
        $this->db->select('*');
        $this->db->from('tbl_diskusi');
        $this->db->where('id_kelas', $id_kelas);
        $this->db->where('id_mapel',1);
        return $this->db->get();

    }
}