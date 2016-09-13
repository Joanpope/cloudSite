<?php

namespace App\Providers;
use App\User as User;
use App\Events\CreateUserEvent as CreateUserEvent;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\CreateUserEvent' => [
            'App\Listeners\EventListenerCreateUser',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);
        User::created(function($user)
        {
            event(new CreateUserEvent($user)); 
        });
    }
}
