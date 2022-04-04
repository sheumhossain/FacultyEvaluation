@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <form action="assigncourse" method="post">
                @csrf
           <div class="d-flex justify-content-between">
            <div class="form-group col-md-3">
                <label>Teacher</label>
                <select name="teacher" class="form-control">
                  <option selected>Choose...</option>
                  {{$teachers = App\Models\Teacher::all()}}
                  @foreach($teachers as $teacher)
                  <option value="{{$teacher['id']}}">{{$teacher['name']}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-3">
                <label>Session</label>
                <select name="session" class="form-control">
                  <option selected>Choose...</option>
                  {{$sessions = App\Models\Session::all()}}
                  @foreach($sessions as $session)
                  <option value="{{$session['id']}}">{{$session['session']}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-3">
                <label>Course</label>
                <select name="course" class="form-control">
                  <option selected>Choose...</option>
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
    <div class="row mt-5">
        <div class="col-md-6 offset-3">
            <h1>Assigned Courses</h1>
            <table class="table  table-dark table-striped">
                <thead>
                  <tr>
                    <th scope="col">Teacher</th>
                    <th scope="col">Session</th>
                    <th scope="col">Course</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($assigncourses as $assigncourse)
                    <tr>
                        <td>{{$assigncourse['teacher']}}</td>
                        <td>{{$assigncourse['session']}}</td>
                        <td>{{$assigncourse['course']}}</td>
                        <td><a href="{{route('editassigncourse',$assigncourse['id'])}}" class="btn btn-outline-success">Edit</a></td>
                        <td>
                            <form method="post" action="{{route('destroyassigncourse',$assigncourse['id'])}}" 
                            onsubmit="return confirm('Sure?')">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-outline-danger"/>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

</div>
@endsection


