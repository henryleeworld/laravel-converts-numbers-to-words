<?php

namespace App\Http\Controllers;

use Illuminate\Support\Number;

class NumbersController extends Controller
{
    public function convert() 
    {
        $locale = 'en';
        $integer = random_int(100000000, 200000000);
        $float = round((mt_rand() / mt_getrandmax()), 2);
        $amount = $integer + $float;
        echo __('The integer :integer is converted into English as: ', ['integer' => $integer]) . Number::spell($integer, locale: $locale) . PHP_EOL;
        echo __('The floating number :float is converted into English as: ', ['float' => $float]) . Number::spell($float, locale: $locale) . PHP_EOL;
        echo __('The amount of :amount converted into US dollars is: ', ['amount' => $amount]) . Number::currency($amount, in: 'USD', locale: $locale) . PHP_EOL;
    }
}
