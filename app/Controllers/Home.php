<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];
        return view('pages/index', $data);
    }
    
    public function about()
    {
        $data = [
            'title' => 'Tentang'
        ];
        return view('pages/about', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Detail'
        ];
        return view('pages/detail', $data);
    }

    public function kontak()
    {
        $data = [
            'title' => 'Kontak'
        ];
        return view('pages/kontak', $data);
    }

    public function katalog()
    {
        $data = [
            'title' => 'Katalog'
        ];
        return view('pages/katalog', $data);
    }

    public function faq()
    {
        $data = [
            'title' => 'FAQ'
        ];
        return view('pages/faq', $data);
    }

}
