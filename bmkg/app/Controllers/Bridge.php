<?php

namespace App\Controllers;

class Bridge extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Bridge',
        );
        // return view('layout/v_wrapper', $data);
        return view('v_bridge', $data);
    }
}
