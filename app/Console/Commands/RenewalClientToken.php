<?php

namespace App\Console\Commands;

use App\Http\Controllers\ClientController;
use Illuminate\Console\Command;

class RenewalClientToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'client:renewal-token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Renewal Forte Clients Token';

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
     * @param ClientController $client
     * @return mixed
     */
    public function handle(ClientController $client)
    {
        $client->renewal();
    }
}
