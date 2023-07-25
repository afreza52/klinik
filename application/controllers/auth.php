<?php

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();


    }
    public function index()
    {
        $this->load->view('v_login');
    }
    public function login()
    {
        $user = $this->input->post('username', true);
        $pass = md5($this->input->post('password', true));

        //rule validasi
        $this->form_validation->set_rules('username', 'Usernmae', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() != false) {

            $where = [
                'username' => $user,
                'password' => $pass
            ];

            $ceklogin = $this->m_auth->login($where)->num_rows();

            if ($ceklogin > 0) {
                $sess_data = [
                    'login' => 'OK',
                    'username' => $user

                ];

                $this->session->set_flashdata($sess_data);

                redirect(base_url());
            } else {
                redirect('auth');
            }
        } else {
            $this->load->view('v_login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}