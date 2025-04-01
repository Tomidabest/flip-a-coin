<?php

use App\CoinFlipper;

test('returns edge when second is divisible by 7', function () {
    Carbon\Carbon::setTestNow(Carbon\Carbon::now()->second(14));
    expect(CoinFlipper::flip())->toBe('the coin landed on its edge');
});

test('returns heads or tails when second is not divisible by 7', function () {
    Carbon\Carbon::setTestNow(Carbon\Carbon::now()->second(13));
    $result = CoinFlipper::flip();
    expect(['heads', 'tails'])->toContain($result);
});

