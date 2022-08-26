<?php

namespace App\Models;

use CodeIgniter\Model;

class ObjectsModel extends Model {

	protected $DBGroup = 'default';
    protected $table = "object";
	protected $allowedFields = ['objectID','xCord','yCord','objNum','scan_scanID'];
	protected $returnType = 'array';
	
	protected $validationRules = [
		"objectID" => 'required',
		"xCord" => 'required',
		"yCord" => 'required',
        "objNum" => 'required',
        "scan_scanID" => 'required'
	];
	
	protected $validationMessages = [
		
	];
	
    public function search($for) {
		
		$query = "SELECT * FROM " . $this->table . " WHERE scan_scanID LIKE '" . $for . "%'";
  		$query=$this->db->query($query);
  		
  		$objects = $query->getResultArray();
  		return $objects;
	
	}
	
	public function getAll() {
		
		$query = "SELECT * FROM " . $this->table ;
  		$query=$this->db->query($query);
  		
  		$scans = $query->getResultArray();
  		return $scans;
		  
	
	}
	
	

}