<?php

/**
 * 
 */
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username Tidak Boleh Kosong',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Tidak Boleh Kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('login/login');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'role_id' => $user['role_id']

                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('admin');
                } else {
                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('login', 'Username atau Password salah!');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('login', 'User tidak terdaftar');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata['username'];
        $this->session->unset_userdata['role_id'];
        $this->session->set_flashdata('login', 'Anda berhasil logout');
        redirect('home');
    }
}
