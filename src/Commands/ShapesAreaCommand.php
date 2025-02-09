<?php

namespace Spatie\ShapesArea\Commands;

use Illuminate\Console\Command;

class ShapesAreaCommand extends Command
{
    public $signature = 'shapes-area';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
