<?php

namespace Funaffect\LaravelPackages\Http\Middleware;

use Closure;

class RedirectIfReAuthenticated
{
    /**
     * 転送先.
     *
     * @var array
     */
    protected $redirect_url;

    /** 
     * コンストラクタ
     */
    public function __construct()
    {
        $this->redirect_url = config('packages.redirect_url');
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $session = $request->session()->get('re-auth');

        if (is_null($session) OR ! $session)
        {
            // セッションの保存
            $request->session()->flash('re-auth', url()->current()); // 飛ぼうとしているURLを保存

            return redirect($this->redirect_url);
        }

        return $next($request);
    }
}
