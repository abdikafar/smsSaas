<?php

namespace dacoto\LaravelWizardInstaller\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ToInstallMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return RedirectResponse|mixed
     */
    public function handle(Request $request, Closure $next)
    {
//        dd('test....');
        /*if (!$this->alreadyInstalled() && explode('/', $request->route() ? $request->route()->uri() : '')[0] !== 'install') {
            return redirect()->route('LaravelWizardInstaller::install.index');
        }*/
        return $next($request);
    }

    /**
     * If application is already installed.
     *
     * @return bool
     */
    public function alreadyInstalled(): bool
    {
        return file_exists(storage_path('installed'));
    }
}
