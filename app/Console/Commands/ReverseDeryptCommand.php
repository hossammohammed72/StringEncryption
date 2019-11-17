<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ReverseDecryptionAlgorithmService;

class ReverseDeryptCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'decrypt:reverse {string}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Decrypt string encrypted using reverse encryption algorithm method';

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
    public function handle(ReverseDecryptionAlgorithmService $decryptionService)
    {
        //
        $string = $this->argument('string');
        echo $decryptionService->decrypt($string);
       
    }
}
