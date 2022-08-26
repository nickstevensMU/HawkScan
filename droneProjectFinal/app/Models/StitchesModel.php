<?php

namespace App\Models;

use CodeIgniter\Model;

class StitchesModel extends Model {

	protected $DBGroup = 'default';
    protected $table = "stitch";
	protected $allowedFields = ['stitchID','stitchImg','compTime','photoNumber','project_projectID'];
	protected $returnType = 'array';
	
	protected $validationRules = [
		"stitchImg" => 'required',
		"compTime" => 'required',
		"photoNumber" => 'required',
        "project_projectID" => 'required'
	];
	
	protected $validationMessages = [
		
	];
	
	public function search($for) {
		
		$query = "SELECT * FROM " . $this->table . " WHERE project_projectID LIKE '" . $for . "%'";
  		$query=$this->db->query($query);
  		
  		$stitches = $query->getResultArray();
  		return $stitches;
	
	}
	
	public function getAll() {
		
		$query = "SELECT * FROM " . $this->table ;
  		$query=$this->db->query($query);
  		
  		$stitches = $query->getResultArray();
  		return $stitches;
		  
	
	}
	
	

}