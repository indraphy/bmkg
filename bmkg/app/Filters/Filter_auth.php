<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Filter_auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (session()->get('log') !=true) {
            session()->setFlashdata('pesan','Masukkan e-mail & password !!');
            return redirect()->to(base_url('auth'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        if (session()->get('log') ==true) {
            return redirect()->to(base_url('bridge'));
        }
    }
}