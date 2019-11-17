<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\ShiftEncryptionAlgorithmService;
class ShiftEncryptionAlgorithmTest extends TestCase
{
    
    /**
     * test Basic Functionality
     *
     * @return void
     */
    public function testAlgorithmWorks(){
        $expected = 'Khoor Zruog';
        $shiftEncryption = app()->make(ShiftEncryptionAlgorithmService::class);
        $actual = $shiftEncryption->encrypt('Hello World');
        $this->assertEquals( $expected,$actual,'Encryption Shift Failed');
    }

    /**
     * test Corner Cases
     */


}
