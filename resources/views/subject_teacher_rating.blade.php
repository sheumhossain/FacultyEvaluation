@extends('layouts.app')
@section('content')
<div class="container-fluid">
<h1 class="text-center my-3">Total ratings : {{$total_rating}}</h1>
<table class="table table-striped table-dark">
    <thead>
       <tr>
          <th>Student</th>
          <th>Teacher</th>
          <th>Course</th>
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
          <td>{{App\Models\Teacher::find($rating['teacher_id'])['name']}}</td>
          <td>{{App\Models\Course::find($rating['course_id'])['name']}}</td>
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