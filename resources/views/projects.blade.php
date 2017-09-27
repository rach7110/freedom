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
<!-- PROJECT -->
<!--***************************************-->
    </br>
    <div class="row">
        <!-- PROJECT IMAGE -->
        <div class="col-md-4 center-inline">
          <a href="http://my.regattanetwork.com" target="_blank">
            <img src="images/animal-blue.png">
          </a>
        </div>

        <div class="col-md-8">
        <!-- PROJECT TITLE -->
            <a href="http://my.regattanetwork.com" target="_blank"><h3>My Regatta Network</h3></a>
          <!-- PROJECT DESCRIPTION -->
            <div class="project-description">
              <p>
                This web application is every sailor's best friend as it helps them stay organized with their events and registrations. It was built for a company using the PHP framework, Laravel. It uses HTML, CSS, and JavaScript. It also uses a Google API to help suggest events near the user by converting her street address to latitude and longitude. This project required knowledge beyond the front-end and back-end coding. I started with user journeys and mock-ups to plan the front-end designs. I also used flowcharts to design the database architecture.
                </p>
              <p>
                NOTE: This site contains several several links to the company's legacy project. Any URL with my.regattanetwork.com is part of the project that I built. However, any URL that begins with www.regatttanetwork.com was built years ago by a different development team.
              </p>
              <a href="http://my.regattanetwork.com" target="_blank"><h4>Feel free sign-in and explore</h4></a>
              <div class="sign-in">
                <ul>
                <li><p>username: tester@gmail.com</p></li>
                <li><p>password: tester</p></li>
              </ul>
              </div>

              <!-- CODE BASE-->
              <p class="tools-header">Tools & Concepts:</p>
              <div class="btn-group" role="group" aria-label>
                <button type="button" class="btn btn-default nohover">Laravel/PHP</button>
                <button type="button" class="btn btn-default nohover">API</button>
                <button type="button" class="btn btn-default nohover">Database design</button>
                <button type="button" class="btn btn-default nohover">Design Mockups</button>
                <button type="button" class="btn btn-default nohover">HTML</button>
                <button type="button" class="btn btn-default nohover">CSS</button>
                <button type="button" class="btn btn-default nohover">JavaScript/JQuery</button>
              </div>
            </div>
            <p>(Code is proprietary)</p>

        </div>
    </div>
<!--***************************************-->
<!-- PROJECT -->
<!--***************************************-->
    </br>
    <div class="row">
        <!-- PROJECT IMAGE -->
        <div class="col-md-4 center-inline">
          <a href="http://phrf-calculator.herokuapp.com/" target="_blank">
            <img src="images/animal-skyblue.png">
          </a>
        </div>
        <!-- PROJECT DESCRIPTION -->
        <div class="col-md-8">
            <a href="http://phrf-calculator.herokuapp.com/" target="_blank"><h3>Racing Handicap Calculator</h3></a>
            <div class="project-description">
              <p>
                A sailboat racing calculator. Determines a sailboat's corrected finish time using one of many different handicap systems. Includes a weather API so users can view environmental factors that may affect the results.
              </p>
              <!-- CODE BASE-->
              <p class="tools-header">Tools & Concepts:</p>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/racing-handicap-calculator" target="_blank">Laravel/PHP</a></button>
              </div>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/racing-handicap-calculator/commit/a4902a831b048626f897a9e85df4d7d4a6ea0b8e" target="_blank">Events & Listeners</a></button>
              </div>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/racing-handicap-calculator/blob/master/app/Http/Controllers/WeatherController.php" target="_blank">3rd Party API</a></button>
              </div>
            </div>
        </div>
    </div>
<!--***************************************-->
<!-- PROJECT -->
<!--***************************************-->
    </br>
    <div class="row">
        <!-- PROJECT IMAGE -->
        <div class="col-md-4 center-inline">
          <a href="https://github.com/rach7110/racing-handicap-classes" target="_blank">
            <img src="images/animal-orange.png">
          </a>
        </div>
        <!-- PROJECT DESCRIPTION -->
        <div class="col-md-8">
            <a href="https://github.com/rach7110/racing-handicap-classes" target="_blank"><h3>Racing Handicap Classes</h3></a>
            <div class="project-description">
              <p>Classes and unit tests for the sailboat racing calculator. This sample exhibits that I can write PHP from scratch and not just within an MVC framework.</p>
              <!-- CODE BASE-->
              <p class="tools-header">Tools & Concepts:</p>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/racing-handicap-classes/tree/master/src" target="_blank">PHP Classes</a></button>
                <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/racing-handicap-classes/tree/master/tests" target="_blank">Unit Testing</a></button>
              </div>
            </div>
        </div>
    </div>
<!--***************************************-->
<!-- PROJECT -->
<!--***************************************-->
    </br>
    <div class="row">
        <!-- PROJECT IMAGE -->
        <div class="col-md-4 center-inline">
          <a href="https://json-people.herokuapp.com/" target="_blank">
            <img src="images/animal-blue.png">
          </a>
        </div>
        <!-- PROJECT DESCRIPTION -->
        <div class="col-md-8">
            <a href="https://json-people.herokuapp.com/" target="_blank"><h3>JSON People</h3></a>
            <div class="project-description">
              <p>
              Code that validates parameters from user input in JSON format, manipulates the data, and saves it to a database. Includes unit tests.
              </p>
              <!-- CODE BASE-->
              <p class="tools-header">Tools & Concepts:</p>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/json-people-L5/tree/master/app" target="_blank">JSON</a></button>
                <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/json-people-L5/blob/master/tests/PeopleTest.php" target="_blank">Unit Testing</a></button>
              </div>
            </div>
        </div>
    </div>
<!--***************************************-->
<!-- PROJECT -->
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
              <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/public/js/script.js#L18" target="_blank">JavaScript & JQuery</a></button>
              <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/public/css/style.css#L230" target="_blank">CSS Grid</a></button>
              <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/resources/views/projects/project-01.blade.php" target="_blank">HTML</a></button>
              <button type="button" class="btn btn-default nohover">MVC Architecture</button>
              <button type="button" class="btn btn-default nohover">Database Queries</button>
            </div>
        </div>
      </div>
    </div>
<!--***************************************-->
<!-- PROJECT -->
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
                <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/public/css/style.css#L244I spoke" target="_blank">CSS</a></button>
                <button type="button" class="btn btn-default nohover">Browser Cookies</button>
              </div>
            </div>
        </div>
    </div>

    <br/>


</div>

@stop
