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
    function addProjecktPost(Request $request){
        $val = $request->validate(
            ['title'=>'required',
                'date_start'=>'required|date']
        );
        $data = $request->all();
        $img = $request->file('img');
        if (!empty($img)) {
            $imgSrc =$img->move("/upload/queize/", $img->getClientOriginalName());
            $data['image']=$imgSrc;
        }
        else {
            logger('Файл не загрузился!');
        }


        $prj = ProjecktCalendar::create($data);
        dd($prj);


    }
    function editProjeckt($id)
    {

    }
    function editProjecktData($id)
    {

    }
}
