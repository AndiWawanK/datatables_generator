<?php 

class Mahasiswa extends CI_Model{
    public function _getMahasiswa(){
        return $this->db->get("mahasiswa");
    }
}