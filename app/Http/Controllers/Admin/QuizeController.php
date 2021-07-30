<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuizeTest;
use App\Models\QuizeTestQuestion;
use Illuminate\Http\Request;

class QuizeController extends Controller
{
    //
    function index()
    {
        $queize = new QuizeTest();
        $data = $queize->all();
        return view('Admin/Quize', ['data' => $data]);
    }

    function addQuize()
    {
        return view('Admin/AddQuize');
    }

    function addQuizePost(Request $request)
    {
        $valid = $request->validate([
            'title'=>'required']);
        $img = $request->file('fileImg');

        if (!empty($img)) {
            $imgSrc =$img->move("/upload/queize/", $img->getClientOriginalName());
        }
        else {
            logger('Файл не загрузился!');
        }
        $data = $request->all();
        $data['image']=$imgSrc;
       // dd($data);
        $queize =QuizeTest::create($data);
        if ($queize)
        {
            return redirect(route('addQuizeQuestion', $queize->id));
        }
    }
    function addQuizeQuestion($id){
        return view('Admin/AddQuizeQuestion', ['id' => $id]);
    }
    function addQuizeQuestionPost($id, Request $request)
    {
        $data = $request->all();
        $data['answer']= serialize($data['answer']);
        $model = QuizeTestQuestion::create($data);
        return redirect(route('addQuizeQuestion', $model->id));
    }

}
