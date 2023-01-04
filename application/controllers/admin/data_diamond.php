<?php

class Data_diamond extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login! Silahkan Login Terlebih Dahulu.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect('auth/login');
        }
    }
    public function index(){
        $data['diamond'] = $this->model_diamond->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_diamond', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi(){
        $kategori       = $this->input->post('kategori');        
        $jumlah         = $this->input->post('jumlah');
        $harga          = $this->input->post('harga');
        $keterangan       = $this->input->post('keterangan');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar=''){}else{
            $config ['upload_path']='./uploads/';
            $config ['allowed_types']='jpg|jpeg|png|';

            $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar')){
                    echo "Gambar Gagal di Upload";
                }else{
                    $gambar=$this->upload->data('file_name');  
                }
            }
            $data = array (
                'kategori'=> $kategori,
                'jumlah'=> $jumlah,
                'harga'=> $harga,
                'keterangan'=> $keterangan,
                'gambar'=> $gambar
            );
            
            $this->model_diamond->tambah_diamond($data, 'tb_diamond');
            redirect('admin/data_diamond/index');
        }
        
        public function edit($id)
        {
            $where = array('id_diamond' =>$id);
            $data['diamond'] = $this->model_diamond->edit_diamond($where, 'tb_diamond')->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/edit_diamond', $data);
            $this->load->view('templates_admin/footer');
        }

        public function update()
        {
            $id = $this->input->post('id_diamond');
            $kategori = $this->input->post('kategori');
            $jumlah = $this->input->post('jumlah');
            $harga = $this->input->post('harga');
            $keterangan = $this->input->post('keterangan');

            $data = array(
                'kategori' => $kategori,
                'jumlah' => $jumlah,
                'harga' => $harga,
                'keterangan' => $keterangan
            );

            $where = array(
                'id_diamond' => $id
            );

            $this->model_diamond->update_data($where,$data,'tb_diamond');
            redirect('admin/data_diamond/index');
        }

        public function hapus ($id){
            $where = array('id_diamond' => $id);
            $this->model_diamond->hapus_data($where, 'tb_diamond');
            redirect('admin/data_diamond/index');
        }
    }