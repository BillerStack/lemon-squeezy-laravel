<?php

namespace BillerStack\LemonSqueezyLaravel\Commands;

use Illuminate\Console\Command;

class LemonSqueezyLaravelCommand extends Command
{
    public $signature = 'lemon-squeezy-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
