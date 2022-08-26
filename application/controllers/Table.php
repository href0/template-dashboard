<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Table extends CI_Controller
{

    public function index()
    {
        $data = [
            'title'         => 'Table 1',
            'page'          => 'Table',
            'sub_page'      => '',
            'content'       => 'table/index'
        ];
        $this->load->view('template/master', $data);
    }
}
