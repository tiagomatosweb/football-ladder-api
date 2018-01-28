<?php

namespace App\Acme\Listeners;

use App\Acme\Events\MatchUpdatedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MatchUpdatedListener
{
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
     * @param  MatchUpdatedEvent  $event
     * @return void
     */
    public function handle(MatchUpdatedEvent $event)
    {
        //
    }
}
