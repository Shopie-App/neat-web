<?php

declare(strict_types=1);

namespace App\Config;

class Config
{
    public static function env(string $key): ?string
    {
        $value = getenv('NEATWEB_'.$key);
        return $value !== false ? $value : null;
    }
}