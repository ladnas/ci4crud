<?php 

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
    {
       $this->session = session();
    } 

    public function index()
    {
        if(!$this->session->has('isLogin')){
            return redirect()->to('/auth/login');
        }

        return view('user/index');
    }
}
    