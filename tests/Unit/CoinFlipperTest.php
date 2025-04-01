<?php

use App\CoinFlipper;

test('coin flip should never return null', function () {
    $result = CoinFlipper::flip();
    expect($result)->not()->toBeNull();
});

test('returns heads or tails when second is not divisible by 7', function (): void {
    Carbon\Carbon::setTestNow(Carbon\Carbon::now()->second(13));
    $result = CoinFlipper::flip();
    expect(['heads', 'tails'])->toContain($result);
});
