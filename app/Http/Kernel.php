<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \App\Http\Middleware\SecurityHeaders::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \App\Http\Middleware\Locale::class,
            \Laravel\Passport\Http\Middleware\CreateFreshApiToken::class,
        ],

        'admin' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'admin.auth' => \App\Http\Middleware\Admin\Authenticate::class,
        'admin.guest' => \App\Http\Middleware\Admin\RedirectIfAuthenticated::class,
        'admin.has_role.super_user' => \App\Http\Middleware\Admin\HasRoleSuperUser::class,
        'admin.has_role.site_admin' => \App\Http\Middleware\Admin\HasRoleSiteAdmin::class,
        'admin.values' => \App\Http\Middleware\Admin\SetDefaultValues::class,
        'user.auth' => \App\Http\Middleware\User\Authenticate::class,
        'user.guest' => \App\Http\Middleware\User\RedirectIfAuthenticated::class,
        'user.values' => \App\Http\Middleware\User\SetDefaultValues::class,
    ];
}
