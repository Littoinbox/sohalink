<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    public function index(){
        return "<h2>Hello Admin</h2>";
    }
}
