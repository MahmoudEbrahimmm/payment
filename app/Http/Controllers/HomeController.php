<?php

namespace App\Http\Controllers;

use App\Models\Course;


class HomeController extends Controller
{
        public function index(){
        $course = Course::all();
        return view('home', compact('course'));
    }
}
