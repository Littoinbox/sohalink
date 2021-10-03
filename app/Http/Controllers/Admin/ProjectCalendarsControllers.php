<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjecktCalendar;
use Illuminate\Support\Facades\Validator;
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


        $val =Validator::make($request->all(), ['title'=>'required',
            'date_start'=>'required|date'], []


        );
        if ($val->fails())
        {
            return redirect('/admin/addProjeckt')
                ->withErrors($val)
                ->withInput();
        }

        $data = $request->all();
        $img = $request->file('img');
        if (!empty($img)) {
            $imgSrc = $img->store("/projeckt", 'public');
            $data['image']=$imgSrc;
        }
        else {
            logger('Файл не загрузился!');
        }
        $prj = ProjecktCalendar::create($data);
        return redirect()->route('AdminCalendar');


    }
    function editProjeckt($id)
    {
        $model = new ProjecktCalendar();
        $element = $model->find($id);
        return view('Admin/AddProjeckt', ['element' => $element]);
    }

    function editProjecktPost($id, Request $request)
    {
        $val =Validator::make($request->all(), ['title'=>'required',
            'date_start'=>'required|date'], []


        );
        if ($val->fails())
        {
            return redirect('/admin/editProjeckt/'.$id)
                ->withErrors($val)
                ->withInput();
        }

        $data = $request->except(['_method','_token']);
        $img = $request->file('img');
        $element = ProjecktCalendar::find($id);
        if (!empty($img)) {
            $imgSrc = $img->store("/projeckt", 'public');
            $data['image']=$imgSrc;
        }
        else {
            $data['image']=$element->image;
        }
        ProjecktCalendar::whereId($id)->update($data);
        return redirect()->route('AdminCalendar');
    }
    function delProjeckt($id)
    {
        ProjecktCalendar::whereId($id)->delete();
        return redirect()->route('AdminCalendar');
    }
}
