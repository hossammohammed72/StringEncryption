<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\MatrixEncryptionAlgorithmService;

class MatrixEncryptCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'encrypt:matrix {string}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Encrypt string based on matrix encryption method';

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
    public function handle(MatrixEncryptionAlgorithmService $encryptionService)
    {
        //
        $string = $this->argument('string');
        echo $encryptionService->encrypt($string);
       
    }
}
