<?php

namespace App\Console\Commands;

use App\Jobs\ProcessCompletedTrade;
use Illuminate\Console\Command;

class CompletedTrade extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:completed-trade';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Обработывает состоявщиеся торги по одному';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        ProcessCompletedTrade::dispatch();
    }
}
