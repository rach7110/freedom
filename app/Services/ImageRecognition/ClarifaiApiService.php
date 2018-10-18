<?php
namespace App\Services\ImageRecognition;

use Clarifai\API\ClarifaiClient;
use Clarifai\DTOs\Inputs\ClarifaiURLImage;
use Clarifai\DTOs\Inputs\ClarifaiFileImage;
use Clarifai\DTOs\Outputs\ClarifaiOutput;
use Clarifai\DTOs\Predictions\Concept;
use Clarifai\DTOs\Searches\SearchBy;
use Clarifai\DTOs\Searches\SearchInputsResult;
use Clarifai\DTOs\Models\ModelType;
use App\ImageRecognitionInterface;


class ClarifaiApiService implements ImageRecognitionInterface
{
    private $client;

    public function __construct() 
    {
        $this->client = new ClarifaiClient(env('CLARIFAI_API_KEY'));
    }

    /** Send request to API that will analyze media content
     * 
     * @return Object| array
     */
    public function send_request()
    {
        $model = $this->client->publicModels()->generalModel();

        $image = "/Users/rachel/Desktop/cat.jpg";

        $response = $model->batchPredict([
            // new ClarifaiURLImage('https://samples.clarifai.com/metro-north.jpg'),
            new ClarifaiFileImage("/Users/rachel/Desktop/cat.jpg"),
            // new ClarifaiURLImage('https://samples.clarifai.com/wedding.jpg'),
        ])->executeSync();  

        return $response;
    }

    public function display_output($response)
    {
        $outputs = $response->get();

        foreach ($outputs as $output) {
            /** @var ClarifaiURLImage $image */
            $image = $output->input();
            echo "Predicted concepts for image at url " . $image->url();
            echo "</br>";
            
            /** @var Concept $concept */
            foreach ($output->data() as $concept) {
                echo $concept->name() . ': ' . $concept->value();
                echo "</br>";
            }
            echo "</br>";
            echo "</br>";
        }
    }


}