<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use Input;

class StudentController extends Controller
{
    public function index () {

    	$students = Student::all();
		return view('projects.project-01')->with ('students', $students);

    }

    public function save() {
    	
    	$student = new Student;
    	$student->first_name = Input::get('first_name');
    	$student->last_name = Input::get('last_name');
    	$student->favorite_color = Input::get('favorite_color');
    	$student->save();

        return redirect('project-01');

    }
}
