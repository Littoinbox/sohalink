<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuizeTest;
use Illuminate\Http\Request;

class QuizeController extends Controller
{
    //
    function index(){
        $queize = new QuizeTest();
        $data= $queize->all();
        return view('Admin/Quize', ['data'=>$data]);
    }
    function addQuize(){
        return view('Admin/AddQuize');
    }

    function addQuizePost($request){

    }
}
