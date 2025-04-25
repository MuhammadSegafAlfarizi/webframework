<?php

namespace App\Controllers;

<<<<<<< HEAD
use App\Models\ZonaPhoneModel;

class Home extends BaseController
{
    protected $zonaPhoneModel;
    public function __construct()
    {
        $this->zonaPhoneModel = new ZonaPhoneModel();
    }

=======
class Home extends BaseController
{
>>>>>>> 2005f8c70943d5a308889e3dfb6d5896811a5ab6
    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];
        return view('pages/index', $data);
    }
    
<<<<<<< HEAD
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
    
=======
>>>>>>> 2005f8c70943d5a308889e3dfb6d5896811a5ab6
    public function about()
    {
        $data = [
            'title' => 'Tentang'
        ];
        return view('pages/about', $data);
    }
<<<<<<< HEAD
    
=======

    public function detail()
    {
        $data = [
            'title' => 'Detail'
        ];
        return view('pages/detail', $data);
    }

>>>>>>> 2005f8c70943d5a308889e3dfb6d5896811a5ab6
    public function kontak()
    {
        $data = [
            'title' => 'Kontak'
        ];
        return view('pages/kontak', $data);
    }

<<<<<<< HEAD
=======
    public function katalog()
    {
        $data = [
            'title' => 'Katalog'
        ];
        return view('pages/katalog', $data);
    }

>>>>>>> 2005f8c70943d5a308889e3dfb6d5896811a5ab6
    public function faq()
    {
        $data = [
            'title' => 'FAQ'
        ];
        return view('pages/faq', $data);
    }

}
