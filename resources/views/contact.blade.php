@extends('master')

@section('title')
Contact Me
@stop

@section('content')

<!-- CONTACT FORM ERROR MESSAGES -->
<ul>

</ul>
<div class="row">
    <div class="col-md-12 font-1">
        <h1>About Me</h1>
    </div>
</div>

<div id="contact" class="container">
    <div class="row">
        <!-- ERROR MESSAGES -->
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        <div class="col-md-7">
            <!-- PROFILE PICTURE -->
            <div class="row">
                <div id="profile-picture" class="col-md-12">
                    <img src="images/rachel-profile.jpg">
                </div>
            </div>

            <!-- ABOUT ME -->
            <div class="row">
                <div class="col-md-12">
                    <div id="about-me">
                        <p>I'm an Chicago-native that landed in Austin in 2010. Currently making projects for <a href="http://regattanetwork.com" target="_blank">Regatta Network</a>. Formerly an engineer in the renewable energy industry. Gradually made a transition into web development after being submerged in the Silicon Hills. I have a passion for racing sailboats and learning new skills. When I'm not outdoors, I'm learning to cook and play the fiddle (but not at the same time).</p>
                    </div>
                </div>
                </div>
        </div>


        <!--CONTACT FORM-->
        <!-- <div class="col-md-4 col-md-push-8"> -->
        <div id="contact-form" class="col-md-5">
            <h3>I would like to hear from you</h3>
            <div>
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

    </div>
</div>

 
@stop


