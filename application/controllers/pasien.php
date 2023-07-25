<?php
class Pasien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }
    }
    function index()
    {
        $data['title'] = 'Manajement Data Pasien';
        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_data', $data);
        $this->load->view('v_footer');
    }
    function tambah()
    {
        $data['title'] = 'Tambah Data Pasien';

        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_data_tambah', $data);
        $this->load->view('v_footer');
    }
    function insert()
    {
        $np = $this->input->post('nama_pasien');
        $j = $this->input->post('jenis_kelamin');
        $u = $this->input->post('umur');

        $data = [
            'nama_pasien' => $np,
            'jenis_kelamin' => $j,
            'umur' => $u
        ];
        $this->m_pasien->insert_data($data);
        redirect('pasien');
    }
    function edit($id)
    {
        $data['title'] = 'Edit Data pasien';

        $where = ['id_pasien' => $id];
        $data['p'] = $this->m_pasien->edit_data($where)->row_array();


        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_data_edit', $data);
        $this->load->view('v_footer');
    }
    function update()
    {
        $id = $this->input->post('id_pasien');
        $np = $this->input->post('nama_pasien');
        $j = $this->input->post('jenis_kelamin');
        $u = $this->input->post('umur');

        $data = [
            'nama_pasien' => $np,
            'jenis_kelamin' => $j,
            'umur' => $u
        ];
        $where = ['id_pasien' => $id];
        $this->m_pasien->update_data($data, $where);
        redirect('pasien');
    }
    function hapus($id)
    {
        $where = ['id_pasien' => $id];
        $this->m_pasien->hapus_data($where);
        redirect('pasien');
    }
}