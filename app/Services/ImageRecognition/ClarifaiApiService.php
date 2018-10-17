<?php
namespace App\Services\ImageRecognition;

use Clarifai\API\ClarifaiClient;
use Clarifai\DTOs\Inputs\ClarifaiURLImage;
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

    public function send_request()
    {
        $model = $this->client->publicModels()->generalModel();

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