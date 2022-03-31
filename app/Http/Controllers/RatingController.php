<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class RatingController extends Controller
{
    public function ratingpage($id){
        $teacher = Teacher::find($id);
        return view('ratingpage',['teacher'=>$teacher]);
    }
}
