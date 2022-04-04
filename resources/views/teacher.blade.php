@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-6 offset-3">
        @if($editteacher!=null)
            <form action="{{route('editteacher',$editteacher['id'])}}" method="post">
            @else
            <form action="{{route('teacher')}}" method="post">
            @endif
                @csrf
            <div class="form-group">
              <h1>Add teacher</h1>
              @if($editteacher!=null)
              <input type="hidden" value="{{$editteacher['id']}}" name="id">
              <input type="text" value="{{$editteacher['name']}}" name="teacher" class="mt-2 form-control" placeholder="Enter sesson ex. 2000-2001">
              @else
              <input type="text" name="teacher" class="mt-2 form-control" placeholder="Add teacher ex. Asif Zaman">
              @endif
            </div>
            <button type="submit" class="mt-3 btn btn-outline-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 offset-3">
            <h1>All teachers</h1>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;    
                    @endphp
                    @foreach($teachers as $teacher)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{ $teacher['name']}}</td>
                        <td><a href="{{route('editteacher',$teacher['id'])}}" class="btn btn-outline-success">Edit</a></td>
                        <td>
                            <form action="{{ route('destroyteacher', $teacher['id'])}}" method="post" 
                            onsubmit="return confirm('Sure?')">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-outline-danger"/>
                            </form>
                        </td>
                    </tr>
                    @php
                    $i++;
                    @endphp
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

</div>
@endsection


