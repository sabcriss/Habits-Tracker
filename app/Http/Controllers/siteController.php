<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Sabri';
        $habits = ['Ir a Academia', 'Ler', 'Jogar'];

        return view('home', compact('name', 'habits')
        );
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}