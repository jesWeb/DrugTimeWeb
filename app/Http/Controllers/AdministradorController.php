<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index()
    {
        //cosulta DB eloquent laravel
        // $users = person::all();
         //vista
         return view('admin.index');
        
     }   
}
