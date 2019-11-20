<?php 
namespace App\Services;
use App\Utils\IntegrationUrlsUtil;
class ReverseEncryptionAlgorithmService {
    /** @var IntegrateWithRobustaAPIService $integrationService */ 
    protected $integrationService;
     /** 
    * @param IntegrateWithRobustaAPIService  $integrationService
    * @return void
    **/ 
    public function __construct(IntegrateWithRobustaAPIService $integrationService){
        $this->ingetrationService = $integrationService;
    }
    /** 
    * @param String  $string
    *@return String 
    **/ 
    public function encrypt(String $string): String
    {
        return $this->ingetrationService->connect($string,IntegrationUrlsUtil::REVERSEENCRYPT);
    }
}
?>