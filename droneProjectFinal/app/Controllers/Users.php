<?php

namespace App\Controllers;



class Users extends BaseController
{
    public function index()
    {
        return view('home/index.php');
    }
    
    public function listUsers()
    {
    	$model  = new \App\Models\UsersModel();
		
  	    $users = $model->findAll();
    	$baseURL = base_url();
    	
    	 $data = [
    	 	'baseURL' =>  $baseURL,
    	   'users' => $users
    	];
    	
   		return view('home/list_users', $data);
    }
    
    
    
    public function create() {
		//instantiate user model
    	$model  = new \App\Models\UsersModel();
    	//collect all post data
    	$fname = $this->request->getPost("fname");
    	$lname = $this->request->getPost("lname");
		$password = $this->request->getPost("password");
        $value = $this->request->getPost("password");
    	$email = $this->request->getPost("email");
    	$school = $this->request->getPost("school");
		/* Code to implement salting
		$str = "0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz()/$";
		$salt = substr(str_shuffle($str), 0, 10);
        $salted = $value.$salt; 
        $password = hash('sha512', $salted);
		*/
		//upload information to database
		$user = $model->addUser($fname,$lname,$password,$email,$school);
    	//session()->setFlashData("info","New user added");
		//redirect to home
		return redirect()->to('/');
    }

    public function getAll() {
    	$model  = new \App\Models\UsersModel();
    	$students = $model->getAll();
    	$baseURL = base_url();
    	
    	 $data = [
    	 	'baseURL'  => $baseURL,
    	   'user' => $users
    	];
    	
   		return view('home/list_users', $data);
    }
}
