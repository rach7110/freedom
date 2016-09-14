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
            <p>A single page app that demonstates interactive styling. It uses a homemade CSS grid to vary column widths in the color swatch. It uses JQuery to assign CSS styling and property values in order to display matching colors and students. It also uses MVC architecture so users can view and add new students to the database. And it uses HTML form validation.</p>
            <!-- CODE BASE-->
            <p class="tools-header">Tools & Concepts:</p>
            <p class="instruction">(Click to view code base)</p>
            <ul>
              <li><a href="https://github.com/rach7110/freedom/blob/master/public/js/script.js" target="_blank">Javascript & JQuery</a></li>
              <li><a href="https://github.com/rach7110/freedom/blob/master/public/css/style.css" target="_blank">CSS Grid</a></li>
              <li>MVC Framework</li>
              <li>Database Queries</li>
              <li><a href="https://github.com/rach7110/freedom/blob/master/resources/views/projects/project-01.blade.php" target="_blank">HTML & Form Validation</a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- PROJECT-02 -->
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
              <p class="instruction">(Click to view code base)</p>
              <ul>
                <li>Browser Cookies</li>
                <li><a href="https://github.com/rach7110/freedom/blob/master/public/js/script.js" target="_blank">JQuery</a></li>
                <li><a href="https://github.com/rach7110/freedom/blob/master/public/css/style.css" target="_blank">CSS</a></li>
              </ul>
            </div>
        </div>
    </div>
    <!-- PROJECT-03 -->
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
