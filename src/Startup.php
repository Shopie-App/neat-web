<?php

declare(strict_types=1);

namespace App;

use Shopie\DiContainer\Contracts\ServiceContainerInterface;
use Shopie\DiContainer\Contracts\ServiceProviderInterface;

class Startup
{
    public static function configuredServices(
        ServiceContainerInterface $services,
        ServiceProviderInterface $provider
    ): void
    {
    }
}