<?php

class M_saldo extends CI_Model
{
    public function sum_pemasukan($tgl1, $tgl2)
    {
        $this->db->select('*');
        $this->db->from('pesanan');
        $this->db->where('total');
        $this->db->where('tanggal_pesan >=', $tgl1);
        $this->db->where('tanggal_pesan <=', $tgl2);
        return $this->db->get('');
    }
}
