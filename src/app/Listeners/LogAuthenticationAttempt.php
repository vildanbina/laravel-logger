<?php

namespace vildanbina\LaravelLogger\App\Listeners;

use Illuminate\Auth\Events\Attempting;
use vildanbina\LaravelLogger\App\Http\Traits\ActivityLogger;

class LogAuthenticationAttempt
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
     * @param Attempting $event
     *
     * @return void
     */
    public function handle(Attempting $event)
    {
        if (config('LaravelLogger.logAuthAttempts')) {
            ActivityLogger::activity('Authenticated Attempt');
        }
    }
}
