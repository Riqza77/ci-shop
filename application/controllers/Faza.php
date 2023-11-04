<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Faza extends MY_Controller {

    public function index($page = null)
    {
        
        $role = $this->session->userdata('role');
        if ($role == 'admin') {
            redirect(base_url('product'));
            return;
        }
        $data['title'] = 'Homepage';
        $data['page'] = 'pages/home/home';     // Mengarahkan halaman

        $this->view($data);
    }
} 