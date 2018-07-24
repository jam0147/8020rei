<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Http\Controllers\SendMessageController;
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        Event::listen('eloquent.created: App\Response', function ($sms){
            
            $ToEmail = 'cristian@hostienda.com';
            $FromEmail = 'lealcristian46@gmail.com';
            $Subject = 'Evento';
            $Message = 'Respuesta';
            $controller = new SendMessageController();
            $controller->EventoMessage('mail::emailEvent', $ToEmail, $FromEmail, $Subject, $Message, $sms);
        });
        //
    }
}
