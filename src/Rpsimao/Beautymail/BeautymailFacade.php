<?php

namespace Rpsimao\Beautymail;

use Illuminate\Support\Facades\Facade;

class BeautymailFacade extends Facade
{
    /**
     * The name of the binding in the IoC container.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Rpsimao\Beautymail\Beautymail';
    }
}
