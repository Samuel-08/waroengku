<?php

namespace App\Controllers;

class HomeControl extends BaseController
{
    public function index(): string
    {
        return view('HomeView');
    }
}
