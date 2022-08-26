<?php

namespace App\Libraries;

class Authentication {
	
	 public function isLoggedIn () {
  	    return services('auth')->isLoggedIn();
    }

	public function login($email, $password) {
		$model  = new \App\Models\UsersModel();
		$user = $model->validateLogin($email, $password);
    	$count = count($user);
    	if ($count > 0) {
    		$session = session();
    		$session->regenerate();	
    		$session->set("userID", $user[0]['userID']);
			$users = $this->getUserInfo($user[0]['userID']);
    		$session->set("user", $users);
    		return true;
		} else {
			return false;
		}
	}
	
	public function loggededOut() {
		session()->destroy();
	}
	
	 public function getUserInfo($userID) {
    	$model  = new \App\Models\UsersModel();
		
  	    $users = $model->find($userID);
    	return $users;
    }
	

    
} 
