<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function showhome() {
        return view('home');
    }
    function showfriend() {
        return view('friend');
    }
    function showme() {
        return view('me');
    }
    function showschedule() {
        return view('schedule');
    }
}
