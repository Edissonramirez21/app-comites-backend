<?php
namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance;
use Illuminate\Foundation\Http\Middleware\TrimStrings;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use App\Http\Middleware\EncryptCookies;
use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Middleware\TrustProxies;
use App\Http\Middleware\Cors; 
use Ilumminate\Http\Middleware\HandleCors;


class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        //  \App\Http\Middleware\TrustHost::class,
        // Otros middlewares
        \App\Http\Middleware\TrustProxies::class,
        \App\Http\Middleware\PreventRequestDuringMaintenance::class,
        \Ilumminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \Ilumminate\Foundation\Http\Middleware\ConvertingEmptyStringsToNull::class,
        \App\Http\Middleware\TrimStrings::class,
        \Ilumminate\Http\Middleware\HandleCors::class,
        \App\Http\Middleware\Cors::class,
    ];

   /**
    * The application route middleware groups.
    *
    * @var array 
    */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Ilumminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Ilumminate\Session\Middleware\StartSession::class,
            //\Ilumminate\Session\Middleware\AuthenticateSession::class,
            \Ilumminate\View\Middleware\ShareErrorsFromSession::class,
            \Ilumminate\Routing\Middleware\SubstituteBindings::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \App\Http\Middleware\Cors::class,
        ],

        'api' => [
            'throttle:api',
            \Ilumminate\Routing\Middleware\SubstituteBindings::class,
            \App\Http\Middleware\Cors::class,
        ],

    ];

     /**
    * The application's route middleware.
    *
    *These middleware may be assigned to groups or used individually.
    * @var array 
    */
    protected $routeMiddleware = [
        //  \App\Http\Middleware\TrustHost::class,
        // Otros middlewares
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Ilumminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Ilumminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Ilumminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Ilumminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Ilumminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Ilumminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Ilumminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'Cors' => \App\Http\Middleware\Cors::class,
    ];
}
