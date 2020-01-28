<?php

namespace App;

class Foobar
{
    public function foo($n)
    {
        if ($n % 3 === 0 ) {
            return "foo";
        }

    }

    public function bar($n)
    {
        if ($n % 5 === 0 ) {
            return "bar";
        }
    }

    public function foobar($n)
    {
        if ( $n % 15 === 0) {
            return "foobar";
        }
    }
}
