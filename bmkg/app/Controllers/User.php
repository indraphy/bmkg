<?php

namespace App\Controllers;
use App\Models\Model_user;

class User extends BaseController
{
    private $Model_user;
    public function __construct()
    {
        $this->Model_user=new Model_user;
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'User',
            'user' => $this->Model_user->all_data(),
            'isi' => 'user/v_index'
        );
        return view('layout/v_wrapper', $data);
       
    }
    public function add(){
        $data = array(
            'title' => 'Tambah User',
            'isi' => 'user/v_add'
        );
        return view('layout/v_wrapper', $data);

    }
}
