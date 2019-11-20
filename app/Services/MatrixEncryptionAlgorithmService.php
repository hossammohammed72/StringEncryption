<?php 
namespace App\Services;

class MatrixEncryptionAlgorithmService {
     /**
     * @var Array $matrix encryption matrix
     *  */
    protected $matrix = [
        [8.000 , 4.000 , 4.000 , 8.000, 7.000 , 8.000 , 7.000 , 1.000 , 9.000 , 4.000 , 1.000 , 1.000 , 1.000, 6.000, 3.000,
        0.000],
        [9.000, 6.000, 0.000, 0.000, 5.000, 4.000, 2.000, 3.000, 1.000, 4.000, 7.000, 8.000, 2.000, 6.000, 0.000,
        5.000],
        [0.000, 7.000, 2.000, 4.000, 4.000, 9.000, 4.000, 0.000, 1.000, 1.000, 3.000, 1.000, 2.000, 7.000, 0.000,
        7.000],
        [9.000, 5.000, 9.000, 7.000, 8.000, 3.000, 2.000, 6.000, 5.000, 5.000, 6.000, 1.000, 6.000, 8.000, 4.000,
        6.000],
        [5.000, 1.000, 7.000, 1.000, 1.000, 0.000, 2.000, 9.000, 8.000, 6.000, 0.000, 9.000, 5.000, 5.000, 6.000,
        3.000],
        [3.000, 9.000, 8.000, 4.000, 0.000, 4.000, 5.000, 0.000, 1.000, 0.000, 9.000, 6.000, 6.000, 7.000, 0.000,
        7.000],
        [7.000, 1.000, 8.000, 3.000, 1.000, 0.000, 2.000, 1.000, 0.000, 1.000, 3.000, 3.000, 7.000, 5.000, 5.000,
        3.000],
        [6.000, 1.000, 4.000, 3.000, 9.000, 5.000, 1.000, 2.000, 9.000, 7.000, 5.000, 4.000, 2.000, 5.000, 0.000,
        0.000],
        [9.000, 3.000, 7.000, 5.000, 0.000, 4.000, 4.000, 2.000, 5.000, 9.000, 3.000, 1.000, 6.000, 6.000, 7.000,
        4.000],
        [3.000, 2.000, 3.000, 4.000, 4.000, 1.000, 5.000, 1.000, 1.000, 0.000, 6.000, 5.000, 1.000, 2.000, 8.000,
        3.000],
        [6.000, 6.000, 0.000, 7.000, 2.000, 7.000, 1.000, 0.000, 2.000, 6.000, 4.000, 2.000, 2.000, 9.000, 4.000,
        0.000],
        [9.000, 7.000, 7.000, 3.000, 1.000, 5.000, 1.000, 0.000, 9.000, 5.000, 4.000, 9.000, 3.000, 6.000, 6.000,
        0.000],
        [6.000, 4.000, 9.000, 3.000, 9.000, 7.000, 8.000, 8.000, 3.000, 8.000, 2.000, 1.000, 5.000, 9.000, 5.000,
        2.000],
        [4.000, 2.000, 1.000, 7.000, 0.000, 2.000, 7.000, 9.000, 2.000, 8.000, 5.000, 7.000, 6.000, 7.000, 1.000,
        9.000],
        [4.000, 2.000, 4.000, 2.000, 9.000, 4.000, 6.000, 2.000, 2.000, 6.000, 3.000, 0.000, 6.000, 7.000, 3.000,
        2.000],
        [5.000, 9.000, 1.000, 4.000, 2.000, 3.000, 1.000, 0.000, 0.000, 8.000, 5.000, 6.000, 9.000, 9.000, 7.000,
        0.000]
    ];
    /**
    * @param  String $string
    * @return String  
     * */ 
    public function encrypt(String $string): String
    {
        $outputMatrix = [];
        for($i=0;$i<strlen($string);$i++){
            for($j=0;$j<16;$j++){
                $outputMatrix[$i][$j]=0;
                for ($z=0; $z <16 ; $z++) { 
                    // if the bitwise & returns 1 
                    //then the bit in corresponing bit in ascii character(input matrix) is 1 so we 
                    // add the number in the matrix else we add 0(i.e the bit is zero in the ascii character(input matrix))
                    $outputMatrix[$i][$j]+= (ord($string[$i]) & 1<<$z)? $this->matrix[$j][$z]:0;
                }
            }
        
        } 
        // map each number to 8-bit string and concatenate them
        $outputString = '';
        for($i=0;$i<strlen($string);$i++){
            $sum = '';
            for($j=0;$j<16;$j++){
            $sum.=sprintf( "%08d",decbin($outputMatrix[$i][$j]));
            }
            $outputString.= $sum;
        }
        return $outputString;
    }

}
?>