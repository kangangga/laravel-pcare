<?php

namespace Kangangga\Pcare\Commands;

use Illuminate\Console\Command;

class PcareCommand extends Command
{
    public $signature = 'laravel-pcare';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
