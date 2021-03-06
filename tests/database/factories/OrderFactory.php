<?php

namespace GeneaLabs\CashierPaypal\Database\Factories;

use Faker\Generator as Faker;
use GeneaLabs\CashierPaypal\Order\Order;
use GeneaLabs\CashierPaypal\Tests\Fixtures\User;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'owner_id' => 1,
        'owner_type' => User::class,
        'currency' => 'EUR',
        'subtotal' => 123,
        'tax' => 0,
        'total' => 123,
        'total_due' => 123,
        'number' => '2018-0000-0001',
        'credit_used' => 0,
        'balance_before' => 0,
    ];
});
