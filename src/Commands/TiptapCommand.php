<?php

namespace Michaelueber\Tiptap\Commands;

use Illuminate\Console\Command;

class TiptapCommand extends Command
{
    public $signature = 'tiptap';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
