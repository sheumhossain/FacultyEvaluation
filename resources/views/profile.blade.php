@extends('layouts.app')
@section('content')
<div class="container text-center">
   <h1>Your Name : {{ Auth::User()->name}}</h1>  
   <h1>Your Email : {{ Auth::User()->email}}</h1>  
   <h1>You logged in as : {{ Auth::User()->role==0?"student":"admin"}}</h1>  
   <h1>Your department id : {{ Auth::User()->deptid}}</h1>  
   <h1>Your session is : {{ Auth::User()->session}}</h1>  
</div>
@endsection


