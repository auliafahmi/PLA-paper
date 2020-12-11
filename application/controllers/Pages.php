<?php
    class Pages extends CI_Controller {

        public function index() {
            $data['title'] = 'Visualisasi Data Publikasi Paper';
            $data['p'] = 'Dosen Departemen Pendidikan Ilmu Komputer';

            $record = $this->chart_model->get_paper();
            // print_r($record);

            foreach($record as $row) {
                  $data['label'][] = $row->nama_dosen;
                  $data['data'][] = (int) $row->publikasi;
            }

            $data['chart_data'] = json_encode($data);

            // $this->load->view('templates/header');
            $this->load->view('pages/index', $data);
            $this->load->view('pages/chartview');
            $this->load->view('templates/footer');
        }
        
        public function dashboard() {
            // Check login
            if(!$this->session->userdata('logged_in')) {
                redirect('users/login');
            }

            $record = $this->chart_model->get_paper();
            // print_r($record);
            
            foreach($record as $row) {
                $data['label'][] = $row->nama_dosen;
                $data['data'][] = (int) $row->publikasi;
            }

                $data['chart_data'] = json_encode($data);
            
                $data['title'] = "Selamat Datang";

                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('pages/dashboard', $data);
                $this->load->view('pages/chartview');
                $this->load->view('templates/footer');
        }

        
        public function dosen() {
            // Check login
            if(!$this->session->userdata('logged_in')) {
                redirect('users/login');
            }

            $data['title'] = "Data Publikasi Paper Dosen";

            $data['dosen'] = $this->user_model->get_dosen();

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('pages/dosen', $data);
            $this->load->view('templates/footer');
        }


    }

?>