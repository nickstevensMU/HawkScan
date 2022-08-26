<?php

namespace App\Controllers;

class Account extends BaseController
{
    public function index()
    {
        $user = session()->get('user'); 

        $data = [
            'user' =>  $user,
       ];
        return view('home/account_view.php', $data);
       //$this->load->helper();
       //comment out for activation of helper outside basecontroller
    }
}


