<?php

namespace App;

class CoinFlipper
{
    public static function flip(): string
    {
        $second = (int) date('s');

        if ($second % 7 === 0) {
            return 'the coin landed on its edge';
        }

        return rand(0, 1) === 0 ? 'heads' : 'tails';
    }
}