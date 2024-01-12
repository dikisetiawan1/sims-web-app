<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProduk extends Controller
{
    public function index(){
        return view('pages.dashboard-produk');
    }
}
