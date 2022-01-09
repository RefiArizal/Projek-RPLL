<?php

class M_pesanan extends CI_Model
{
    public function tampil_pesanan()
    {
        $this->db->order_by('tanggal_pesan', 'desc');
        return $this->db->get('pesanan')->result_array();
    }
    public function ambilDataById($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function simpan_rincian_pesanan($data_rinci)
    {
        $this->db->insert('rincian', $data_rinci);
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function sum()
    {
        $this->db->select_sum('total');
        $this->db->from('pesanan');
        return $this->db->get('')->row_array();
    }
    public function count_produk()
    {
        $sql = "SELECT count(id_produk) as id_produk from produk";
        $result = $this->db->query($sql);
        return $result->row()->id_produk;
    }
    public function count_pesanan()
    {
        $sql = "SELECT count(no_order) as no_order from pesanan";
        $result = $this->db->query($sql);
        return $result->row()->no_order;
    }
}
