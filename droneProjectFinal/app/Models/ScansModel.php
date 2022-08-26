<?php

namespace App\Models;

use CodeIgniter\Model;

class ScansModel extends Model {

	protected $DBGroup = 'default';
    protected $table = "scan";
	protected $allowedFields = ['scanID','compTime','totalTime','totalObjects','scanImg','stitch_stitchID','project_projectID'];
	protected $returnType = 'array';
	
	protected $validationRules = [
		"scanID" => 'required',
		"compTime" => 'required',
		"totalTime" => 'required',
        "totalObjects" => 'required',
        "scanImg" => 'required',
        "stitch_stitchID" => 'required',
        "project_projectID" => 'required'
	];
	
	protected $validationMessages = [
		
	];
	

	public function search($for) {
		
		$query = "SELECT * FROM " . $this->table . " WHERE project_projectID LIKE '" . $for . "%'";
  		$query=$this->db->query($query);
  		
  		$scans = $query->getResultArray();
  		return $scans;
	
	}

	public function getAll() {
		
		$query = "SELECT * FROM " . $this->table ;
  		$query=$this->db->query($query);
  		
  		$scans = $query->getResultArray();
  		return $scans;
		  
	
	}
	
	

}