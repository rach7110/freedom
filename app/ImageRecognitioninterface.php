<?php

namespace App;

interface ImageRecognitionInterface
{
    public function send_request();

    public function display_output($response);
}