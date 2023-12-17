<?php

declare(strict_types=1);

namespace App\Config;

class Config
{
    public static function env(string $key): mixed
    {
        return $_ENV['NEATWEB_'.$key] ?? null;
    }
}