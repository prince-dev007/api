<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Api_model extends CI_Model
{
    public function userDetails()
    {
       $result =   $this->db->get('userData')->result_array();
       if($result)
       return array('status'=>200,'message'=>'User Details','data'=>$result);
       else
       return array('status'=>false);
    }
}
