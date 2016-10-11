@extends('master')

<!-- HEADER -->
@section('title')
Projects
@stop

@section('title_description')
@stop

<!-- BODY -->
@section('content')
<div id="projects">

  <!-- SCROLL TOP BUTTON -->
  <button class="btn scroll-top"><img src='images/up-arrow-white-36x36.png'></button>

<!--***************************************-->
<!-- PROJECT-01 -->
<!--***************************************-->
    <div class="row">
        <!-- PROJECT IMAGE -->
        <div class="col-md-4 center-inline">
          <a href="{{ route('project-01') }} " target="_blank">
            <img src="images/animal-skyblue.png">
          </a>
        </div>
        <!-- PROJECT DESCRIPTION -->
        <div class="col-md-8">
          <a href="{{ route('project-01') }}" target="_blank"><h3>Favorite Colors</h3></a>
          <div class="project-description">
            <p>This page demonstrates interactive styling. It uses a homemade CSS grid to vary column widths in the color swatch. It uses JQuery to assign CSS styling and property values and display matching colors and students. It also uses MVC architecture so users can view and add new students to the database. And it uses HTML form validation.</p>
            <!-- CODE BASE-->
            <p class="tools-header">Tools & Concepts:</p>
            <div class="btn-group" role="group" aria-label="...">
              <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/public/js/script.js#L18" target="_blank">Javascript & JQuery</a></button>
              <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/public/css/style.css#L226" target="_blank">CSS Grid</a></button>
              <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/resources/views/projects/project-01.blade.php" target="_blank">HTML</a></button>
              <button type="button" class="btn btn-default nohover">MVC Architecture</button>
              <button type="button" class="btn btn-default nohover">Database Queries</button>
            </div>
        </div>
      </div>
    </div>
<!--***************************************-->
<!-- PROJECT-02 -->
<!--***************************************-->
    </br>
    <div class="row">
        <!-- PROJECT IMAGE -->
        <div class="col-md-4 center-inline">
          <a href="{{ route('project-02') }}" target="_blank">
            <img src="images/animal-orange.png">
          </a>
        </div>
        <!-- PROJECT DESCRIPTION -->
        <div class="col-md-8">
            <a href="{{ route('project-02') }}" target="_blank"><h3>Notification Bar</h3></a>
            <div class="project-description">
              <p>In order to abide by EU law, a company needs to notify its users about cookies. This site uses CSS to style the notification bar. It uses JQuery to animate the notification bar and to set a browser cookie when the user clicks it. If a browser cookie is present the next time the page is visited, then the notification bar will no longer display.</p>
              <!-- CODE BASE-->
              <p class="tools-header">Tools & Concepts:</p>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/public/js/script.js#L61" target="_blank">JQuery</a></button>
                <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/public/css/style.css#L240" target="_blank">CSS</a></button>
                <button type="button" class="btn btn-default nohover">Browser Cookies</button>
              </div>
            </div>
        </div>
    </div>
<!--***************************************-->
<!-- PROJECT-03 -->
<!--***************************************-->
    </br>
    <div class="row">
        <!-- PROJECT IMAGE -->
        <div class="col-md-4 center-inline">
            <img src="images/animal-blue.png">
        </div>

        <!-- PROJECT DESCRIPTION -->
        <div class="col-md-8">
            <a href="http://my.regattanetwork.com" target="_blank"><h3>My Regatta Network</h3></a>
            <div class="project-description">
              <p>
                This web application helps sailboat racers organize their regattas, crew, race payments, and results. It was built for a company using the PHP framework, Laravel. It uses HTML, CSS, and Javascript. It also uses a Google API to help suggest events near the user by converting her street address to latitude and longitude. This project demonstrates my skill bases. I started with user journies and mockups before planning and building the database architecture, front end design, and front and backend coding. Feel free to use the credentials below to explore it.
              </p>
              <p class="tools-header">Test Credentials:</p>
              <p>username: tester@gmail.com</p>
              <p>password: test</p>

              <!-- CODE BASE-->
              <p class="tools-header">Tools & Concepts:</p>
              <div class="btn-group" role="group" aria-label>
                <button type="button" class="btn btn-default nohover">Laravel/PHP</button>
                <button type="button" class="btn btn-default nohover">API</button>
                <button type="button" class="btn btn-default nohover">Database design</button>
                <button type="button" class="btn btn-default nohover">Design Mockups</button>
              </div>
            </div>
            <p>[Code is proprietary. But I'm happy to talk (without specifics) about any of its features.]</p>

        </div>
    </div>

    <br/>


</div>

@stop
