<?php defined('BASEPATH') or exit('No direct script access allowed');


class Dataset_model extends CI_Model
{
    private $_table_atribut = "atribut";
    private $_table_nilai_atr = "nilai_atribut";
    private $_table_dataset = "dataset";

    public function add_attr()
    {
        $post = $this->input->post();
        $attr = $post['atribut'];
        $status_attr = $post['status_atribut'];

        $data = array(
            'id_atribut' => '',
            'nama_atribut' => $attr,
            'status_atribut' => $status_attr
        );

        $res = $this->db->insert('atribut', $data);
        if($res){
            $response = array('message' =>'Sukses Tambah Atribut', 'status' => true);
            $this->session->set_flashdata('message', $response);
        } else {
            
            $response = array('message' =>'Gagal Tambah Atribut', 'status' => false);
            $this->session->set_flashdata('message', $response);
        }
        redirect(base_url('dataset'));
    }

    
    public function list_atribut(){
        return $this->db->query("SELECT * FROM atribut ORDER BY id_atribut");
    }

    public function detail_atribut($id){
        return $this->db->get_where('atribut', array("id_atribut" => $id));
    }

    public function edit_atribut()
    {
        $post = $this->input->post();
        $this->id_atribut = $post['id_atribut'];
        $this->nama_atribut = $post['atribut'];
        $this->status_atribut = $post['status_atribut'];

        $res = $this->db->update('atribut', $this, array('id_atribut' => $post['id_atribut']));

        if($res){
            $response = array('message' =>'Sukses Edit Atribut', 'status' => true);
            $this->session->set_flashdata('message', $response);
        } else {
            
            $response = array('message' =>'Gagal Edit Atribut', 'status' => false);
            $this->session->set_flashdata('message', $response);
        }
        redirect(base_url('dataset'));
    }

    public function hapus_atribut($id){
        $res = $this->db->delete('atribut',array('id_atribut'=>$id));
        if($res){
            $response = array('message' =>'Sukses Hapus Atribut', 'status' => true);
            $this->session->set_flashdata('message', $response);
        } else {
            
            $response = array('message' =>'Gagal Hapus Atribut', 'status' => false);
            $this->session->set_flashdata('message', $response);
        }
        redirect(base_url('dataset'));
    }

}
