@extends('layouts.app')
@section('content')
<div class="container-fluid">
   @php
   if(count($ratings)>0){
   $anystudent_session_id = App\Models\User::find($ratings[0]['student_id'])['session'];
   $session = App\Models\Session::find($anystudent_session_id)['session'];
   $course = App\Models\Course::find($ratings[0]['course_id'])['name'];
   $teacher =App\Models\Teacher::find($ratings[0]['teacher_id'])['name'];  
}  
@endphp
@if(count($ratings)>0)
<h1 class="text-center my-3">Session : {{$session}} | Course : {{$course}} | Teacher : {{$teacher}}</h1>
@endif
<h2 class="text-center my-3">Total ratings : {{$total_rating}}</h2>
<table class="table table-striped table-dark">
    <thead>
       <tr>
          <th>Student</th>
          <th>Student Rating</th>
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
       </tr>
    </thead>
    <tbody>
       @foreach ($ratings as $rating)
       <tr>
          <td>{{App\Models\User::find($rating['student_id'])['name']}}</td>
          <td>{{$rating['studet_rating']}}</td>
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
       </tr>
       @endforeach
    </tbody>
 </table> 
</div>
@endsection