<?php

namespace App\Controllers;

use App\Libraries\Authentication;

class Projects extends BaseController
{

    public function index()
    {
        
        return view('home/projects_view.php');
    }

    public function loadUpload()
    {
        return view('home/upload_view.php');
       //$this->load->helper();
       //comment out for activation of helper outside basecontroller
    }

    public function listProjects()
    {
       
    	$model  = new \App\Models\ProjectsModel();
		
  	    $projects = $model->findAll();
    	$baseURL = base_url();
    	
    	 $data = [
    	 	'baseURL' =>  $baseURL,
    	   'projects' => $projects
    	];
    	
   		return view('home/projects_view', $data);
    }

    public function findProject ($projectID) {
        $model  = new \App\Models\ProjectsModel();
        $stitchModel = new \App\Models\StitchesModel();
        $scanModel = new \App\Models\ScansModel();
        $objectModel = new \App\Models\ObjectsModel();
        
        $project = $model->find($projectID);
        $stitch = $stitchModel->search($projectID);
        $scan = $scanModel->search($projectID);
        $scan_scanID = $scan[0]['scanID'];
        $objects = $objectModel->search($scan_scanID);

        $imgPath = 'http://localhost:8888/droneProject/public/uploads/projectImgUploads/' . $stitch[0]['stitchImg'];
        $scanPath = 'http://localhost:8888/droneProject/public/uploads/projectScans/' . $scan[0]['scanImg'];
        $data = [
            'project' => $project,
            'stitch' => $stitch,
            'scan' => $scan,
            'objects' => $objects,
            'imgPath' => $imgPath,
            'scanPath' => $scanPath
        ];
        
        return view ('/home/project_view', $data);
    }

    public function create() {
    	$model  = new \App\Models\ProjectsModel();
        //$session = session();
		$validationRule = [
            'userfile' => [
                'label' => 'Zip File',
                'rules' => 'uploaded[userfile]'
                    . '|mime_in[userfile,application/zip]'
                    . '|max_size[userfile,4000000]',
            ],
        ];
    	
		if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            dd ($data);
        }

    	$projectName = $this->request->getPost("projectName");
    	$projectDesc = $this->request->getPost("projectDesc");
        $projectType = 'full'; 
		$zip = $this->request->getFile('userfile');
        $user_userID = session()->get('userID'); 
        //$user_userID = 1;
		$newName = "";
		$filepath = "";

        if (! $zip->hasMoved()) {

            // $filepath = WRITEPATH . 'uploads/' . $img->store();
			$newName = $zip->getRandomName();
            $zip->move(ROOTPATH . 'public/uploads/projectUploads', $newName);

        } else {
            $data = ['errors' => 'The file has already been moved.'];
			dd($data);
        }
    	
		$result = $model->insert([
    		"projectName" => $projectName,
    		"projectDesc" => $projectDesc,
    		"projectFile" => $newName,
            "projectType" => $projectType,
            "user_userID" => $user_userID,

    	]);

    	if ($result == false) {
    		dd($model->errors());
    	}
    	else {
            // this->scan($newName);
    		return redirect()->to('/');
    	}
    }

   /* public function scan($newName){
       
        $var1= $newName;
        $model  = new \App\Models\ProjectsModel();
        $project = $model->search($newName);
        $var2 = $project[0]['projectID'];
        //call python code
        // exec ( "/path/to/python/script.py $var1 $var2 $var3" );
    }
    */
    public function createScan() {
    	$model  = new \App\Models\ProjectsModel();
        $modelStitch = new \App\Models\StitchesModel();
		$validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]'
                    . '|is_image[userfile]'
                    . '|mime_in[userfile,image/jpg,image/jpeg,image/png,image/tiff]'
                    . '|max_size[userfile,1500000]',
            ],
        ];
    	
		if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            dd ($data);
        }

    	$projectName = $this->request->getPost("projectName");
    	$projectDesc = $this->request->getPost("projectDesc");
        $projectType = 'scan';
    	//$user_userID = $this->session->userdata('userID'); 
		$img = $this->request->getFile('userfile');
        $user_userID = session()->get('userID'); 
        // $user_userID = 2;
		$newName = "";
		$filepath = "";

        if (! $img->hasMoved()) {

            // $filepath = WRITEPATH . 'uploads/' . $img->store();
			$newName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/uploads/projectImgUploads', $newName);

        } else {
            $data = ['errors' => 'The file has already been moved.'];
			dd($data);
        }
    	
		$result = $model->insert([
    		"projectName" => $projectName,
    		"projectDesc" => $projectDesc,
    		"projectFile" => $newName,
            "projectType" => $projectType,
            "user_userID" => $user_userID,

    	]);

    	if ($result == false) {
    		dd($model->errors());
    	}
    	else {
            $compTime=0;
            $photoNumber=1;
            $project = $model->search($newName);
            $project_projectID= $project[0]['projectID'];
            $result2 = $modelStitch->insert([
                "stitchImg" => $newName,
                "compTime" => $compTime,
                "photoNumber" => $photoNumber,
                "project_projectID" => $project_projectID,

            ]);
            if ($result2 == false) {
                dd($modelStitch->errors());
            }
            else{
                /*
                $var1= $newName;
                //$project = $model->search($newName);
                $var2 = 1;
                //call python code
                // exec ( "/path/to/python/script.py $var1 $var2 $var3" );
                */
                return redirect()->to('/');
            }
    	}
    }


}


