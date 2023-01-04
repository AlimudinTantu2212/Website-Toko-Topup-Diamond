<?php 
class Model_diamond extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_diamond');
    }

    public function tambah_diamond($data, $table  ){
        $this->db->insert($table, $data);
    }

    public function edit_diamond($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function find($id)
    {
        $result = $this->db->where('id_diamond', $id)
                           ->limit(1)
                           ->get('tb_diamond');
        if($result->num_rows() > 0)
        {
            return $result->row();
        }else
        {
            return array();
        }
    }

    public function detail_dm($id_diamond){
        $result = $this->db->where('id_diamond' , $id_diamond)->get('tb_diamond');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function tampil_data_diamond($limit, $start, $keyword = null){
        if ($keyword){
            $this->db->like('kategori', $keyword);
        }
        return $this->db->get('tb_diamond', $limit, $start)->result();
    }

    public function countModel($keyword){
        if($keyword){
            $this->db->like('kategori', $keyword);
        }
        $this->db->from('tb_diamond');
        return $this->db->count_all_results();
    }
}
