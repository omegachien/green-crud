<?php
/**
 * Created by PhpStorm.
 * User: jctan
 * Date: 13/04/2017
 * Time: 15:54
 */

namespace GreenCrud\Provider;


use GreenCrud\Console\BootstrapCommand;
use Illuminate\Support\ServiceProvider;

class GreenCrudServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                BootstrapCommand::class
            ]);
        }
    }

    public function register()
    {

    }
}