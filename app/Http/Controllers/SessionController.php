<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;

class SessionController extends Controller
{
    public function session(){
        $allsessions = Session::all();
        $session = null;
        return view('session',['sessions'=>$allsessions,'editsession'=>$session]);
    }
    public function addsession(Request $request){
        $newsession = new Session();
        $newsession->session = $request->session;
        $newsession->save();
        return redirect()->route('session');
    }
    public function destroysession($id){
        $session = Session::find($id);
        $session->delete();
        return redirect()->route('session');
    }
    public function editsession($id){
        $session = Session::find($id);
        $allsessions = Session::all();
        return view('session',['sessions'=>$allsessions,'editsession'=>$session]);
    }
    public function esession(Request $request,$id){
        $newsession = Session::find($id);
        $newsession->session = $request->session;
        $newsession->save();
        return redirect()->route('session');
    }
}
