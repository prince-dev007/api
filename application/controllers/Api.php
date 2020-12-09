<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require("application/libraries/REST_Controller.php");

class Api extends REST_Controller {

	public function index_get()
	{
		$this->response([
            'status'=>200,
            'message'=>'Hello World'
        ]);
    }
    public function user_get()
    {
        $this->load->model('Api_model');
        $response = $this->Api_model->userDetails();
        $this->response($response);
    }

    public function user_post()
    {

    }
    public function user_put()
    {
        
    }
    public function user_delete()
    {
        
    }
}
