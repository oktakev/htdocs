<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    private $_table = "barang";

    public $kodeBarang;
    public $namaBarang;
    public $deskripsiBarang;
    public $hargaBarang;
    public $stokBarang;

    public function rules()
    {
        return [
            ['field' => 'namaBarang',
            'label' => 'Nama Barang',
            'rules' => 'required'],

            ['field' => 'deskripsiBarang',
            'label' => 'Deskripsi Barang',
            'rules' => 'required'],

            ['field' => 'hargaBarang',
            'label' => 'Harga Barang',
            'rules' => 'numeric'],
            
            ['field' => 'stokBarang',
            'label' => 'Stok Barang',
            'rules' => 'numeric']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}