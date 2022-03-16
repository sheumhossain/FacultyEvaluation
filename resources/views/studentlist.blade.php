@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($students as $student)
    <div class="row justify-content-center py-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Name : {{ $student['name']}}</div>
                <div class="card-body">
                  <p>id : {{ $student['deptid']}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
