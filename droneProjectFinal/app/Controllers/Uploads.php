<?php

namespace App\Controllers;

class Uploads extends BaseController
{
    public function index()
    {
        return view('home/upload_view.php');
       //$this->load->helper();
       //comment out for activation of helper outside basecontroller
    }

    public function full()
    {
        return view('home/uploadFull_view.php');
       //$this->load->helper();
       //comment out for activation of helper outside basecontroller
    }

    public function scanOnly()
    {
        return view('home/uploadScan_view.php');
       //$this->load->helper();
       //comment out for activation of helper outside basecontroller
    }

}


