<?php

namespace App\Listeners;

use App\Models\Event;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TestListener
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
     * @param  string  $event
     * @return void
     */
    public function handle($event)
    {
        Event::updateOrCreate([
            'event' => $event->event
        ]);
    }
}
