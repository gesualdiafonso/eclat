<?php

namespace App\Http\Controllers;

use App\Models\Servicio;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}