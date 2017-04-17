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
        $rs = $this->good_model->get_goods(1,0);
        echo json_encode($rs);
    }
}