<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ShiftEncryptionAlgorithmService;
class ShiftEncryptCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'encrypt:shift {string}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Encrypt Command using shift encryption algorithm method';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(ShiftEncryptionAlgorithmService $encryptionService)
    {
        //
        $string = $this->argument('string');
        echo $encryptionService->encrypt($string);
       
    }
}
