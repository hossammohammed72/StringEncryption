<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\ReverseEncryptionAlgorithmService;
class ReverseEncryptionAlgorithmTest extends TestCase
{
    /**
     * test Basic Functionality
     *
     * @return void
     */
    public function testAlgorithmWorks(){
        $expected = 'dlrow olleH';
        $shiftEncryption = app()->make(ReverseEncryptionAlgorithmService::class);
        $actual = $shiftEncryption->encrypt('Hello world');
        $this->assertEquals( $expected,$actual,'Reverese Encryption Failed');
    }
}
