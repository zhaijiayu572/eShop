<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart_model extends CI_Model
{
    public function update_cart($uid,$prod_id,$amount){
        return $this->db->where('user_id',$uid)->where('prod_id',$prod_id)->update('t_cart',array('amount'=>$amount));
    }
    public function add_cart($uid,$prod_id,$amount){
        return $this->db->insert('t_cart',array(
            'user_id'=>$uid,
            'prod_id'=>$prod_id,
            'amount'=>$amount
        ));
    }
    public function get_my_cart($uid){
        return $this->db->select('*')->from('t_cart')->join('t_product','t_cart.prod_id=t_product.prod_id')
            ->where('user_id',$uid)->get()->result();
    }
}