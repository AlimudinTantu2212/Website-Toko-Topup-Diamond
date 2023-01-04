<?php

class Kategori extends CI_Controller{
    public function mobile_legend(){
        $data['mobile_legend'] = $this->model_kategori->data_mobile_legend()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mobile_legend',$data);
        $this->load->view('templates/footer');
    }

    public function pubg_mobile(){
        $data['pubg_mobile'] = $this->model_kategori->data_pubg_mobile()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pubg_mobile',$data);
        $this->load->view('templates/footer');
    }

    public function free_fire(){
        $data['free_fire'] = $this->model_kategori->data_free_fire()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('free_fire',$data);
        $this->load->view('templates/footer');
    }
    
    public function clash_of_clans(){
        $data['clash_of_clans'] = $this->model_kategori->data_clash_of_clans()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('clash_of_clans',$data);
        $this->load->view('templates/footer');
    }

    public function call_of_duty_mobile(){
        $data['call_of_duty_mobile'] = $this->model_kategori->data_call_of_duty_mobile()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('call_of_duty_mobile',$data);
        $this->load->view('templates/footer');
    }
}