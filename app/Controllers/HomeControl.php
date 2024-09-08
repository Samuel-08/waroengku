<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class HomeControl extends BaseController
{
    public function index(): string
    {
        // Ambil nilai 'value' dari query string
        $value = $this->request->getGet('value');

        // Kirimkan nilai ke view
        $data['value'] = $value;

        // return view('template/Template', $data);
        return view('home', $data);
    }
    public function produk(): string
    {
        $ProdukModel = new ProdukModel();
        $dataProduk = $ProdukModel->findAll();
        return view('produk', ['produk' => $dataProduk]);
    }
    public function tambah(): string
    {
        $ProdukModel = new ProdukModel();
        $dataProduk = $ProdukModel->findAll();
        return view('tambah', $dataProduk);
    }
}
