@extends('master')

<!-- HEADER -->
@section('title')
Notification Bar
@stop

@section('title_description')
@stop

<!-- BODY -->
@section('content')

<!--WINDOW FOR MOCK WEBSITE HOMEPAGE:  -->
<div class="center-block" style="width: 90%; height: 700px; border: black 1px solid;">
  <!-- HEADER -->
  <div></div>
  <!-- NOTIFICAITON BAR -->
  <div id="cookies" class="notification">
      <div class="column col-4-6 offset-1-6">
          <h4>This website uses cookies to give you the best experience possible.<a class="tab" href="/html/privacy.html" target="_blank">Find out more</a></h4>
      </div>
      <div id="confirm" class="column col-1-8">
          <img src="images/checked-orange-24-24.png">
          <h4>Okay</h4>
      </div>
  </div>

  <!-- BODY -->
  <div></div>

</div>

@stop
