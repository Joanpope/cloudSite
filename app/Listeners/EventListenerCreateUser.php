<?php

namespace App\Listeners;
use App\Repository as Repository;
use App\User as User;
use App\Events\CreateUserEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListenerCreateUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle(CreateUserEvent $event)
    {
        $user = $event->user;
        $repository = Repository::create(['url' => $user['attributes']['id'] . \Config::get('constants.DS')]);
        $repository->user_id = $user['attributes']['id'];
        $repository->save();
        return false;
    }
}
