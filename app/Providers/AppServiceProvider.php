<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use App\Http\Middleware\AuthMiddleware;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        $router->aliasMiddleware('auth', AuthMiddleware::class);
    }
}

