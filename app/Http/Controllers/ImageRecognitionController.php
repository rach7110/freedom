<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ImageRecognitionInterface;

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
        $response = $this->imageRecognition->send_request();
        $this->imageRecognition->display_output($response);
    }
}
