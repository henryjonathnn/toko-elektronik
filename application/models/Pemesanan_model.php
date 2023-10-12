<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{
    private $table = 'pemesanan';
    public function select()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }

    public function save()
    {
        $data = array(
            "nama_konsumen" => $this->input->post('nama_konsumen'),
            "nama_barang" => $this->input->post('nama_barang'),
            "jumlah_barang" => $this->input->post('jumlah_barang'),
            "tanggal_pemesanan" => $this->input->post('tanggal_pemesanan'),
            "tanggal_pengambilan" => $this->input->post('tanggal_pengambilan'),
            "jam_pengambilan" => $this->input->post('jam_pengambilan')
        );

        return $this->db->insert($this->table, $data);
    }

    public function show_data()
    {
        $id = $this->input->get('id');
        $this->db->from($this->table)->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function update()
    {
        $data = array(
            "nama_konsumen" => $this->input->post('nama_konsumen'),
            "nama_barang" => $this->input->post('nama_barang'),
            "jumlah_barang" => $this->input->post('jumlah_barang'),
            "tanggal_pemesanan" => $this->input->post('tanggal_pemesanan'),
            "tanggal_pengambilan" => $this->input->post('tanggal_pengambilan'),
            "jam_pengambilan" => $this->input->post('jam_pengambilan')
        );
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update($this->table,$data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
}


/* End of file Pemesanan_model.php and path \application\models\Pemesanan_model.php */
