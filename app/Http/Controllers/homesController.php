<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homesController extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // vista
        return view('Home.index');
    }

}
