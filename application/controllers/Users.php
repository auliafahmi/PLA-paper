<?php

    class Users extends CI_Controller {
        public function login() {
            $data['title'] = "Admin Login";

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            
            if($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer');
            } else {        
                $username = $this->input->post('username');
                // get and encrypt the password
                $password = md5($this->input->post('password'));

                // login user
                $user_id = $this->user_model->login($username, $password);

                if($user_id) {
                    // Create session
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);
                    // Set message
                    // $this->session->set_flashdata('user_logged_in', 'You are now logged in');
                    redirect('dashboard');
                } else {
                    // Set message
                    // $this->session->set_flashdata('login_failed', 'Login is invalid');
                    redirect('users/login');
                }

                redirect('dashboard');
            }
        }

        // Log out
        public function logout() {
            // unset userdata
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('username');

            // $this->session->set_flashdata('user_logged_out', 'You are now logged out');
            redirect('login');
        } 
        
        public function tambah_dosen() {
            // Check login
            if(!$this->session->userdata('logged_in')) {
                redirect('users/login');
            }
            
            $data['title'] = "Tambah Dosen";

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('scopus', 'Scopus', 'required');
            $this->form_validation->set_rules('publikasi_paper', 'Publikasi Paper', 'required');

            if($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('pages/tambah', $data);
                $this->load->view('templates/footer');
            } else {
                $this->user_model->tambah_dosen();
                redirect('dashboard');
            }
            
        }
    }

?>