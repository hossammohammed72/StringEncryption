<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\ShiftDecryptionAlgorithmService;
class ShiftDecryptionAlgorithmTest extends TestCase
{
    
    /**
     * test Basic Functionality
     *
     * @return void
     */
    public function testAlgorithmWorks(){
        $expected = 'Hello World';
        $shiftDecryption = app()->make(ShiftDecryptionAlgorithmService::class);
        $actual = $shiftDecryption->decrypt('Khoor Zruog');
        $this->assertEquals( $expected,$actual,'Decryption Shift Failed');
    }

    /**
     * test Corner Cases
     */


}
