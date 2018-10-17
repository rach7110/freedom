<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Services\ImageRecognition\ClarifaiApiService;

class ImageRecognitionController extends Controller
{
    protected $clarifaiService;

    public function __construct()
    {
        $this->clarifaiService = new ClarifaiApiService;
    }   

    public function create()
    {
        return view('images.concepts.create');
    }

    public function store()
    {
        $response = $this->clarifaiService->send_request();
        $this->clarifaiService->display_output($response);
    }
}
