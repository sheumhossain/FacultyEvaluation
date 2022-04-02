@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-6 offset-3">
            <h1>Give Rating For {{$teacher['name']}}</h1>
            @php 
            $session_id = Auth::user()->session;
            $course_id = App\Models\AssignCourse::where('session_id','=',$session_id)
                                                ->where('teacher_id','=',$teacher['id'])->value('course_id');
            @endphp
            <h3>Course is : {{App\Models\Course::find($course_id)['name']}}</h3>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-8 offset-2">
            <form method="POST" action="{{route('addrating',$teacher['id'])}} "> 
                @csrf
                <input type="hidden" name="teacher_id" value="{{$teacher['id']}}">
                <input type="hidden" name="course_id" value="{{$course_id}}">
                <table class="table table-striped table-dark">
                    <tbody>
                    <tr>
                    <div class="d-flex fs-4">
                    <td>
                        <label class="">Teacher is prepared for class</label>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="1" class="form-check-input" type="radio" name="prepared">
                            <label class="form-check-label">1</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="2" class="form-check-input" type="radio" name="prepared">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="3" class="form-check-input" type="radio" name="prepared">
                            <label class="form-check-label">3</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="4" class="form-check-input" type="radio" name="prepared">
                            <label class="form-check-label">4</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="5" class="form-check-input" type="radio" name="prepared">
                            <label class="form-check-label">5</label>
                        </div>
                    </td>
                </div>
                </tr>

                <tr>
                    <div class="d-flex fs-4">
                    <td>
                        <label class="">Teacher knows his/her subject</label>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="1" class="form-check-input" type="radio" name="knows">
                            <label class="form-check-label">1</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="2" class="form-check-input" type="radio" name="knows">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="3" class="form-check-input" type="radio" name="knows">
                            <label class="form-check-label">3</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="4" class="form-check-input" type="radio" name="knows">
                            <label class="form-check-label">4</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="5" class="form-check-input" type="radio" name="knows">
                            <label class="form-check-label">5</label>
                        </div>
                    </td>
                </div>
                </tr>

                <tr>
                    <div class="d-flex fs-4">
                    <td>
                        <label class="">Teacher is organizes and neat</label>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="1" class="form-check-input" type="radio" name="organised">
                            <label class="form-check-label">1</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="2" class="form-check-input" type="radio" name="organised">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="3" class="form-check-input" type="radio" name="organised">
                            <label class="form-check-label">3</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="4" class="form-check-input" type="radio" name="organised">
                            <label class="form-check-label">4</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="5" class="form-check-input" type="radio" name="organised">
                            <label class="form-check-label">5</label>
                        </div>
                    </td>
                </div>
                </tr>

                <tr>
                    <div class="d-flex fs-4">
                    <td>
                        <label class="">Teacher plans class and assignments that help students to problem 
                            solve and think critically </label>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="1" class="form-check-input" type="radio" name="plan_assignment">
                            <label class="form-check-label">1</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="2" class="form-check-input" type="radio" name="plan_assignment">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="3" class="form-check-input" type="radio" name="plan_assignment">
                            <label class="form-check-label">3</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="4" class="form-check-input" type="radio" name="plan_assignment">
                            <label class="form-check-label">4</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="5" class="form-check-input" type="radio" name="plan_assignment">
                            <label class="form-check-label">5</label>
                        </div>
                    </td>
                </div>
                </tr>

                <tr>
                    <div class="d-flex fs-4">
                    <td>
                        <label class="">Teacher is flexible in accommodating for individual students needs </label>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="1" class="form-check-input" type="radio" name="flexible">
                            <label class="form-check-label">1</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="2" class="form-check-input" type="radio" name="flexible">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="3" class="form-check-input" type="radio" name="flexible">
                            <label class="form-check-label">3</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="4" class="form-check-input" type="radio" name="flexible">
                            <label class="form-check-label">4</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="5" class="form-check-input" type="radio" name="flexible">
                            <label class="form-check-label">5</label>
                        </div>
                    </td>
                </div>
                </tr> <tr>
                    <div class="d-flex fs-4">
                    <td>
                        <label class="">Teacher manage the time well</label>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="1" class="form-check-input" type="radio" name="time">
                            <label class="form-check-label">1</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="2" class="form-check-input" type="radio" name="time">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="3" class="form-check-input" type="radio" name="time">
                            <label class="form-check-label">3</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="4" class="form-check-input" type="radio" name="time">
                            <label class="form-check-label">4</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="5" class="form-check-input" type="radio" name="time">
                            <label class="form-check-label">5</label>
                        </div>
                    </td>
                </div>
                </tr> <tr>
                    <div class="d-flex fs-4">
                    <td>
                        <label class="">Teacher returns homework in timely manner</label>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="1" class="form-check-input" type="radio" name="homework">
                            <label class="form-check-label">1</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="2" class="form-check-input" type="radio" name="homework">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="3" class="form-check-input" type="radio" name="homework">
                            <label class="form-check-label">3</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="4" class="form-check-input" type="radio" name="homework">
                            <label class="form-check-label">4</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="5" class="form-check-input" type="radio" name="homework">
                            <label class="form-check-label">5</label>
                        </div>
                    </td>
                </div>
                </tr> <tr>
                    <div class="d-flex fs-4">
                    <td>
                        <label class="">Teacher grades fairly</label>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="1" class="form-check-input" type="radio" name="grade">
                            <label class="form-check-label">1</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="2" class="form-check-input" type="radio" name="grade">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="3" class="form-check-input" type="radio" name="grade">
                            <label class="form-check-label">3</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="4" class="form-check-input" type="radio" name="grade">
                            <label class="form-check-label">4</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="5" class="form-check-input" type="radio" name="grade">
                            <label class="form-check-label">5</label>
                        </div>
                    </td>
                </div>
                </tr> <tr>
                    <div class="d-flex fs-4">
                    <td>
                        <label class="">Teacher is clear in giving directions and on explaining 
                            what is expected and on assignment tests</label>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="1" class="form-check-input" type="radio" name="clear">
                            <label class="form-check-label">1</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="2" class="form-check-input" type="radio" name="clear">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="3" class="form-check-input" type="radio" name="clear">
                            <label class="form-check-label">3</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="4" class="form-check-input" type="radio" name="clear">
                            <label class="form-check-label">4</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="5" class="form-check-input" type="radio" name="clear">
                            <label class="form-check-label">5</label>
                        </div>
                    </td>
                </div>
                </tr> <tr>
                    <div class="d-flex fs-4">
                    <td>
                        <label class="">Teacher is creative in developing activities and lesson </label>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="1" class="form-check-input" type="radio" name="creative">
                            <label class="form-check-label">1</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="2" class="form-check-input" type="radio" name="creative">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="3" class="form-check-input" type="radio" name="creative">
                            <label class="form-check-label">3</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="4" class="form-check-input" type="radio" name="creative">
                            <label class="form-check-label">4</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="5" class="form-check-input" type="radio" name="creative">
                            <label class="form-check-label">5</label>
                        </div>
                    </td>
                </div>
                </tr> <tr>
                    <div class="d-flex fs-4">
                    <td>
                        <label class="">Teacher gives me good feedback on 
                            homework and projects so that I can improve.</label>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="1" class="form-check-input" type="radio" name="feedback">
                            <label class="form-check-label">1</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="2" class="form-check-input" type="radio" name="feedback">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="3" class="form-check-input" type="radio" name="feedback">
                            <label class="form-check-label">3</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="4" class="form-check-input" type="radio" name="feedback">
                            <label class="form-check-label">4</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="5" class="form-check-input" type="radio" name="feedback">
                            <label class="form-check-label">5</label>
                        </div>
                    </td>
                </div>
                </tr> <tr>
                    <div class="d-flex fs-4">
                    <td>
                        <label class="">Teacher encourage students to speak
                            up and be active in the class.</label>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="1" class="form-check-input" type="radio" name="encourage">
                            <label class="form-check-label">1</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="2" class="form-check-input" type="radio" name="encourage">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="3" class="form-check-input" type="radio" name="encourage">
                            <label class="form-check-label">3</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="4" class="form-check-input" type="radio" name="encourage">
                            <label class="form-check-label">4</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="5" class="form-check-input" type="radio" name="encourage">
                            <label class="form-check-label">5</label>
                        </div>
                    </td>
                </div>
                </tr> <tr>
                    <div class="d-flex fs-4">
                    <td>
                        <label class="">I have learned a lot from this teacher
                            about this subject.</label>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="1" class="form-check-input" type="radio" name="learned">
                            <label class="form-check-label">1</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="2" class="form-check-input" type="radio" name="learned">
                            <label class="form-check-label">2</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="3" class="form-check-input" type="radio" name="learned">
                            <label class="form-check-label">3</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="4" class="form-check-input" type="radio" name="learned">
                            <label class="form-check-label">4</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check mx-3">
                            <input required value="5" class="form-check-input" type="radio" name="learned">
                            <label class="form-check-label">5</label>
                        </div>
                    </td>
                </div>
                </tr>                
                    </tbody>
                </table>
                 <div class="col-md-12 text-center my-4">
                 <button type="submit" class="btn btn-outline-success text-center">Give Rating</button>
                 </div>
             </form>
        </div>
    </div>
</div>
@endsection


