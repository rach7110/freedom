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
          <a href="{{ route('project-01') }}">
            <img src="images/animal-skyblue.png">
          </a>
        </div>
        <!-- PROJECT DESCRIPTION -->
        <div class="col-md-8">
          <a href="{{ route('project-01') }}"><h3>Favorite Colors</h3></a>

          <div class="project-description">
            <p>A single page app that demonstates interactive styling. It uses a homemade CSS grid to vary column widths in the color swatch. It uses JQuery to assign CSS styling and property values in order to display matching colors and students. It also uses MVC architecture so users can view and add new students to the database. And it uses HTML form validation.</p>
            <p><span class="tools">Tools &  Concepts:</span>JQuery, CSS Grid, MVC Framework, Database Queries, HTML Form Validation</p>
        </div>
        </div>
    </div>
    <br/>
    <!-- PROJECT-02 -->
    <div class="row">
        <!-- PROJECT IMAGE -->
        <div class="col-md-4 center-inline">
          <a href="{{ route('project-02') }}">
            <img src="images/animal-orange.png">
          </a>
        </div>
        <!-- PROJECT DESCRIPTION -->
        <div class="col-md-8">
            <a href="{{ route('project-02') }}"><h3>Notification Bar</h3></a>

            <div class="project-description">
              <p>In order to abide by EU law, a company needs to notify its users about cookies. This site uses CSS to style the notificaiton bar. It uses JQuery to animate the notification bar and to set a browser cookie when the user clicks it. If a broswer cookie is present the next time the page is visited, then the notification bar will no longer display.</p>
              <p><span class="tools">Tools &  Concepts:</span>PHP, Browser Cookies, JQuery, CSS</p>
          </div>
        </div>
    </div>
    <br/>


    <!-- PROJECT-03 -->
    <div class="row">
        <!-- PROJECT IMAGE -->
        <div class="col-md-4 center-inline">
            <img src="images/animal-blue.png">
        </div>
        <!-- PROJECT DESCRIPTION -->
        <div class="col-md-8">
            <h3>Project Title</h3>
            <p>Cappuccino, java black trifecta caramelization latte cream in crema percolator. Id to go sweet, froth macchiato, arabica cortado milk whipped trifecta. Filter single origin, americano milk instant affogato crema wings. Bar id black single origin pumpkin spice sit mazagran flavour. Froth, eu milk coffee kopi-luwak fair trade skinny flavour.
            </p>
        </div>
    </div>
    <br/>


</div>

@stop
