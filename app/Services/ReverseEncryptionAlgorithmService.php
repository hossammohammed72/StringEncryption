<?php 
namespace App\Services;
use App\Utils\IntegrationUrlsUtil;
class ReverseEncryptionAlgorithmService {
    protected $integrationService;
    public function __construct(IntegrateWithRobustaAPIService $integrationService){
        $this->ingetrationService = $integrationService;
    }
    public function encrypt(String $string): String
    {
        return $this->ingetrationService->connect($string,IntegrationUrlsUtil::REVERSEENCRYPT);
    }
}
?>