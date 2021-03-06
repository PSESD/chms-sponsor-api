<?php
/**
 * Clock Hour Management System - Provider Provider
 *
 * @copyright Copyright (c) 2016 Puget Sound Educational Service District
 * @license   Proprietary
 */
namespace CHMS\ProviderHub\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Factory as Auth;
use CHMS\Common\Auth\UniversalGuard;

class Authenticate
{
    /**
     * The authentication guard factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard === '*') {
            $guard = null;
            $defaultGuard = $this->auth->guard();
            if ($defaultGuard instanceof UniversalGuard) {
                $guard = $defaultGuard->universalUserLogin($this->auth);
            }
        }

        if ($guard === false || $this->auth->guard($guard)->guest()) {
            return response('Unauthorized.', 401);
        }
        if ($guard !== null) {
            $this->auth->setDefaultDriver($guard);
        }
        return $next($request);
    }
}
