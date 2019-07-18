<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Courses;

class CoursesController extends Controller
{
    //
    public function InsertAllDataCource(){
        $course = new Courses;

        $course->course_name = Input::get('course_name');
        $course->save();

        return view('displayCourses');
    }

    public function create(){
        return view('layouts.courses.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'course_name' => 'required'
        ]);

        $course = new Courses;


        $course->course_name = $request->course_name;
        $course->save();

        return redirect()->back();
    }

    public function index(){
        return view('layouts.courses.index')->with('courses', Courses::All());
    }

    public function edit($id){
        $course = Courses::find($id);
        return view('layouts.courses.edit')->with('course', $course);
    }

    public function delete(){

    }

    public function update(Request $request, $id){
        $course = Courses::find($id);
        $course->name = $request->course_name;
        $course->save();

        return redirect()->route('courses');
    }
    
}
