<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('template/pro-bono-header');
        echo view('home');
        echo view('template/footer');
    }

    public function about()
    {
        echo view('template/header');
        echo view('template/pro-bono-header');
        echo view('about');
        echo view('template/footer');
    }

    public function contact()
    {
        echo view('template/header');
        echo view('template/pro-bono-header');
        echo view('contact');
        echo view('template/footer');
    }
}
