<?php
class Model_kategori extends CI_Model{

    public function data_mobile_legend(){
        return $this->db->get_where("tb_diamond",array('kategori' => 'mobile legend'));
    }

    public function data_pubg_mobile(){
        return $this->db->get_where("tb_diamond",array('kategori' => 'pubg mobile'));
    }

    public function data_free_fire(){
        return $this->db->get_where("tb_diamond",array('kategori' => 'free fire'));
    }

    public function data_clash_of_clans(){
        return $this->db->get_where("tb_diamond",array('kategori' => 'clash of clans'));
    }

    public function data_call_of_duty_mobile(){
        return $this->db->get_where("tb_diamond",array('kategori' => 'call of duty mobile'));
    }
}