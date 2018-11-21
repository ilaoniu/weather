<?php
/**
 * Created by PhpStorm.
 * User: niu
 * Date: 2018/11/21
 * Time: 14:14
 */

namespace Ilaoniu\Weather;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function () {
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }

}