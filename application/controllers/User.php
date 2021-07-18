<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
	public function index()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }
    public function daftar_data()
    {
        $this->form_validation->set_rules('nama','nama','required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar Data';
            $data['tes'] = $this->input->post('nama');
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            if($_GET){
                $data['list'] = $this->db->like('nama', $_GET['search'])->get('data_'.$this->uri->segment(1))->result_array();
            } else {
                $data['list'] = $this->db->get('data_'.$this->uri->segment(1))->result_array();
            }
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('user/daftar_data', $data);
            $this->load->view('template/footer');
        } else {
            $this->_input_data();
        }
    }

    public function daftar_pdf()
    {
        if (!$_FILES) {
            # code...
            $data['title'] = 'Daftar Dokumen';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['list'] = $this->db->get_where($this->uri->segment(1), ['id_data' => $this->uri->segment(2)])->result_array();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('user/daftar_pdf', $data);
            $this->load->view('template/footer');
        } else{
            if ($_FILES['dokumen']['name']) {
                $this->_input_dokumen();
            } else {
                redirect($this->uri->slash_segment(1).$this->uri->segment(2));
            }
        }
    }
    private function _input_dokumen(){
        $pdf = $_FILES['dokumen']['name'];
        if ($pdf != '') {
            $config['upload_path'] = './assets/data_pdf/';
            $config['allowed_types'] = 'pdf';
            $config['max_filename']     = '30';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('dokumen')) {
                echo "Upload Gagal";
                die();
            } else {
                $pdf = $this->upload->data('file_name');
            }
            $data = array(
                'id_data'       => $this->uri->segment(2),
                'pdf'           => $pdf,
            );
            $this->db->insert($this->uri->segment(1),$data);
            redirect($this->uri->slash_segment(1).$this->uri->segment(2));
        }
    }
    private function _input_data(){
        $data = array(
            'nama'          => $this->input->post('nama')
        );
        $this->db->insert('data_'.$this->uri->segment(1),$data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil ditambahkan</div>');
        redirect($this->uri->segment(1));
    }
    public function hapus_data()
    {
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete("data_".$this->uri->segment(1));
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil dihapus</div>');
        redirect($this->uri->segment(1));
    }
    public function hapus_pdf(){
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete($this->uri->segment(1));
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil dihapus</div>');
        redirect($this->uri->slash_segment(1).$this->uri->segment(3));
    }
}
