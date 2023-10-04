<?php

namespace App\Controllers;

class Cr_profile extends BaseController
{
    public function __construct()
    {
        $this->model = new \App\Models\Aku_model();
    }

    public function index()
    {
        return view('auth/profile');
    }

}
