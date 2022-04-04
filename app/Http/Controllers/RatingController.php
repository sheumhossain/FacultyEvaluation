<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Rating;

class RatingController extends Controller
{
    public function ratingpage($course_id,$teacher_id){
        $teacher = Teacher::find($teacher_id);
        $course = Course::find($course_id);
        return view('ratingpage',['teacher'=>$teacher,'course'=>$course]);
    }
    public function addrating(Request $request){
        $new_rating = new Rating();
        $new_rating->student_id = Auth::user()->id;
        $new_rating->session_id = Auth::user()->session;
        $new_rating->teacher_id = $request->teacher_id;
        $new_rating->course_id = $request->course_id;
        $new_rating->prepared=$request->prepared;
        $new_rating->knows=$request->knows;
        $new_rating->organised=$request->organised;
        $new_rating->plan_assignment=$request->plan_assignment;
        $new_rating->flexible=$request->flexible;
        $new_rating->time=$request->time;
        $new_rating->homework=$request->homework;
        $new_rating->grade=$request->grade;
        $new_rating->clear=$request->clear;
        $new_rating->creative=$request->creative;
        $new_rating->feedback=$request->feedback;
        $new_rating->encourage=$request->encourage;
        $new_rating->learned=$request->learned;
        $new_rating->save();
        return redirect()->route('profile');
    }

    public function updateratingpage($id){
        $rating = Rating::find($id);
        return view('updateratingpage',['rating'=>$rating]);
    }

    public function updaterating(Request $request,$id){
        $new_rating = Rating::find($id);
        $new_rating->prepared=$request->prepared;
        $new_rating->knows=$request->knows;
        $new_rating->organised=$request->organised;
        $new_rating->plan_assignment=$request->plan_assignment;
        $new_rating->flexible=$request->flexible;
        $new_rating->time=$request->time;
        $new_rating->homework=$request->homework;
        $new_rating->grade=$request->grade;
        $new_rating->clear=$request->clear;
        $new_rating->creative=$request->creative;
        $new_rating->feedback=$request->feedback;
        $new_rating->encourage=$request->encourage;
        $new_rating->learned=$request->learned;
        $new_rating->save();
        return redirect()->route('profile');
    }

    public function destroyrating($id){
        $rating = Rating::find($id);
        $rating->delete();
        return redirect()->route('profile');
    }
}
