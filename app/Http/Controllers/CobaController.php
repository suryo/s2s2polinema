<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        // return view('welcome');
        $tampil = 'belajar laravel itu mudah';
        $iniangka = 2 ;
        $rakbuku = ['buku 1', 'buku 2', 'buku 3', 'buku 4'];


        return view('welcome', compact('tampil', 'rakbuku', 'iniangka'));
    }

    public function coba()
    {
        return 'coba controller';
    }


}
