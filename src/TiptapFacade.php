<?php

namespace Michaelueber\Tiptap;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Michaelueber\Tiptap\Tiptap
 */
class TiptapFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tiptap';
    }
}
