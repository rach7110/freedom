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

    <!-- PROJECT-01 -->
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
            <p>Demonstates interactive styling. Uses a homemade CSS grid to vary column widths in the color swatch. Uses JQuery to assign CSS styling and property values and display matching colors and students. Also uses MVC architecture so users can view and add new students to the database. And uses HTML form validation.</p>
            <!-- CODE BASE-->
            <p class="tools-header">Tools & Concepts:</p>
            <div class="btn-group" role="group" aria-label="...">
              <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/public/js/script.js" target="_blank">Javascript & JQuery</a></button>
              <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/public/css/style.css" target="_blank">CSS Grid</a></button>
              <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/resources/views/projects/project-01.blade.php" target="_blank">HTML & Form Validation</a></button>
              <button type="button" class="btn btn-default nohover">MVC Architecture</button>
              <button type="button" class="btn btn-default nohover">Database Queries</button>
            </div>
        </div>
      </div>
    </div>
    <!-- PROJECT-02 -->
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
              <p>In order to abide by EU law, a company needs to notify its users about cookies. This site uses CSS to style the notificaiton bar. It uses JQuery to animate the notification bar and to set a browser cookie when the user clicks it. If a broswer cookie is present the next time the page is visited, then the notification bar will no longer display.</p>
              <!-- CODE BASE-->
              <p class="tools-header">Tools & Concepts:</p>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/public/js/script.js" target="_blank">JQuery</a></button>
                <button type="button" class="btn btn-default"><a href="https://github.com/rach7110/freedom/blob/master/public/css/style.css" target="_blank">CSS</a></button>
                <button type="button" class="btn btn-default nohover">Browser Cookies</button>
              </div>
            </div>
        </div>
    </div>
    <!-- PROJECT-03 -->
    </br>
    <div class="row">
        <!-- PROJECT IMAGE -->
        <div class="col-md-4 center-inline">
            <img src="images/animal-blue.png">
        </div>
        <!-- PROJECT DESCRIPTION -->
        <div class="col-md-8">
            <h3>(New Project Coming Soon)</h3>
        </div>
    </div>
    <br/>


</div>

@stop
