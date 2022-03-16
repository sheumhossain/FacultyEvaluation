@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($allteacher as $teacher)
    <div class="row justify-content-center py-2">
        <div class="col-md-8">
            <div class="card">
                @if(Auth::check()&& auth()->user()->role == 1)
                <div class="card-header">Name : {{ $teacher['name']}}</div>
                @else
                <div class="card-header"><a href="{{route('rating',$teacher->id)}}">Name : {{ $teacher['name']}}</a></div>
                @endif
                <div class="card-body">
                  <p>Subject : {{ $teacher['subject']}}</p>
                        @if(Auth::check()&& auth()->user()->role == 1)
                        <p>rating : {{ $teacher['rating']==0?"not rated": $teacher['rating']}}</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
