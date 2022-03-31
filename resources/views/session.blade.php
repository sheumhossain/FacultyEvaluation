@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-6 offset-3">
        @if($editsession!=null)
            <form action="{{route('editsession',$editsession['id'])}}" method="post">
            @else
            <form action="{{route('session')}}" method="post">
            @endif
                @csrf
            <div class="form-group">
              <h1>Add Session</h1>
              @if($editsession!=null)
              <input type="hidden" value="{{$editsession['id']}}" name="id">
              <input type="text" value="{{$editsession['session']}}" name="session" class="mt-2 form-control" placeholder="Enter sesson ex. 2000-2001">
              @else
              <input type="text" name="session" class="mt-2 form-control" placeholder="Enter sesson ex. 2000-2001">
              @endif
            </div>
            <button type="submit" class="mt-3 btn btn-outline-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 offset-3">
            <h1>All sessions</h1>
            <ol>
            @foreach($sessions as $session)

                    <li class="d-flex justify-content-between my-2">
                        {{ $session['session']}}
                            <a href="{{route('editsession',$session['id'])}}" class="btn btn-outline-success">Edit</a>
                            <form method="post" action="{{route('destroysession',$session['id'])}}" 
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


