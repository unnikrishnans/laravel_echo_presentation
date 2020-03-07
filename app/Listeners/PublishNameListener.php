<?php

namespace App\Listeners;

use App\Events\PublishName;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PublishNameListener
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
     * @param  PublishName  $event
     * @return void
     */
    public function handle(PublishName $event)
    {
        return 'unni';
    }
}
