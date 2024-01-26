<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProfile extends Controller
{
    public function index(){
        return view('pages.admin.profile');
    }
}
