<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function course(){
        $allcourses = Course::all();
        $course = null;
        return view('course',['courses'=>$allcourses,'editcourse'=>$course]);
    }
    public function addcourse(Request $request){
        $newcourse = new Course();
        $newcourse->name = $request->course;
        $newcourse->save();
        return redirect()->route('course');
    }
    public function destroycourse($id){
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('course');
    }
    public function editcourse($id){
        $course = Course::find($id);
        $allcourses = Course::all();
        return view('course',['courses'=>$allcourses,'editcourse'=>$course]);
    }
    public function ecourse(Request $request,$id){
        $newcourse = Course::find($id);
        $newcourse->name = $request->course;
        $newcourse->save();
        return redirect()->route('course');
    }

}
