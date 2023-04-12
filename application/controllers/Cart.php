<?php



/**
 * 
 */
class Cart extends CI_Controller
{
    public function index()
    {
        $data['produk'] = $this->M_produk->tampil();
        $this->load->model('M_produk');
        $this->load->view('cart', $data);
    }

    public function tambah($id)
    {
        $this->load->model('M_produk');
        $produk = $this->M_produk->tambahcart($id);
        $quantity = $this->input->post('qty');
        $data = array(
            'id' => $produk->id_produk,
            'qty'     => $quantity,
            'price'   => $produk->harga,
            'name'    => $produk->nama_produk,
            'gambar' => $produk->gambar,
            'options' => array('Size' => $produk->ukuran)
        );
        $this->cart->insert($data);
        $this->session->set_flashdata('pesan', 'Berhasil Masuk Keranjang');
        return redirect('home');
    }
    public function deletecart($rowid)
    {
        $this->cart->remove($rowid);
        redirect('cart');
    }
    public function cekout()
    {

        $this->load->view('cekout');
        $data['produk'] = $this->M_produk->tampil();
        $this->load->model('M_produk');
    }
    public function sukses()
    {
        if ($this->cart->total() == "") {
            redirect(base_url());
        }
        $no_order = $this->input->post('no_order');
        $nama = $this->input->post('nama');
        $tgl = date('Y-m-d');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');
        $total = $this->cart->total();

        $data = array(
            'no_order' => $no_order,
            'nama' => $nama,
            'tanggal_pesan' => $tgl,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
            'total' => $total

        );
        $this->db->insert('pesanan', $data);

        $list = '';
        $i = 1;
        $no = 1;
        foreach ($this->cart->contents() as $a) {


            foreach ($this->cart->product_options($a['rowid']) as $option_name => $option_value) {

                $data = array(
                    'no_order' => $this->input->post('no_order'),
                    'id_produk' => $a['id'],
                    'nama_produk' => $a['name'],
                    'ukuran' => $option_value,
                    'harga' => $a['price'],
                    'qty' => $this->input->post('qty' . $i++),
                    'total_harga' => $a['subtotal']

                );
            }

            $this->db->insert('rincian', $data);
        }
        $list .= '*No Order Saya             :*%20' . $no_order . '%0A';


        $this->cart->destroy();
        redirect("https://api.whatsapp.com/send/?phone=6287770173111&text=" . $list);
    }
}
