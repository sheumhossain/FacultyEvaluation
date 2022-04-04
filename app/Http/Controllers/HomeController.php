<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use App\Models\Rating;
use App\Models\AssignCourse;
use App\Models\Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::user()->role==1){
            $assignedcourse = AssignCourse::all();
            $allsessions = Session::all();
            $sessions = array();
            foreach($allsessions as $session){
                $flag = false;
                foreach($assignedcourse as $ac){
                    if($session['id']==$ac['session_id']){
                        $flag = true;
                        break;
                    }
                }
                if($flag==true){
                    array_push($sessions,$session);
                }
            }
            return view('home',['datas'=>$sessions]);
        }else{
            $assignedcourses = AssignCourse::where('session_id','=',Auth::user()->session)->get();
            $ratings = Rating::where('student_id','=',Auth::user()->id)->get();
            $teachers = array();
            foreach($assignedcourses as $assignedcourse){
                $flag = true;
                foreach($ratings as $rating){
                    if($assignedcourse['course_id']==$rating['course_id']){
                        $flag = false;
                        break;
                    }
                }
                if($flag==true){
                    array_push($teachers,$assignedcourse);
                }
            }
            return view('home',['datas'=>$teachers]);
        }
    }

    public function profile(){
        $ratings = Rating::where('student_id','=',Auth::user()->id)->get();
        return view('profile',['ratings'=>$ratings]);

    }
}
