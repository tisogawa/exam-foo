<?php

namespace Foo\Service;

class Foo
{
    public static function main(array $args = array())
    {
        var_dump(sprintf(
            '%s::%s',
            __CLASS__,
            __FUNCTION__
        ));
    }
}
