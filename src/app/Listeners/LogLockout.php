<?php

namespace bexvibi\LaravelLogger\App\Listeners;

use Illuminate\Auth\Events\Lockout;
use bexvibi\LaravelLogger\App\Http\Traits\ActivityLogger;

class LogLockout
{
    use ActivityLogger;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param Lockout $event
     *
     * @return void
     */
    public function handle(Lockout $event)
    {
        if (config('LaravelLogger.logLockOut')) {
            ActivityLogger::activity('Locked Out');
        }
    }
}
