<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Services\ShiftDecryptionAlgorithmService;
class ShiftDecryptCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'decrypt:shift {string}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Decrypt string encrypted using shift encryption algorithm method';

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
    public function handle(ShiftDecryptionAlgorithmService $decryptionService)
    {
        //
        $string = $this->argument('string');
        echo $decryptionService->decrypt($string);
       
    }
}
