<?php

namespace App\Controllers;
use App\Models\Model_auth;

class Auth extends BaseController
{
    private $Model_auth;
    public function __construct() 
    {
        helper('form');
        $this->Model_auth = new Model_auth();
    }
    public function index()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('v_login', $data);
    }
    public function login()
    {
        if ($this->validate([
            'email' => [
                'label'  => 'E-Mail',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi !! ',
                ],
            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi !!',
                ],
            ],
        ])) {
            //jika valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->Model_auth->login($email, $password);
            if($cek){
                // jika data cocok
                session()->set('log', true);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('email', $cek['email']);
                return redirect()->to(base_url('bridge')); //bridge home

            }else{
                session()->setFlashdata('pesan','email atau password salah');
                return redirect()->to(base_url('auth/index'));
            }

        }else {
            //jika tidak valid
            session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/index'));
        }
    }
    public function logout()
    {
        session()->remove('log');
        session()->remove('nama_user');
        session()->remove('email');
        
        session()->setFlashdata('pesan','Logout berhasil !!');
        return redirect()->to(base_url('auth/index'));
    }

}
