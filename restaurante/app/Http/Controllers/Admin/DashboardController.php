<?php

namespace Restaurante\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Restaurante\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
}
