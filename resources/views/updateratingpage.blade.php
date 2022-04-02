@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <div class="row mt-5">
            <div class="col-md-8 offset-2">
                    <h1>Update Rating For </h1>
                <h1>Teacher : {{App\Models\Teacher::find($rating['teacher_id'])['name']}}</h1>
                <h3>Course : {{App\Models\Course::find($rating['course_id'])['name']}}</h3>
                <form method="POST" action="{{route('updaterating',$rating['id'])}} "> 
                    @csrf
                    <table class="table table-striped table-dark">
                        <tbody>
                        <tr>
                        <div class="d-flex fs-4">
                        <td>
                            <label class="">Teacher is prepared for class</label>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="1" class="form-check-input" type="radio" {{$rating['prepared'] == '1' ? 'checked' : ''}} name="prepared">
                                <label class="form-check-label">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="2" class="form-check-input" type="radio" {{$rating['prepared'] == '2' ? 'checked' : ''}} name="prepared">
                                <label class="form-check-label">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="3" class="form-check-input" type="radio" {{$rating['prepared'] == '3' ? 'checked' : ''}} name="prepared">
                                <label class="form-check-label">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="4" class="form-check-input" type="radio" {{$rating['prepared'] == '4' ? 'checked' : ''}} name="prepared">
                                <label class="form-check-label">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="5" class="form-check-input" type="radio" {{$rating['prepared'] == '5' ? 'checked' : ''}} name="prepared">
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
                                <input value="1" class="form-check-input" type="radio" {{$rating['knows'] == '1' ? 'checked' : ''}} name="knows">
                                <label class="form-check-label">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="2" class="form-check-input" type="radio" {{$rating['knows'] == '2' ? 'checked' : ''}} name="knows">
                                <label class="form-check-label">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="3" class="form-check-input" type="radio" {{$rating['knows'] == '3' ? 'checked' : ''}} name="knows">
                                <label class="form-check-label">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="4" class="form-check-input" type="radio" {{$rating['knows'] == '4' ? 'checked' : ''}} name="knows">
                                <label class="form-check-label">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="5" class="form-check-input" type="radio" {{$rating['knows'] == '5' ? 'checked' : ''}} name="knows">
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
                                <input value="1" class="form-check-input" type="radio" {{$rating['organised'] == '1' ? 'checked' : ''}} name="organised">
                                <label class="form-check-label">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="2" class="form-check-input" type="radio" {{$rating['organised'] == '2' ? 'checked' : ''}} name="organised">
                                <label class="form-check-label">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="3" class="form-check-input" type="radio" {{$rating['organised'] == '3' ? 'checked' : ''}} name="organised">
                                <label class="form-check-label">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="4" class="form-check-input" type="radio" {{$rating['organised'] == '4' ? 'checked' : ''}} name="organised">
                                <label class="form-check-label">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="5" class="form-check-input" type="radio" {{$rating['organised'] == '5' ? 'checked' : ''}} name="organised">
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
                                <input value="1" class="form-check-input" type="radio" {{$rating['plan_assignment'] == '1' ? 'checked' : ''}} name="plan_assignment">
                                <label class="form-check-label">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="2" class="form-check-input" type="radio" {{$rating['plan_assignment'] == '2' ? 'checked' : ''}} name="plan_assignment">
                                <label class="form-check-label">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="3" class="form-check-input" type="radio" {{$rating['plan_assignment'] == '3' ? 'checked' : ''}} name="plan_assignment">
                                <label class="form-check-label">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="4" class="form-check-input" type="radio" {{$rating['plan_assignment'] == '4' ? 'checked' : ''}} name="plan_assignment">
                                <label class="form-check-label">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="5" class="form-check-input" type="radio" {{$rating['plan_assignment'] == '5' ? 'checked' : ''}} name="plan_assignment">
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
                                <input value="1" class="form-check-input" type="radio" {{$rating['flexible'] == '1' ? 'checked' : ''}} name="flexible">
                                <label class="form-check-label">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="2" class="form-check-input" type="radio" {{$rating['flexible'] == '2' ? 'checked' : ''}} name="flexible">
                                <label class="form-check-label">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="3" class="form-check-input" type="radio" {{$rating['flexible'] == '3' ? 'checked' : ''}} name="flexible">
                                <label class="form-check-label">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="4" class="form-check-input" type="radio" {{$rating['flexible'] == '4' ? 'checked' : ''}} name="flexible">
                                <label class="form-check-label">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="5" class="form-check-input" type="radio" {{$rating['flexible'] == '5' ? 'checked' : ''}} name="flexible">
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
                                <input value="1" class="form-check-input" type="radio" {{$rating['time'] == '1' ? 'checked' : ''}} name="time">
                                <label class="form-check-label">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="2" class="form-check-input" type="radio" {{$rating['time'] == '2' ? 'checked' : ''}} name="time">
                                <label class="form-check-label">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="3" class="form-check-input" type="radio" {{$rating['time'] == '3' ? 'checked' : ''}} name="time">
                                <label class="form-check-label">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="4" class="form-check-input" type="radio" {{$rating['time'] == '4' ? 'checked' : ''}} name="time">
                                <label class="form-check-label">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="5" class="form-check-input" type="radio" {{$rating['time'] == '5' ? 'checked' : ''}} name="time">
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
                                <input value="1" class="form-check-input" type="radio" {{$rating['homework'] == '1' ? 'checked' : ''}} name="homework">
                                <label class="form-check-label">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="2" class="form-check-input" type="radio" {{$rating['homework'] == '2' ? 'checked' : ''}} name="homework">
                                <label class="form-check-label">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="3" class="form-check-input" type="radio" {{$rating['homework'] == '3' ? 'checked' : ''}} name="homework">
                                <label class="form-check-label">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="4" class="form-check-input" type="radio" {{$rating['homework'] == '4' ? 'checked' : ''}} name="homework">
                                <label class="form-check-label">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="5" class="form-check-input" type="radio" {{$rating['homework'] == '5' ? 'checked' : ''}} name="homework">
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
                                <input value="1" class="form-check-input" type="radio" {{$rating['grade'] == '1' ? 'checked' : ''}} name="grade">
                                <label class="form-check-label">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="2" class="form-check-input" type="radio" {{$rating['grade'] == '2' ? 'checked' : ''}} name="grade">
                                <label class="form-check-label">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="3" class="form-check-input" type="radio" {{$rating['grade'] == '3' ? 'checked' : ''}} name="grade">
                                <label class="form-check-label">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="4" class="form-check-input" type="radio" {{$rating['grade'] == '4' ? 'checked' : ''}} name="grade">
                                <label class="form-check-label">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="5" class="form-check-input" type="radio" {{$rating['grade'] == '5' ? 'checked' : ''}} name="grade">
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
                                <input value="1" class="form-check-input" type="radio" {{$rating['clear'] == '1' ? 'checked' : ''}} name="clear">
                                <label class="form-check-label">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="2" class="form-check-input" type="radio" {{$rating['clear'] == '2' ? 'checked' : ''}} name="clear">
                                <label class="form-check-label">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="3" class="form-check-input" type="radio" {{$rating['clear'] == '3' ? 'checked' : ''}} name="clear">
                                <label class="form-check-label">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="4" class="form-check-input" type="radio" {{$rating['clear'] == '4' ? 'checked' : ''}} name="clear">
                                <label class="form-check-label">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="5" class="form-check-input" type="radio" {{$rating['clear'] == '5' ? 'checked' : ''}} name="clear">
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
                                <input value="1" class="form-check-input" type="radio" {{$rating['creative'] == '1' ? 'checked' : ''}} name="creative">
                                <label class="form-check-label">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="2" class="form-check-input" type="radio" {{$rating['creative'] == '2' ? 'checked' : ''}} name="creative">
                                <label class="form-check-label">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="3" class="form-check-input" type="radio" {{$rating['creative'] == '3' ? 'checked' : ''}} name="creative">
                                <label class="form-check-label">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="4" class="form-check-input" type="radio" {{$rating['creative'] == '4' ? 'checked' : ''}} name="creative">
                                <label class="form-check-label">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="5" class="form-check-input" type="radio" {{$rating['creative'] == '5' ? 'checked' : ''}} name="creative">
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
                                <input value="1" class="form-check-input" type="radio" {{$rating['feedback'] == '1' ? 'checked' : ''}} name="feedback">
                                <label class="form-check-label">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="2" class="form-check-input" type="radio" {{$rating['feedback'] == '2' ? 'checked' : ''}} name="feedback">
                                <label class="form-check-label">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="3" class="form-check-input" type="radio" {{$rating['feedback'] == '3' ? 'checked' : ''}} name="feedback">
                                <label class="form-check-label">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="4" class="form-check-input" type="radio" {{$rating['feedback'] == '4' ? 'checked' : ''}} name="feedback">
                                <label class="form-check-label">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="5" class="form-check-input" type="radio" {{$rating['feedback'] == '5' ? 'checked' : ''}} name="feedback">
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
                                <input value="1" class="form-check-input" type="radio" {{$rating['encourage'] == '1' ? 'checked' : ''}} name="encourage">
                                <label class="form-check-label">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="2" class="form-check-input" type="radio" {{$rating['encourage'] == '2' ? 'checked' : ''}} name="encourage">
                                <label class="form-check-label">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="3" class="form-check-input" type="radio" {{$rating['encourage'] == '3' ? 'checked' : ''}} name="encourage">
                                <label class="form-check-label">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="4" class="form-check-input" type="radio" {{$rating['encourage'] == '4' ? 'checked' : ''}} name="encourage">
                                <label class="form-check-label">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="5" class="form-check-input" type="radio" {{$rating['encourage'] == '5' ? 'checked' : ''}} name="encourage">
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
                                <input value="1" class="form-check-input" type="radio" {{$rating['learned'] == '1' ? 'checked' : ''}} name="learned">
                                <label class="form-check-label">1</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="2" class="form-check-input" type="radio" {{$rating['learned'] == '2' ? 'checked' : ''}} name="learned">
                                <label class="form-check-label">2</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="3" class="form-check-input" type="radio" {{$rating['learned'] == '3' ? 'checked' : ''}} name="learned">
                                <label class="form-check-label">3</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="4" class="form-check-input" type="radio" {{$rating['learned'] == '4' ? 'checked' : ''}} name="learned">
                                <label class="form-check-label">4</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check mx-3">
                                <input value="5" class="form-check-input" type="radio" {{$rating['learned'] == '5' ? 'checked' : ''}} name="learned">
                                <label class="form-check-label">5</label>
                            </div>
                        </td>
                    </div>
                    </tr>                
                        </tbody>
                    </table>
                     <div class="col-md-12 text-center my-4">
                     <button type="submit" class="btn btn-outline-primary text-center">Update Rating</button>
                     </div>
                 </form>
            </div>
        </div>
    </div>
@endsection