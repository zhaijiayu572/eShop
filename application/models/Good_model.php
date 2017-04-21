<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Good_model extends CI_Model
{
    public function get_goods($num,$index){
       return $this->db->select('*')->from('t_product')->join('t_product_img','t_product.prod_id=t_product_img.prod_id')
           ->where('is_main',1)
            ->limit($num,$index)->get()->result();
    }
    public function get_good_by_cata($num,$index,$arr){

    }
    public function get_child_cata(){

    }
}