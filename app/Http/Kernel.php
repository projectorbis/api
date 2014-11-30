<?php namespace Orbis\Http;

use Exception;
use Orbis\Exceptions\RateLimitException;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
        'Orbis\Http\Middleware\RateLimitMiddleware',
        // 'Illuminate\Cookie\Middleware\EncryptCookies',
        // 'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
        // 'Illuminate\Session\Middleware\StartSession',
        // 'Illuminate\View\Middleware\ShareErrorsFromSession',
        // 'Illuminate\Foundation\Http\Middleware\VerifyCsrfToken',
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // 'auth'       => 'Orbis\Http\Middleware\Authenticate',
        // 'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
        // 'guest'      => 'Orbis\Http\Middleware\RedirectIfAuthenticated',
    ];
}
