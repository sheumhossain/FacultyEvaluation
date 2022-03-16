<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function studentlist(){
        $allstudent = User::where('role',0)->get();
        return view('studentlist',['students'=>$allstudent]);
    }
    public function teacherform(){
        return view('addteacher');
    }
    public function addteacher(Request $request){
        $newteacher = new Teacher();
        $newteacher->name = $request->name;
        $newteacher->subject = $request->subject;
        $newteacher->save();
        return redirect()->route('home');
    }

    

    public function rating(Request $request,$id){
        $teacher = Teacher::find($id);
        return view('teacherrating',['teacher'=>$teacher]);
    }

    public function updaterating(Request $request,$id){
        $oldrating = Teacher::find($id)->rating;
        $cntrating = Teacher::find($id)->cntrating;
        $oldteacher = Teacher::find($id);
        $teacher = 0;
        $teacher+=$request['prepared'];
        $teacher+=$request['knows'];
        $teacher+=$request['organised'];
        $teacher+=$request['plan_assignment'];
        $teacher+=$request['flexible'];
        $teacher+=$request['time'];
        $teacher+=$request['homework'];
        $teacher+=$request['grade'];
        $teacher+=$request['clear'];
        $teacher+=$request['creative'];
        $teacher+=$request['feedback'];
        $teacher+=$request['encourage'];
        $teacher+=$request['learned'];
        $teacher /=13;
        $total_rating = $teacher+$oldrating;
        $new_rating = ($total_rating)/($cntrating+1);
        $oldteacher['rating'] = $new_rating;
        $oldteacher['cntrating'] = $cntrating+1;
        $oldteacher->save();
        return redirect()->route('home');
    }
}
