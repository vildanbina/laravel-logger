<?php

namespace bexvibi\LaravelLogger\App\Listeners;

use Illuminate\Auth\Events\Logout;
use bexvibi\LaravelLogger\App\Http\Traits\ActivityLogger;

class LogSuccessfulLogout
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
     * @param Logout $event
     *
     * @return void
     */
    public function handle(Logout $event)
    {
        if (config('LaravelLogger.logSuccessfulLogout')) {
            ActivityLogger::activity('Logged Out');
        }
    }
}
