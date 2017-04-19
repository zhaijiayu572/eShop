<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cart_model');
    }
    public function update_cart(){
        $prod_id = $this->input->get('prod_id');
        $amount = $this->input->get('amount');
        $uid = 1;//$this->session->uid;
        $rs = $this->cart_model->update_cart($uid,$prod_id,$amount);
        if($rs){
            echo 'success';
        }else{
            echo 'fail';
        }
    }
    public function add_cart(){
        $prod_id = $this->input->post('prod_id');
        $amount = $this->input->post('amount');
        $uid = 1;//$this->session->uid;
        $rs = $this->cart_model->add_cart($uid,$prod_id,$amount);
        if($rs){
            echo 'success';
        }else{
            echo 'fail';
        }
    }
    public function get_my_cart(){
        $uid = 1;//$this->session->uid;
        $rs = $this->cart_model->get_my_cart($uid);
        echo json_encode($rs);
    }
    public function empty_cart(){
        $uid = 1;//$this->session->uid;
        $rs = $this->cart_model->empty_cart($uid);
        if($rs){
            echo "success";
        }else{
            echo 'fail';
        }
    }
}