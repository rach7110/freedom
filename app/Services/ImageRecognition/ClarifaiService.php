<?php
namespace app\Services\ImageRecognition;

use Clarifai\API\ClarifaiClient;
use Clarifai\DTOs\Inputs\ClarifaiURLImage;
use Clarifai\DTOs\Outputs\ClarifaiOutput;
use Clarifai\DTOs\Predictions\Concept;
use Clarifai\DTOs\Searches\SearchBy;
use Clarifai\DTOs\Searches\SearchInputsResult;
use Clarifai\DTOs\Models\ModelType;


class ClarifaiApiService
{
    private $client;
    private $model;

    public function __construct() 
    {
        $this->client = new ClarifaiClient(env('CLARIFAI_API_KEY'));
        $this->model = $client->publicModels()->generalModel();
    }

    public function send_request()
    {
        $response = $model->batchPredict([
            new ClarifaiURLImage('https://samples.clarifai.com/metro-north.jpg'),
            new ClarifaiURLImage('https://samples.clarifai.com/wedding.jpg'),
        ])->executeSync();

        if (!$response->isSuccessful()) {
            echo "Response is not successful. Reason: \n";
            echo $response->status()->description() . "\n";
            echo $response->status()->errorDetails() . "\n";
            echo "Status code: " . $response->status()->statusCode();
            exit(1);
        }  

        return $response;
    }

    public function display_output()
    {
        $response = $this->send_request();
        $outputs = $response->get();

        foreach ($outputs as $output) {
            /** @var ClarifaiURLImage $image */
            $image = $output->input();
            echo "Predicted concepts for image at url " . $image->url() . "\n";
            
            /** @var Concept $concept */
            foreach ($output->data() as $concept) {
                echo $concept->name() . ': ' . $concept->value() . "\n";
            }
            echo "\n";
        }
    }


}