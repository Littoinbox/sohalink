<?php

namespace App\Http\Controllers;

use App\Models\QuizeTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizeController extends Controller
{
    function mainQuize($id)
    {
        $quize = QuizeTest::find($id);
        return view('quize', ['data'=>$quize]);

    }
    function mainQuizeAjax($id, Request $req ){
        $question = DB::table('quize_test_questions')
            ->select(array('question', 'answer', 'answerTrue'))
            ->where('id_quize', '=', $id)
            ->skip($req->step)
            ->take(1)
            ->get();
        if (count($question)>0) {
            $question[0]->answer = unserialize($question[0]->answer);
            return $question;
        }
        else {
            return false;
        }
    }

}
