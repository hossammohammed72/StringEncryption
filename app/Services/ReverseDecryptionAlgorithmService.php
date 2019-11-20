<?php 
namespace App\Services;
use App\Utils\IntegrationUrlsUtil;
class ReverseDecryptionAlgorithmService {
    /** @var IntegrateWithRobustaAPIService $integrationService */ 
    protected $integrationService;
      /** 
    * @param IntegrateWithRobustaAPIService  $integrationService
    * @return void
    **/
    public function __construct(IntegrateWithRobustaAPISERVICE $integrationService){
        $this->ingetrationService = $integrationService;
    }
     /** 
    * @param String  $string
    *@return String 
    **/ 
    public function decrypt(String $string): String
    {
        return$this->ingetrationService->connect($string,IntegrationUrlsUtil::REVERSEDECRYPT);
    }
}
?>