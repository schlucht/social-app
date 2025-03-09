<?php

namespace App\Helpers;

class Helpers
{
    public static function assets(string $path): string
    {
        return config('app.https') ? secure_asset($path) : asset($path);
    }
}
