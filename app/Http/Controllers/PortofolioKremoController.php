<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioKremoController extends Controller
{
    public function index(){
        return view('portofoliokremo.index', [
            'title' => 'Portofolio'
        ]);
    }
}
