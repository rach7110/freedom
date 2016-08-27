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
<div class="center-block" style="width: 90%; border: black 1px solid;">
  <!-- NOTIFICAITON BAR -->
  <div id="cookies" class="notification">
      <div class="column col-4-6 offset-1-6 center-inline">
          <p>This website uses cookies to give you the best experience possible.<a  data-toggle="modal" data-target="#cookiesPolicy" class="tab" href="/html/privacy.html" target="_blank">Find out more</a></p>
      </div>
      <div id="confirm" class="column col-1-8 center-inline">
          <img src="images/checked-orange-24-24.png">
          <p>Okay</p>
      </div>
  </div>
<!--FAKE COMPANY HEADER -->
  <div>

  </div>
  <!--FAKE COMPANY BODY -->
  <div id="fake-content" class="center-inline">
    <div id="fake-name" >
      <h1>TravelExplore.to</h1>
    </div>
    <!-- <p>Let's Begin</p> -->
  </div>

</div>

<div id="reset-cookie" class="center-inline">
  <a href="">Reset</a>
</div>

<!-- ************************************* -->
        <!-- MODAL WINDOW-->
        <div class="modal fade" id="cookiesPolicy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Policy About Cookies</h4>
                        </div>

                        <div class="modal-body">
                            <div class="content">
                              <p>Our site uses cookies to keep track of your activity. We use cookies for purposes including:  the tracking of a unique number to identify your information to our system for the purpose of pre-populating your information for future forms; and an alpha/numeric token used to allow you to return to the form to edit it.</p>
                              <p>By using this website, you agree to our use of cookies. If you do not wish to accept our cookie use policy, you must stop using our website and disable cookies in your browser settings. Please note that by disabling cookies, you will affect the functionality of our website. Learn how to enable browser cookies: <a href="http://www.wikihow.com/Enable-Cookies-in-Your-Internet-Web-Browser" target="_blank">Cookie Settings</a></p>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <!-- END MODAL WINDOW -->
<!-- ************************************* -->

@stop
