<?php 
namespace App\Services;

class ShiftDecryptionAlgorithmService {
    /**
    * @param  String $string
    * @return String  
     * */ 
    public function decrypt(String $string): String
    {
        for( $i = 0 ; $i<strlen($string) ; $i++){
            $asciiValue = ord($string[$i]);
            if( ($asciiValue >= 65 && $asciiValue <=  90 ) || ($asciiValue >= 97 && $asciiValue <=  122) ){
                $string[$i] = chr($asciiValue-3);
                if(ord($string[$i]) < 65 || ( ord($string[$i]) > 90 && ord($string[$i]) < 97) ){    
                    $string[$i] = chr(ord($string[$i])+26);    
                }
            }else{
                continue;
            }
        }   
        return $string;
    }
}
?>