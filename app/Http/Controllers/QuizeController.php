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

        return view('quize', ['data'=>$quize, 'title'=>$quize->title] );

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

    function test(){
        /*$question = DB::table('quize_test_questions')
            ->select(array('question', 'answer', 'answerTrue'))
            ->where('id_quize', '=', 1)
            ->skip(2)
            ->take(1)->dd();//
            //->get();


        $question = DB::table('quize_test_questions')
            ->select(array('question', 'answer', 'answerTrue'))
            ->where('id', '=', 2)
            ->get();
        */
      //  $a =(unserialize($question[0]->answer));
        //print_R($a);
        echo serialize(array('<img class="img-responsive" src="/upload/queize/v_3.1.jpg">', '<img class="img-responsive" src="/upload/queize/v_3.2.jpg">', '<img class="img-responsive" src="/upload/queize/v_3.3.jpg">'));
        //$question[0]->answer = unserialize($question[0]->answer);
    }

}
