<?php

namespace App\Controllers;

use App\Models\M_Profil;

class Home extends BaseController
{
    public function beranda()
    {
        $ProfilModel = new M_Profil();
        $profile = $ProfilModel->findAll();

        $data = [
            'title' => 'Beranda',
            'profile' => $profile,
        ];

        return view('beranda', $data);
    }
    public function about()
    {
        $ProfilModel = new M_Profil();
        $profile = $ProfilModel->findAll();

        $data = [
            'title' => 'about',
            'profile' => $profile,
        ];

        return view('about', $data);
    }
    public function contact()
    {
        $ProfilModel = new M_Profil();
        $profile = $ProfilModel->findAll();

        $data = [
            'title' => 'contact',
            'profile' => $profile,
        ];

        return view('contact', $data);
    }
}
