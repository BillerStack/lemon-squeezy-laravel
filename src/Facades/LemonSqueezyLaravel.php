<?php

namespace BillerStack\LemonSqueezyLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BillerStack\LemonSqueezyLaravel\LemonSqueezyLaravel
 */
class LemonSqueezyLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BillerStack\LemonSqueezyLaravel\LemonSqueezyLaravel::class;
    }
}
