<?php
class Obat extends CI_Controller
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
        $data['title'] = 'Manajement Data Obat';
        $data['obat'] = $this->m_obat->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('obat/v_data', $data);
        $this->load->view('v_footer');
    }
    function tambah()
    {
        $data['title'] = 'Tambah Data obat';

        $this->load->view('v_header', $data);
        $this->load->view('obat/v_data_tambah', $data);
        $this->load->view('v_footer');
    }
    function insert()
    {
        $no = $this->input->post('nama_obat');

        $data = [
            'nama_obat' => $no
        ];
        $this->m_obat->insert_data($data);
        redirect('obat');
    }
    function edit($id)
    {
        $data['title'] = 'Edit Data obat';

        $where = ['id_obat' => $id];
        $data['o'] = $this->m_obat->edit_data($where)->row_array();


        $this->load->view('v_header', $data);
        $this->load->view('obat/v_data_edit', $data);
        $this->load->view('v_footer');
    }
    function update()
    {
        $id = $this->input->post('id_obat');
        $no = $this->input->post('nama_obat');

        $data = [
            'nama_obat' => $no
        ];
        $where = ['id_obat' => $id];
        $this->m_obat->update_data($data, $where);
        redirect('obat');
    }
    function hapus($id)
    {
        $where = ['id_obat' => $id];
        $this->m_obat->hapus_data($where);
        redirect('obat');
    }
}