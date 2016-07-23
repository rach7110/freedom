@extends('master')

<!-- HEADER -->
@section('title')
Projects
@stop

@section('title_description')
(we'll get there...)
@stop

<!-- BODY -->
@section('content')
<div id="projects">

    <!-- PROJECT-01 -->
    <a href="{{ route('project-01') }}">
    <div class="row">
        <!-- PROJECT IMAGE -->
        <div class="col-md-4 center-inline">
            <img src="images/animal-skyblue.png">
        </div>
        <!-- PROJECT DESCRIPTION -->
        <div class="col-md-8">
        <h4>Colors!</h4>
        <p>
        Cappuccino, java black trifecta caramelization latte cream in crema percolator. Id to go sweet, froth macchiato, arabica cortado milk whipped trifecta. Filter single origin, americano milk instant affogato crema wings. Bar id black single origin pumpkin spice sit mazagran flavour. Froth, eu milk coffee kopi-luwak fair trade skinny flavour.
        </p>
        </div>
    </div>
    </a>

    <!-- PROJECT-02 -->
    <div class="row">
        <!-- PROJECT IMAGE -->
        <div class="col-md-4 center-inline">
            <img src="images/animal-orange.png">
        </div>
        <!-- PROJECT DESCRIPTION -->
        <div class="col-md-8">
            <h4>Project Title</h4>
            <p>Cappuccino, java black trifecta caramelization latte cream in crema percolator. Id to go sweet, froth macchiato, arabica cortado milk whipped trifecta. Filter single origin, americano milk instant affogato crema wings. Bar id black single origin pumpkin spice sit mazagran flavour. Froth, eu milk coffee kopi-luwak fair trade skinny flavour.
            </p>
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
            <h4>Project Title</h4>
            <p>Cappuccino, java black trifecta caramelization latte cream in crema percolator. Id to go sweet, froth macchiato, arabica cortado milk whipped trifecta. Filter single origin, americano milk instant affogato crema wings. Bar id black single origin pumpkin spice sit mazagran flavour. Froth, eu milk coffee kopi-luwak fair trade skinny flavour.
            </p>
        </div>
    </div>
</div>

@stop
