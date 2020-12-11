<?php

    class Charts extends CI_Controller {
        
        public function bar_chart() {
   
            $record = $this->chart_model->get_paper();
            // print_r($record);

            foreach($record as $row) {
                  $data['label'][] = $row->nama_dosen;
                  $data['data'][] = (int) $row->publikasi;
            }
            $data['chart_data'] = json_encode($data);

            // echo $data['chart_data'];
            $this->load->view('templates/header');
            $this->load->view('bar_chart',$data);
            $this->load->view('templates/footer');
          }

    }

?>