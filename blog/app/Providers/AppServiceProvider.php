<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Tendremos la informacion en el cliente
     *
     * @return void
     */
    public function boot()
    {
        Inertia::share([
            "flash" => function(){
                return [
                    "success"=>session("success"),
                    "status" =>session("status"),
                    "error"=>session("error")
                ];
            }
        ]);
    }
}
