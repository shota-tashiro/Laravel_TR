<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */

     //リスナーを定義してリスナークラス(App\Listeners\RegisteredListener)を作成する。ターミナルでphp artisan event:generateを実行する。
    protected $listen = [
        Registered::class => [
            // SendEmailVerificationNotification::class,
            'App\Listeners\RegisteredListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
