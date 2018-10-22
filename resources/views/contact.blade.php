@extends('master')

<!-- HEADER -->
@section('title')
Contact
@stop

@section('title_description')
@stop

@section('content')
<!-- CONTACT FORM ERROR MESSAGES -->
<ul>
<!-- TODO -->
</ul>

<div id="contact">
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
                        <p>I'm a Chicago-native that landed in Austin in 2010. Currently making projects for <a href="http://regattanetwork.com" target="_blank">Regatta Network</a>. Formerly an engineer in the renewable energy industry. I made a transition into web development in 2013 after being submerged in Austin's Silicon Hills. I have a passion for learning new skills, nature, and racing sailboats. When I'm not outdoors, I'm learning to cook and play the fiddle. (But not at the same time.)</p>
                    </div>
                </div>
                </div>
        </div>


        <!--CONTACT FORM-->
        <!-- <div class="col-md-4 col-md-push-8"> -->
        <div id="contact-form" class="col-md-5">
            <h3>I would like to hear from you</h3>
            <div>
                <form method="POST" action="{{route('message')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name"></label>
                        <input name="name" class="form-control" placeholder='Name' required>
                    </div>

                    <div class="form-group">
                        <label for="email"></label>
                        <input name="email" class="form-control" placeholder='E-mail address' required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <input name="message" class="form-control" placeholder='Message' required>
                    </div>

                    <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                </form>


            </div>
        </div>

    </div>
</div>


@stop
