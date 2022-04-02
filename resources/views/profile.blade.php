@extends('layouts.app')
@section('content')
<div class="container text-center">
   <h1>Your Name : {{ Auth::User()->name}}</h1>  
   <h1>Your Email : {{ Auth::User()->email}}</h1>  
   <h1>You logged in as : {{ Auth::User()->role==0?"student":"admin"}}</h1>  
   <h1>Your department id : {{ Auth::User()->deptid}}</h1>  
   <h1>Your session is : {{App\Models\Session::find(Auth::User()->session)['session']}}</h1>  
   @if(Auth::user()->role==0)
   <hr>
   <h1>You have already given rating for </h1>
   <table class="table table-striped table-dark">
      <thead>
         <tr>
            <th>Teacher</th>
            <th>Course</th>
            <th>Prepared</th>
            <th>Knows</th>
            <th>Organised</th>
            <th>Plan_Assignment</th>
            <th>Flexible</th>
            <th>Time</th>
            <th>Homework</th>
            <th>Grade</th>
            <th>Clear</th>
            <th>Creative</th>
            <th>Feedback</th>
            <th>Encourage</th>
            <th>Learned</th>
            <th>Update</th>
            <th>Delete</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($ratings as $rating)
         <tr>
            <td>{{App\Models\Teacher::find($rating['teacher_id'])['name']}}</td>
            <td>{{App\Models\Course::find($rating['course_id'])['name']}}</td>
            <td>{{$rating['prepared']}}</td>
            <td>{{$rating['knows']}}</td>
            <td>{{$rating['organised']}}</td>
            <td>{{$rating['plan_assignment']}}</td>
            <td>{{$rating['flexible']}}</td>
            <td>{{$rating['time']}}</td>
            <td>{{$rating['homework']}}</td>
            <td>{{$rating['grade']}}</td>
            <td>{{$rating['clear']}}</td>
            <td>{{$rating['creative']}}</td>
            <td>{{$rating['feedback']}}</td>
            <td>{{$rating['encourage']}}</td>
            <td>{{$rating['learned']}}</td>
            <td><a href="{{route('updateratingpage',$rating['id'])}}" class="btn btn-outline-success">update</a></td>
            <td>
               <form action="{{ route('destroyrating', $rating['id'])}}" method="post" 
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
   @endif 
</div>
@endsection


