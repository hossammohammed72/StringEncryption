<?php 

namespace App\Services;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

use App\Utils\IntegrationUrlsUtil;
class IntegrateWithRobustaApiService {
    public function __construct(Client $client){
        $this->client = $client;
        
    }
    
    public function connect(String $string,$url){
        $response = $this->client->request('POST',$url,[
            'form_params'=>[
                'string'=>$string,
            ]
        ]);
        return json_decode($response->getBody())->string;
    }

}

?>