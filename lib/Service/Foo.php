<?php

namespace Foo\Service;

class Foo
{
    public static function main(array $args = array())
    {
        var_dump(sprintf(
            '%s::%s::%s',
            __DIR__,
            __FILE__, __LINE__
        ));
    }
}
