<?php

namespace SaintSystems\OData;

use SaintSystems\OData\Core\Enum;

class QueryOptions extends Enum
{
    public const INCLUDE_COUNT = 1;

    public const INCLUDE_REF = 2;

    public function __toString()
    {
        return $this->value();
    }
}
