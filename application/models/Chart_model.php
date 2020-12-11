<?php

    Class Chart_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }

        public function get_paper (){
            $query =  $this->db->query("SELECT nama as nama_dosen, publikasi_paper as publikasi FROM dosen"); 
            
           return $query->result();
        }
        



    }

?>