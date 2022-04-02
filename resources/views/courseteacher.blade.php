@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center py-2">
        <div class="col-md-8">
            <div class="card">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Teacher</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courseteacher as $ct)
                        <tr>
                            <td><a href="{{ route('subject_teacher_rating', [$ct['session_id'],$ct['course_id'],$ct['teacher_id']])}}">{{App\Models\Course::find($ct['course_id'])['name']}}</a></td>
                            <td><a href="{{ route('subject_teacher_rating', [$ct['session_id'],$ct['course_id'],$ct['teacher_id']])}}">{{App\Models\Teacher::find($ct['teacher_id'])['name']}}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
