<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        return view('home/contact_view.php');
       //$this->load->helper();
       //comment out for activation of helper outside basecontroller
    }
}


