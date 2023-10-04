<?php 

namespace App\Controllers;
use App\Models\Aku_model;

class Auth extends BaseController
{
    public function __construct()
    {
       $this->Aku_model = new Aku_model();
       $this->validation = \Config\Services::validation();
       $this->session = \Config\Services::session();
    } 

    public function logged_in()
    {
     
        return view('auth/user');
    }


    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function valid_register()
    {
        $data = $this->request->getPost();

        $this->validation->run($data, 'register');

        $errors = $this->validation->getErrors();

        if($errors){
            session()->setFlashdata('error', $errors);
            return redirect()->to('/auth/register');
        }

        $salt = uniqid('', true);

        $password = md5($data['password']).$salt;

        $this->Aku_model->save([
            'username' => $data['username'],
            'password' => $password,
            'salt' => $salt,
            'role_id' => 2
        ]); 

        session()->setFlashdata('login', 'Anda berhasil mendaftar, silahkan login');
        return redirect()->to('/auth/login');
    }

    public function valid_login()
    {
        $data = $this->request->getPost();

        $user = $this->Aku_model->where('username', $data['username'])->first();

        if($user){
            if($user['password'] != md5($data['password']).$user['salt']){
                session()->setFlashdata('password', 'Password salah');
                return redirect()->to('/auth/login');
            }
            else{
                $sesslogin = [
                    'islogin' => true,
                    'username' => $user['username'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set($sesslogin);
                return redirect()->to('auth/logged_in');
            }
        }
        else{
            session()->setFlashdata('username', 'Username tidak ditemukan');
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
        {
            $this->session->destroy();
            return redirect()->to('/auth/login');   
        }
    

}
    