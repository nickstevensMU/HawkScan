<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model {

	protected $DBGroup = 'default';
    protected $table = "user";
	protected $allowedFields = ['userID','fname','lname','password','email','school'];
	protected $returnType = 'array';
	protected $primaryKey = 'userID';
	
	protected $validationRules = [
		"fname" => 'required',
		"lname" => 'required',
		"password" => 'required',
		"email" => 'required',
        "school" => 'required'
	];
	
	protected $validationMessages = [
		"fname" => [
			"required" => 'Please enter your first name'
		],
		"lname" => [
			"required" => 'Please enter your last name'
		]
	];
	/*
	public function addUser($email, $password, $userID) {
		$query = "INSERT INTO Users (`email`,`password`,`userID`) VALUES ('$email',PASSWORD('$password'),'$userID')";
  		$query=$this->db->query($query);
	}
	*/
	public function addUser($fname, $lname, $password,$email,$school) {
		$query = "INSERT INTO User (`fname`,`lname`,`password`,`email`,`school`) VALUES ('$fname','$lname',PASSWORD('$password'),'$email','$school')";
  		$query=$this->db->query($query);
	}

	
	public function getAll() {
		
		$query = "SELECT * FROM " . $this->table ;
  		$query=$this->db->query($query);
  		
  		$users = $query->getResultArray();
  		return $users;
		  
	
	}
	public function validateLogin ($email, $password) {
		$query = "SELECT userID FROM " . $this->table . " WHERE email = '" . $email . "' AND password=PASSWORD('$password')";
  		$query=$this->db->query($query);
  		$user = $query->getResultArray();
  		return $user;
	
	}
	

}