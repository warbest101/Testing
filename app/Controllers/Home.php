<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $s = 3;
        return view('welcome_message');
    }
}
