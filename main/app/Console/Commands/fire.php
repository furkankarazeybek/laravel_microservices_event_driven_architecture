<?php

namespace App\Console\Commands;

use App\Jobs\TestJob;
use Illuminate\Console\Command;

class fire extends Command
{
    
    protected $signature = 'fire';

    public function handle()
    {
        TestJob::dispatch();
    }
}
