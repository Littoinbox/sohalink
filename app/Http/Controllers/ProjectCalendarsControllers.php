<?php

namespace App\Http\Controllers;

use App\Models\ProjecktCalendar;
use Illuminate\Http\Request;

class ProjectCalendarsControllers extends Controller
{
    //
    public function event($id)
    {
        $element = ProjecktCalendar::find($id);
        return view('event', array('title' => 'SakhaLink - '.$element->title, 'element'=>$element));
    }

    public function index(){
        $element = ProjecktCalendar::where('date_start', '>=', date('Y-m-1 00:00:00'))
            ->where('date_start', '<=', date('Y-m-30 00:00:00'))->get();
        return view('allEvents', ['title' =>'SakhaLink - календарь событий', 'elements'=>$element]);
    }


}
