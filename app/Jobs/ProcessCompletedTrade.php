<?php

namespace App\Jobs;

use App\Models\Status;
use App\Models\Trade;
use App\Module\Etp\Services\EtpService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\DB;

use function Illuminate\Log\log;

class ProcessCompletedTrade implements ShouldQueue
{
    use Queueable;

    public $tries = 5;
    public $timeout = 60;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(EtpService $etpService): void
    {
        $trade = Trade::whereNull('purchasePrice')
            ->where('tradeStartDate', '<=', now()->format('Y-m-d'))
            ->whereNotIn('status_id', [Status::CANCELED, Status::NOT_COMPLETED])
            ->first();

        if (! $trade) return;

        $etpService->fetchTrade($trade);
    }
}
