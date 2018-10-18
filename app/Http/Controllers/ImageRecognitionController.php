<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ImageRecognitionInterface;
use Session;

class ImageRecognitionController extends Controller
{
    protected $imageRecognition;

    public function __construct(ImageRecognitionInterface $imageRecognitionService)
    {
        $this->imageRecognition = $imageRecognitionService;
    }   

    public function create()
    {
        return view('images.concepts.create');
    }

    public function store()
    {
        // Local
        $input = [
            "/Users/rachel/Desktop/cat.jpg",
            // "/Users/rachel/Desktop/kayak.jpg"
        ];

        //Remote
        // $input = [
        //     "https://samples.clarifai.com/metro-north.jpg",
        //     "https://samples.clarifai.com/wedding.jpg"
        // ];     
    
        $response = $this->imageRecognition->send_request($input);

        if($response->isSuccessful()) {
            $this->imageRecognition->display_output($response);
        } else {
            Session::flash('message', 'Response not successful. Error Code: ' . $response->status()->statusCode());
            Session::flash('alert-class', 'alert-danger');
            return back();
        }
    }
}