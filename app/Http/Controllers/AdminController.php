<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignCourse;
use App\Models\Rating;

class AdminController extends Controller
{
    public function courseteacher($id){
        $assignedcourse = AssignCourse::where('session_id','=',$id)->get();
        return view('courseteacher',['courseteacher'=>$assignedcourse]);
    }

    public function subjectTeacherRating($session_id,$course_id,$teacher_id){
        $ratings = Rating::where('session_id','=',$session_id)
                        ->where('course_id','=',$course_id)
                        ->where('teacher_id','=',$teacher_id)->get();
        $total_rating = 0; 
        if(count($ratings)>0){
        foreach($ratings as $rating){
            $studet_rating = 0;
            $studet_rating +=  $rating['prepared'];
            $studet_rating +=  $rating['knows'];
            $studet_rating +=  $rating['organised'];
            $studet_rating +=  $rating['plan_assignment'];
            $studet_rating +=  $rating['flexible'];
            $studet_rating +=  $rating['time'];
            $studet_rating +=  $rating['homework'];
            $studet_rating +=  $rating['grade'];
            $studet_rating +=  $rating['clear'];
            $studet_rating +=  $rating['creative'];
            $studet_rating +=  $rating['feedback'];
            $studet_rating +=  $rating['encourage'];
            $studet_rating +=  $rating['learned'];
            $total_rating += $studet_rating/13;
            $studet_rating = round($studet_rating/13, 2);
            $rating['studet_rating'] = $studet_rating;
        }
        $total_rating = round($total_rating/count($ratings), 2);
    }
        return view('subject_teacher_rating',['ratings'=>$ratings,'total_rating'=>$total_rating]);              
    }
}
