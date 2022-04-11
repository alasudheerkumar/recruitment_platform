@extends('layouts.adminapp')

{{-- @section('content')
      
        <div class="container custom-color rounded">
           <h3>Web Developer</h3>
           <p>some introduction<p>
           <strong>Your contribution:</strong>
        <ul>
                <li>
                teamwork
                </li>
                <li>
                passion
                </li>
        </ul>
        <strong>What you bring with you:</strong>
        <ul>
                <li>
                Background knowledge
                </li>
                <li>
                Communication
                </li>
        </ul>
        <strong>What you can expect from us:</strong>
        <ul>
                <li>
                great team
                </li>
                <li>
                flexible work timings
                </li>
        </ul>
        <button class="btn btn-primary" type="submit">Apply Now</button>
        </div>
    
@endsection
 --}}

@section('content')
        <div class="container custom-color rounded">
                <h1>Create a New Job</h1>
                {!! Form::open(['action' => 'NewJobController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                                {{Form::label('title', 'Job Title')}}
                                {{Form::text('jobtitle', '', ['class' => 'form-control', 'placeholder' => 'New Job Title'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('Candidate Work', 'Scope of Candidate Work')}}
                                {{Form::textarea('candWork', '', ['id' => 'candWorkckeditor', 'class' => 'ckeditor form-control', 'placeholder' => 'Candidate Work'])}}
                        </div>
                        <div class="form-group">
                                {{Form::label('Candidate Requirements', 'Candidate Requirements')}}
                                {{Form::textarea('candReq', '', ['id' => 'candReqckeditor', 'class' => 'ckeditor form-control', 'placeholder' => 'Candidate Requirements and their background knowledge'])}}
                                {{-- <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea> --}}
                        </div>
                        <div class="form-group">
                                {{Form::label('Candidate Expectations', 'Candidate Expectations from firm')}}
                                {{Form::textarea('candExpec', '', ['id' => 'candExpecckeditor', 'class' => 'ckeditor form-control', 'placeholder' => 'Candidate Expectations from company'])}}
                                {{-- <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea> --}}
                        </div>
                        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
        </div>
@endsection