<?php

namespace RobinThijsen\ComponentForm\Commands;

use Illuminate\Console\Command;

class ComponentFormCommand extends Command
{
    public $signature = 'ComponentForm';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}