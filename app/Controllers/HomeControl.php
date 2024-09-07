<?php

namespace App\Controllers;

class HomeControl extends BaseController
{
    public function index(): string
    {
        // Ambil nilai 'value' dari query string
        $value = $this->request->getGet('value');

        // Kirimkan nilai ke view
        $data['value'] = $value;

        // return view('template/Template', $data);
        return view('HomeView', $data);
    }
}
