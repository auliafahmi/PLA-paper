<?php

    class User_model extends CI_Model {
        public function __construct() {
            $this->load->database();
        }


        public function login($username, $password) {
            $this->db->where('username', $username);
            $this->db->where('password', $password);

            $result = $this->db->get('users');

            if($result->num_rows() == 1) {
                return $result->row(0)->id;
            } else {
                return false;
            }
        }

        public function get_dosen() {
            // $this->db->order_by('id');
            $query = $this->db->get('dosen');
            return $query->result_array();
        }

        public function tambah_dosen() {
            $data = array(
                'nama' => $this->input->post('nama'),
                'scopus' => $this->input->post('scopus'),
                'publikasi_paper' => $this->input->post('publikasi_paper')
            );

            return $this->db->insert('dosen', $data);
        }


    }

?>