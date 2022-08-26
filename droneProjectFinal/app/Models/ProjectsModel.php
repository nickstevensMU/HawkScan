<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectsModel extends Model {

	protected $DBGroup = 'default';
    protected $table = "project";
	protected $allowedFields = ['projectID','projectName','projectDesc','dateCreated','projectFile','projectType','user_userID'];
	protected $returnType = 'array';
	protected $primaryKey = 'projectID';
	
	protected $validationRules = [
		"projectName" => 'required',
		"projectDesc" => 'required',
		"projectFile" => 'required',
		"projectType" => 'required',
		"user_userID" => 'required',
	];
	
	protected $validationMessages = [
		
	];
	
	public function search($for) {
		
		$query = "SELECT * FROM " . $this->table . " WHERE projectFile LIKE '" . $for . "%'";
  		$query=$this->db->query($query);
  		
  		$projects = $query->getResultArray();
  		return $projects;
	
	}

	
	public function getAll() {
		
		$query = "SELECT * FROM " . $this->table ;
  		$query=$this->db->query($query);
  		
  		$projects = $query->getResultArray();
  		return $projects;
		  
	
	}
	
	

}