<?php

namespace App\Controllers;

use App\Libraries\Authentication;

class Login extends BaseController
{
    public function index()
    {
        return view('home/login_view.php');
       //$this->load->helper();
       //comment out for activation of helper outside basecontroller
    }
    public function newLogin ()
    {
    	
  	   	$email = $this->request->getPost("email");
    	$password = $this->request->getPost("password");
		
		// $model  = new \App\Models\UsersModel();
    	// $validLogin = $model->validateLogin($email, $password);
    	
		// we are using libary class instad of model class above

		$auth =  new Authentication();
		$validLogin = $auth->login($email, $password);

    	if ($validLogin) {
    		return redirect()->to(base_url("account"));
    	} 
    	else {
    		return redirect()->back();
    	}
    }
    
    public function logout () {
  	    session()->destroy();
    	return redirect()->to(base_url());
    }
    

}


