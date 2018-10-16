<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Services\ImageRecognition\ClarifaiApiService;

class ClarifaiController extends Controller
{
    protected $clarifai;

    public function __construct()
    {
        $this->clarifai = new ClarifaiApiService;
    }

    /**
     * Handle the image recognition request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function handle()
    {
        $this->clarifai->display_output();
    }
}
