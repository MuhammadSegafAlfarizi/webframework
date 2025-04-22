<?php

namespace App\Controllers;

use App\Models\ZonaPhoneModel;

class Home extends BaseController
{
    protected $zonaPhoneModel;
    public function __construct()
    {
        $this->zonaPhoneModel = new ZonaPhoneModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];
        return view('pages/index', $data);
    }
    
    public function katalog()
    {
        $data = [
            'title' => 'Katalog',
            'zonaPhone' => $this->zonaPhoneModel->getZonaPhone()
        ];
        return view('pages/katalog', $data);
    }
    
    public function detail($id)
    {
        $data = [
            'title' => 'Detail',
            'zonaPhone' => $this->zonaPhoneModel->getZonaPhone($id)
        ];
        return view('pages/detail', $data);
    }
    
    public function about()
    {
        $data = [
            'title' => 'Tentang'
        ];
        return view('pages/about', $data);
    }
    
    public function kontak()
    {
        $data = [
            'title' => 'Kontak'
        ];
        return view('pages/kontak', $data);
    }

    public function faq()
    {
        $data = [
            'title' => 'FAQ'
        ];
        return view('pages/faq', $data);
    }

}
