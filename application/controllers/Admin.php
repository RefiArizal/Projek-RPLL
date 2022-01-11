<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['count_produk'] = $this->M_pesanan->count_produk();
        $data['count_pesanan'] = $this->M_pesanan->count_pesanan();
        $data['total'] = $this->M_pesanan->sum();
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin/footer');
    }
    public function produk()
    {
        $data['produk'] = $this->M_produk->tampil();
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/produk', $data);
        $this->load->view('templates/admin/footer');
    }
    public function editdata($id)
    {
        $where = array('id_produk' => $id);
        $data['produk'] = $this->M_produk->edit_dataproduk($where, 'produk')->row_array();
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/edit', $data);
        $this->load->view('templates/admin/footer');
    }
    public function editdata_aksi()
    {
        $id_produk = $this->input->post('id_produk');
        $nama_produk = $this->input->post('nama_produk');
        $ukuran = $this->input->post('ukuran');
        $harga = $this->input->post('harga');
        $gambarlama = $this->input->post('gambarlama');
        $gambar = $_FILES['gambar'];
        if ($gambar) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '5120';
            $config['upload_path'] = './assets/backend/img/varian/';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $fotobaru = $this->upload->data('file_name');
                $this->db->set('gambar', $fotobaru);
                if (file_exists('./assets/backend/img/varian/' . $gambarlama));
                unlink('./assets/backend/img/varian/' . $gambarlama);
            } else {
                echo "upload gagal";
            }
        }

        $this->db->set('nama_produk', $nama_produk);
        $this->db->set('ukuran', $ukuran);
        $this->db->set('harga', $harga);
        $this->db->where('id_produk', $id_produk);

        $this->db->update('produk');

        $this->session->set_flashdata('pesan', 'Data berhasil diedit');
        redirect('admin/produk');
    }
    public function tambahdata()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/tambahdata');
        $this->load->view('templates/admin/footer');
    }
    public function tambahdataproduk_aksi()
    {
        $gambar = $_FILES['gambar'];
        if ($gambar = '') {
        } else {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '5120';
            $config['upload_path'] = './assets/backend/img/varian/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data('file_name');
            } else {
                echo "upload gagal";
            }
        }
        $data = [
            'nama_produk' => $this->input->post('nama_produk'),
            'ukuran' => $this->input->post('ukuran'),
            'harga' => $this->input->post('harga'),
            'gambar' => $gambar
        ];
        $this->db->insert('produk', $data);
        $this->session->set_flashdata('pesan', 'Data berhasil ditambahkan');
        redirect('admin/produk');
    }
    public function hapusproduk($id)
    {
        $where = array('id_produk' => $id);
        $data = $this->M_pesanan->ambilDataById($where, 'produk')->row();
        $gambar = 'assets/backend/img/varian/' . $data->gambar;

        if (is_readable($gambar) && unlink($gambar)) {
            $this->M_produk->delete_data($where, 'produk');
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
            redirect('admin/produk');
        } else {
            echo "gagal";
        }
    }
    public function pesanan()
    {
        $data['pesanan'] = $this->M_pesanan->tampil_pesanan();
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/pesanan', $data);
        $this->load->view('templates/admin/footer');
    }
    public function detail($id)
    {
        $where = array('no_order' => $id);
        $data['nama'] = $this->M_pesanan->ambilDataById($where, 'pesanan')->result_array();
        $data['rincian'] = $this->M_pesanan->ambilDataById($where, 'rincian')->result_array();
        $this->load->model('M_pesanan');
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/admin/footer');
    }

    public function penjualan()
    {
        $data['pesanan'] = $this->M_pesanan->tampil_pesanan();
        $data['sum'] = $this->M_pesanan->sum();
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/penjualan', $data);
        $this->load->view('templates/admin/footer');
    }
    public function print()
    {
        $data['pesanan'] = $this->M_pesanan->tampil_pesanan();

        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('templates/admin/topbar');
        $this->load->view('admin/print', $data);
        $this->load->view('templates/admin/footer');
    }
    public function cetakperiode()
    {


        $this->load->view('templates/admin/header');

        $this->load->view('admin/cetakperiode');
    }
    public function hapus($id)
    {
        $where = array('no_order' => $id);
        $this->M_pesanan->delete_data($where, 'rincian');
        $this->M_pesanan->delete_data($where, 'pesanan');
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('admin/pesanan');
    }
}
