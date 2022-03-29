<?php

namespace Bregananta\ClosureTable\Commands;

use Illuminate\Console\Command;

class ClosureTableCommand extends Command
{
    public $signature = 'closure-table';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
