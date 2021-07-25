<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjecktCalendar;
use Illuminate\Http\Request;

class ProjectCalendarsControllers extends Controller
{
    function index(){
        return view('Admin/ProjectCalendar', ['projecktData'=>ProjecktCalendar::all()]);
    }
    function addProjeckt(){
        return view('Admin/AddProjeckt');
    }
    function addProjecktData(Request $request){

    }
    function editProjeckt($id)
    {

    }
    function editProjecktData($id)
    {

    }
}
