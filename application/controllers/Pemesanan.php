<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pemesanan_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('dashboard');
        $this->load->view('template/footer');
    }
    
}

/* End of file Pemesanan.php and path \application\controllers\Pemesanan.php */
