<?php defined('BASEPATH') OR exit('No direct script acces allowed');

class Barang extends CI_Model
{
    // mendefinisikan variabel tabel secara private
    private $_table = "Barang";

    // membuat fungsi rules untuk validasi inputan data
    public $kodeBarang;
    public $namaBarang;
    public $deskripsiBarang;
    public $hargaBarang;
    public $stokBarang;

    public function rules () {
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
            'rules' => 'required'],
        ];
    }

    // mengambil data dari semua database
    // msql_query($con, "select * from barang");
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    //mengambil data dari database perbaris
    //msql_query($son, "select * from barang where" + $KodeBarang +);
    public function getById($id)
    {
        return $this->db->get_where($this->_table,["kodeBarang"=> $id])->row();
    }

    //msql_query($son, "insert into barang values('a','b','c')");
    public function save()
    {
        $post = $this->input->post();
        $this->kodeBarang = uniqid()
        $this->namaBarang = $post["namaBarang"];
        $this->deskripsiBarang = $post["deskripsiBarang"];
        $this->hargaBarang = $post["hargaBarang"];
        $this->stokBarang = $post["stokBarang"];
        $this->db->insert($this->_table,$this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kodeBarang = $post ["id"];
        $this->namaBarang = $post["namaBarang"];
        $this->deskripsiBarang = $post["deskripsiBarang"];
        $this->hargaBarang = $post["hargaBarang"];
        $this->stokBarang = $post["stokBarang"];
        $this->db->update($this->_table, $this, array('kodeBarang'=> $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kodeBarang" => $id));
    }
}