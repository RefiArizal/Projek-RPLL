<?php

class M_produk extends CI_Model
{
    function tampil()
    {
        return $this->db->get('produk')->result();
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_dataproduk($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function tambahcart($id_produk)
    {
        $result = $this->db->where('id_produk', $id_produk)
            ->limit(1)
            ->get('produk');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
