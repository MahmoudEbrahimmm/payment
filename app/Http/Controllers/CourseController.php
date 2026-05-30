<?php

namespace App\Http\Controllers;

use App\Models\Course;


class CourseController extends Controller
{
    public function show(Course $course){
        return view('course.show', get_defined_vars());
    }
}
