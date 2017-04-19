<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Good extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('good_model');
    }
    public function get_goods(){
        $index = $this->input->get('vernier');
        $num = $this->input->get('num');
        $rs = $this->good_model->get_goods($num,$index);
        echo json_encode($rs);
    }
}