@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('editassigncourse',$editassigncourse['id'])}}" method="post">
                @csrf
           <div class="d-flex justify-content-between">
            <div class="form-group col-md-3">
                <label>Teacher</label>
                <select name="teacher" class="form-control">
                  <option value="{{$editassigncourse['teacher_id']}}" selected>{{App\Models\Teacher::find($editassigncourse['teacher_id'],['name'])['name']}}</option>
                  {{$teachers = App\Models\Teacher::all()}}
                  @foreach($teachers as $teacher)
                  <option value="{{$teacher['id']}}">{{$teacher['name']}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-3">
                <label>Session</label>
                <select name="session" class="form-control">
                  <option value="$editassigncourse['session_id']}}" selected>{{App\Models\Session::find($editassigncourse['session_id'],['session'])['session']}}</option>
                  {{$sessions = App\Models\Session::all()}}
                  @foreach($sessions as $session)
                  <option value="{{$session['id']}}">{{$session['session']}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-3">
                <label>Course</label>
                <select name="course" class="form-control">
                  <option value="{{$editassigncourse['course_id']}}" selected>{{App\Models\Course::find($editassigncourse['course_id'],['name'])['name']}}</option>
                  {{$courses = App\Models\Course::all()}}
                  @foreach($courses as $course)
                  <option value="{{$course['id']}}">{{$course['name']}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-outline-primary my-3">Submit</button>
        </form>
        </div>
    </div>
    

</div>
@endsection