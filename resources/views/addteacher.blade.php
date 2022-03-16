@extends('layouts.app')
@section('content')
<div class="container ">
   <h1 class="my-5"><u><b>Add New Teacher </b></u></h1>  
   <form method="POST" action="{{route('addteacher')}} "> 
       @csrf
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Enter Teacher's name </label>
           <input type="text" class="form-control" name="name" placeholder="Enter Teacher name">
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Enter Teacher's subject </label>
           <input type="text" class="form-control" name="subject" placeholder="Enter Teacher subject">
        </div>
        <div class="col-md-12 text-center my-5">
        <button type="submit" class="btn btn-primary text-center">Submit</button>
        </div>
    </form>
</div>
@endsection


