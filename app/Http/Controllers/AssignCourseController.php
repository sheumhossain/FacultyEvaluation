<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignCourse;
use App\Models\Teacher;
use App\Models\Session;
use App\Models\Course;
class AssignCourseController extends Controller
{
    public function assigncourse(){
        $all = AssignCourse::all();
        $allassigncourses = array();
        foreach($all as $allac){
            $teacher = Teacher::find($allac['teacher_id'],['name'])['name'];
            $session = Session::find($allac['session_id'],['session'])['session'];
            $course = Course::find($allac['course_id'],'name')['name'];
            $a = array('id'=>$allac->id,'teacher'=>$teacher, 'session'=>$session,'course'=>$course); 
            array_push($allassigncourses,$a);  
        }
        return view('assigncourse',['assigncourses'=>$allassigncourses]);
    }
    public function addassigncourse(Request $request){
        $newassigncourse = new assignCourse();
        $newassigncourse->teacher_id = $request->teacher;
        $newassigncourse->session_id = $request->session;
        $newassigncourse->course_id = $request->course;
        $newassigncourse->save();
        return redirect()->route('assigncourse');
    }
    public function destroyassigncourse($id){
        $assigncourse = assignCourse::find($id);
        $assigncourse->delete();
        return redirect()->route('assigncourse');
    }
    public function editassigncourse($id){
        $assigncourse = assignCourse::find($id);
        return view('editassigncourse',['editassigncourse'=>$assigncourse]);
    }
    public function eassigncourse(Request $request,$id){
        $newassigncourse = assignCourse::find($id);
        $newassigncourse->teacher_id = $request->teacher;
        $newassigncourse->session_id = $request->session;
        $newassigncourse->course_id = $request->course;
        $newassigncourse->save();
        return redirect()->route('assigncourse');
    }

}
