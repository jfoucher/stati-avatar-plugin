<?php

namespace Stati\Plugin\Avatar\Liquid\Tag;

use Liquid\AbstractTag;
use Liquid\Context;

class Avatar extends AbstractTag
{
    public function render(Context $context)
    {
        return 'avatar';
    }
}