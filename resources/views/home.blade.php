@extends('layouts.app')
@section('content')
<div class="container-fluid" >
    <div class="row justify-content-center py-2">
        <div class="col-md-8">
            <div class="card">
                @if(Auth::user()->role==1)
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>Sessions</th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach($datas as $data)
                        <tr>
                            <td><a href="{{route('courseteacher',$data['id'])}}">{{$data['session']}}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>Teachers</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                        <tr>
                            <td><a href="{{route('ratingpage',[$data['course_id'],$data['teacher_id']])}}">{{App\Models\Course::find($data['course_id'])['name']}} => {{ App\Models\Teacher::find($data['teacher_id'])['name']}}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
