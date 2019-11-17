<?php 
namespace App\Services;
use App\Utils\IntegrationUrlsUtil;
class ReverseDecryptionAlgorithmService {
    protected $integrationService;
    public function __construct(IntegrateWithRobustaAPISERVICE $integrationService){
        $this->ingetrationService = $integrationService;
    }
    public function decrypt(String $string): String
    {
        return$this->ingetrationService->connect($string,IntegrationUrlsUtil::REVERSEDECRYPT);
    }
}
?>