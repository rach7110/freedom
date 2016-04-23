@extends('master')

@section('title')
Contact Me
@stop

@section('content')

<h1 class="font-1"> Contact</h1>
<hr>

<!-- CONTACT FORM ERROR MESSAGES -->
<ul>

</ul>


<div class="row">
    <!-- ERROR MESSAGES -->
    @if($errors)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <!--CONTACT FORM-->
    <div class="col-md-4 col-md-push-8">
        <div class="template">
            {{ Form::open(array('route' => 'message')) }}
                <div class="form-group">
                    {{ Form::label('Your Name') }}
                    {{ Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>'Your name')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('Your Email') }}
                    {{ Form::text('email', null, array('required', 'class'=>'form-control', 'placeholder'=>'Your e-mail address')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('Your Message') }}
                    {{ Form::textarea('message', null, array('required', 'class'=>'form-control',  'placeholder'=>'Your message')) }}
                </div>

                <input type="submit" value="Submit">
            {{ Form::close() }}


        </div>
    </div>

    <!-- ABOUT ME -->
    <div class="col-md-4 ">
        <div class="template">
        About Me
        </div>
    </div>

    <!-- PROFILE PICTURE -->
    <div class="col-md-4 col-md-pull-8">
        <div class="template">
        <img class="profile-picture" src="images/rachel-profile.jpg">
        </div>
    </div>
</div>
 
@stop


