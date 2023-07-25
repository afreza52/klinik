<?php
class Dokter extends CI_Controller
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
        $data['title'] = 'Manajement Data dokter';
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('dokter/v_data', $data);
        $this->load->view('v_footer');
    }
    function tambah()
    {
        $data['title'] = 'Tambah Data dokter';

        $this->load->view('v_header', $data);
        $this->load->view('dokter/v_data_tambah', $data);
        $this->load->view('v_footer');
    }
    function insert()
    {
        $d = $this->input->post('nama_dokter');

        $data = [
            'nama_dokter' => $d
        ];
        $this->m_dokter->insert_data($data);
        redirect('dokter');
    }
    function edit($id)
    {
        $data['title'] = 'Edit Data dokter';

        $where = ['id_dokter' => $id];
        $data['d'] = $this->m_dokter->edit_data($where)->row_array();


        $this->load->view('v_header', $data);
        $this->load->view('dokter/v_data_edit', $data);
        $this->load->view('v_footer');
    }
    function update()
    {
        $id = $this->input->post('id_dokter');
        $d = $this->input->post('nama_dokter');

        $data = [
            'nama_dokter' => $d
        ];
        $where = ['id_dokter' => $id];
        $this->m_dokter->update_data($data, $where);
        redirect('dokter');
    }
    function hapus($id)
    {
        $where = ['id_dokter' => $id];
        $this->m_dokter->hapus_data($where);
        redirect('dokter');
    }
}