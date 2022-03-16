@extends('layouts.app')
@section('content')
<div class="container ">
   <h1 class="my-5"><u><b> Teacher Name : {{ $teacher['name']}}</b></u></h1>  
   <form method="POST" action="{{route('updaterate',$teacher['id'])}} "> 
       @csrf
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Teacher is prepared for class</label>
            <select name="prepared"  class="form-select form-select-lg mb-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Teacher knows his/her subject</label>
            <select name="knows" class="form-select form-select-lg mb-3"> 
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Teacher is organizes and neat</label>
            <select name="organised" class="form-select form-select-lg mb-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Teacher plans class and assignments that help students to problem 
                solve and think critically </label>
            <select name="plan_assignment" class="form-select form-select-lg mb-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Teacher is flexible in accommodating for individual students needs </label>
            <select name="flexible" class="form-select form-select-lg mb-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Teacher manage the time well</label>
            <select name="time" class="form-select form-select-lg mb-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Teacher returns homework in timely manner</label>
            <select name="homework" class="form-select form-select-lg mb-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Teacher grades fairly </label>
            <select name="grade" class="form-select form-select-lg mb-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Teacher in clear in giving directions and on explaining 
                what is expected and on assignment tests </label>
            <select name="clear" class="form-select form-select-lg mb-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Teacher is creative in developing activities and lesson  </label>
            <select name="creative" class="form-select form-select-lg mb-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Teacher gives me good feedback on 
                homework and projects so that I can improve. </label>
            <select name="feedback" class="form-select form-select-lg mb-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6">Teacher encourage students to speak
                 up and be active in the class. </label>
            <select name="encourage" class="form-select form-select-lg mb-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label class="fs-3 col-md-6"> I have learned a lot from this teacher
                 about this subject. </label>
            <select name="learned" class="form-select form-select-lg mb-3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        


        <div class="col-md-12 text-center my-5">
        <button type="submit" class="btn btn-primary text-center">Submit</button>
        </div>
    </form>
</div>
@endsection


