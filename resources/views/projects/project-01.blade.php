@extends('master')

@section('title')
Colors
@stop

@section('content')

 <!-- HEADER -->
<div class="row">
    <div class="col-md-12 font-1">
        <h1>Colors</h1>
    </div>
</div>

<!-- BODY -->
<div id="colors">
    <!--BANNER IMAGE -->
    <div class="row">
        <div class="col-md-12 font-1 center-inline">
            <img id="color-picker" src="http://placehold.it/450x330">
        </div>
    </div>

    <!-- INSTRUCTIONS -->
    <div class="center-inline">
        <h3><span style="font-weight: 900;">Instructions:</span><span style="font-weight: 200;"> choose colors to see students' favorite colors.<span></h3>
    </div>

    <!-- COLORS: -->
    <div class="row">
        <div id="red" class="col-md-2 col-md-offset-2 col-xs-offset-1 display_color">
            <input type="checkbox" checked="checked" id="red-checkbox" value="red">
            <label for="red-checkbox">Red</label>
        </div>
        <div class="col-md-2 col-md-offset-0 col-xs-offset-1">
            <input type="checkbox" checked="checked" id="orange-checkbox" value="orange">
            <label for="orange-checkbox">Orange</label>
        </div>
        <div class="col-md-2 col-md-offset-0 col-xs-offset-1">
            <input type="checkbox" checked="checked" id="yellow-checkbox" value="yellow">
            <label for="yellow-checkbox">Yellow</label>
        </div>
        <div class="col-md-2 col-md-offset-0 col-xs-offset-1">
            <input type="checkbox" checked="checked" id="green-checkbox" value="green">
            <label for="green-checkbox">Green</label>
        </div>
    </div>


    <div class="row">
        <div class="col-md-2 col-md-offset-2 col-xs-offset-1">
            <input type="checkbox" checked="checked" id="blue-checkbox" value="blue">
            <label for="blue-checkbox">Blue</label>
        </div>
        <div class="col-md-2 col-md-offset-0 col-xs-offset-1">
            <input type="checkbox" checked="checked" id="purple-checkbox" value="purple">
            <label for="purple-checkbox">Purple</label>
        </div>
        <div class="col-md-2 col-md-offset-0 col-xs-offset-1">
            <input type="checkbox" checked="checked" id="black-checkbox" value="black">
            <label for="black-checkbox">Black</label>
        </div>
        <div class="col-md-2 col-md-offset-0 col-xs-offset-1">
            <input type="checkbox" checked="checked" id="white-checkbox" value="white">
            <label for="white-checkbox">White</label>
        </div>
    </div>

    <!-- ADD A STUDENT (TRIGGERS MODAL WINDOW): -->
    <div id="new-student" class="center-inline">
        <button class="btn btn-primary" data-toggle="modal" data-target="#newStudentModal" >+ Student</button>

    </div>

    <table class="table table-hover">
        <thead>
            <th>First</th>
            <th>Last</th>
            <th>Favorite color</th>
        </thead>

        <tbody>
            @foreach ($students as $student)
                <tr class="student {{ strtolower($student->favorite_color) }}">
                    <td>{{ ucfirst($student->first_name) }}</td>
                    <td>{{ ucfirst($student->last_name) }}</td>
                    <td>{{ ucfirst($student->favorite_color) }}</td>
                </tr>                

            @endforeach
        </tbody>
    </table>

<!-- ************************************* -->
        <!-- MODAL WINDOW-->
        <div class="modal fade" id="newStudentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add New Student</h4>
                        </div>

                        <div class="modal-body">
                            <div class="content">
                                    {{ Form::open(array("route" => "new_student", "method" =>"POST")) }}

                                <div class="form-group">
                                    <label for="first">First Name: </label>
                                    <input required type="text" id="first" class="form-control" name="first_name" placeholder="Anne">
                                </div>     
                                <div class="form-group">
                                    <label for="last">Last Name: </label>
                                    <input required type="text" id="last" class="form-control" name="last_name" placeholder="Riefenstahl">
                                </div>
                                <div class="form-group">
                                    <label for="color">Favorite Color </label>
                                    <select required id="color" class="form-control" name="favorite_color">
                                        <option value="">Please select...</option>
                                        <option value="red">Red</option>
                                        <option value="orange">Orange</option>
                                        <option value="yellow">Yellow</option>
                                        <option value="green">Green</option>
                                        <option value="blue">Blue</option>
                                        <option value="purple">Purple</option>
                                        <option value="black">Black</option>
                                        <option value="white">White</option>
                                    </select>
                                </div>                    

                                </div>
                        </div>

                        <div class="modal-footer">
                            <!-- <input type="submit" class="btn btn-primary" data-dismiss="modal" id="new_student"> -->

                            {{ Form::submit('Save', array("class"=>"btn btn-primary", "id"=>"new_student"))}}
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                        </div>
                    </form>


                </div>
            </div>
        </div>
<!-- ************************************* -->


</div>


@stop
