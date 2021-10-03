<?php

namespace App\Http\Controllers;

use App\Models\ProjecktCalendar;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {

        $calendar = ProjecktCalendar::where('date_start', '>=', date("Y-m-d 00:00:00"))->limit(10)->get();


        return view('main', array('title' => 'SakhaLink - молодёжная платформа Сахалинской области', 'calendar'=>$calendar));
    }
}
