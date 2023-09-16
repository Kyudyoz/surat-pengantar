<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboardRt()
    {
        return view('rt.dashboard-rt',[
            'title' => 'Dashboard',
            'active' => 'Dashboard RT'
        ]);
    }
    public function dashboard()
    {
        return view('warga.dashboard',[
            'title' => 'Dashboard',
            'active' => 'Dashboard Warga'
        ]);
    }
    public function blog()
    {
        return view('blog.blog',[
            'title' => 'Bulian News',
            'active' => 'Blog'
        ]);
    }
    public function profil()
    {
        return view('profil',[
            'title' => 'Halaman Profil',
            'active' => 'Profil'
        ]);
    }
}
