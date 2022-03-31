@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-6 offset-3">
        @if($editcourse!=null)
            <form action="{{route('editcourse',$editcourse['id'])}}" method="post">
            @else
            <form action="{{route('course')}}" method="post">
            @endif
                @csrf
            <div class="form-group">
              <h1>Add course</h1>
              @if($editcourse!=null)
              <input type="hidden" value="{{$editcourse['id']}}" name="id">
              <input type="text" value="{{$editcourse['name']}}" name="course" class="mt-2 form-control" placeholder="Enter sesson ex. 2000-2001">
              @else
              <input type="text" name="course" class="mt-2 form-control" placeholder="Add course ex. Database">
              @endif
            </div>
            <button type="submit" class="mt-3 btn btn-outline-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 offset-3">
            <h1>All courses</h1>
            <ol>
            @foreach($courses as $course)

                    <li class="d-flex justify-content-between my-2">
                        {{ $course['name']}}
                            <a href="{{route('editcourse',$course['id'])}}" class="btn btn-outline-success">Edit</a>
                            <form method="post" action="{{route('destroycourse',$course['id'])}}" 
                            onsubmit="return confirm('Sure?')">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-outline-danger"/>
                            </form>
                    </span>
                    </li>
            @endforeach
            </ol>
        </div>
    </div>

</div>
@endsection


