<?php

namespace App;

class Finobacci
{



    public function finobacci($n)
    {
        if ($n === 0){
            return 0;
        } else if ($n === 1){
            return 1;
        } else {
            return $this->finobacci($n - 1) + $this->finobacci($n - 2);
        }
    }


}
