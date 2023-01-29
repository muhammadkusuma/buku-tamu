<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/index');
    }

    public function tamu()
    {
        return view('pages/guestbook');
        // echo "Ini adalah halaman tamu";
    }
    public function dashboard()
    {
        return view('pages/dashboard');
        // echo "Ini adalah halaman dashboard";
    }
    public function login()
    {
        return view('pages/login');
    }
    public function pengunjung()
    {
        return view('pages/daftar_pengunjung');
    }
}
