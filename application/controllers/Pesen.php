<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pemesanan_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('pemesanan/template/header');
        $this->load->view('pemesanan/pemesanan');
        $this->load->view('pemesanan/template/footer');
    }

    public function simpan_data()
    {
         $simpan_data = $this->pemesanan_model;
        $hasil = $simpan_data->save();

        if($hasil){
            $this->session->set_flashdata('message', 'success');
            redirect('pesen/data_pemesanan');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('pesen');


        }
    }
    public function data_pemesanan()
    {
        $data  = $this->pemesanan_model;
        $hasil['data'] = $data->select();
        $this->load->view('pemesanan/template/header');  
        $this->load->view('data/data_pemesanan', $hasil); 
        $this->load->view('pemesanan/template/footer'); 
    }
    public function update_pemesanan()
    {    
        $data  = $this->pemesanan_model;
        $hasil['data'] = $data->show_data();
        $this->load->view('pemesanan/template/header');  
        $this->load->view('data/update_data', $hasil); 
        $this->load->view('pemesanan/template/footer'); 
    }

    // untuk update data pemesanan
    public function update_data()
    {
        $data = $this->pemesanan_model;
        $update = $data->update();

        if($update){
            $this->session->set_flashdata('message', 'success update');
            redirect('pesen/data_pemesanan');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('data/data_pemesanan');
        }
    }

    // untuk menghapus data pemesanan
    public function delete_data()
    {
        $data = $this->pemesanan_model;
        $delete = $data->delete($this->input->get('id'));

        if($delete){
            $this->session->set_flashdata('message', 'success delete');
            redirect('pesen/data_pemesanan');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('pesen/data_pemesanan');


        }
    }
    
}

/* End of file Pesen.php and path \application\controllers\Pesen.php */
