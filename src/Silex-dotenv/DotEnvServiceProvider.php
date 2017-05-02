<?php

namespace gravatalonga\silexdotenv;

use Pimple\ServiceProviderInterface;
use Pimple\Container;
use Dotenv\Dotenv;

class DotEnvServiceProvider extends ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['dotenv'] = function ($app) {
            $dotenv = new Dotenv($app['path.base']);
            return $dotenv->load();
        };
    }
}
