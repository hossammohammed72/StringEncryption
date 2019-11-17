<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\ReverseDecryptionAlgorithmService;
class ReverseDecryptionAlgorithmTest extends TestCase
{
    /**
     * test Basic Functionality
     *
     * @return void
     */
    public function testAlgorithmWorks(){
        $expected = 'Hello world';
        $shiftDecryption = app()->make(ReverseDecryptionAlgorithmService::class);
        $actual = $shiftDecryption->decrypt('dlrow olleH');
        $this->assertEquals( $expected,$actual,'Reverese Decryption Failed');
    }
}
