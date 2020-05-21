<?php

namespace Funaffect\LaravelPackages\Providers;

use Illuminate\Support\ServiceProvider;
use Funaffect\LaravelPackages\Http\Validators\ExtensionValidator;
use Funaffect\LaravelPackages\Http\Middleware\AddResponseHeaders;
use Funaffect\LaravelPackages\Http\Middleware\ConvertDot;
use Funaffect\LaravelPackages\Http\Middleware\ConvertOneByte;
use Funaffect\LaravelPackages\Http\Middleware\ConvertKanjiNumber;

class StartupServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Config
        $this->mergeConfigFor(__DIR__.'/../../config/app.php', 'app');
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dump('Funaffect Laravel Extension Package!');

        // Config
        $this->publishes([
            __DIR__.'/../../config/packages.php' => config_path('packages.php'),
        ], 'packages');


        // Validation Extension
        $this->app['validator']->resolver(function($translator, $data, $rules, $messages, $attribute) {
            return new ExtensionValidator($translator, $data, $rules, $messages, $attribute);
        });

        $this->app['validator']->replacer('max_length', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':max', $parameters[0], $message);
        });

        $this->app['validator']->replacer('min_length', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':min', $parameters[0], $message);
        });

        $this->publishes([
            __DIR__.'/../Rules/CurrentPassword.php' => app_path('Http/Rules/CurrentPassword.php'),
        ], 'packages');


        // Language
        $this->publishes([
            __DIR__.'/../../resouces/lang/' => resource_path('lang'),
        ], 'packages');


        // Middleware
        $this->app['router']->pushMiddlewareToGroup('web', ConvertDot::class);
        $this->app['router']->pushMiddlewareToGroup('web', ConvertOneByte::class);
        $this->app['router']->pushMiddlewareToGroup('web', ConvertKanjiNumber::class);
        $this->app['router']->pushMiddlewareToGroup('web', AddResponseHeaders::class);
    }


    /**
     * Merge the given configuration with the existing configuration.
     *
     * @param  string  $path
     * @param  string  $key
     * @return void
     */
    protected function mergeConfigFor($path, $key)
    {
        if (! ($this->app instanceof CachesConfiguration && $this->app->configurationIsCached())) {
            $this->app['config']->set($key, array_merge(
                $this->app['config']->get($key, []), require $path
            ));
        }
    }

}
