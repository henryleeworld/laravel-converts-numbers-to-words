<?php

namespace App\Http\Controllers;

use Rmunate\Utilities\SpellNumber;

class NumbersController extends Controller
{
    public function convert() 
    {
        $locale = 'en';
        $integer = random_int(100000000, 200000000);
        $float = round((mt_rand() / mt_getrandmax()), 2);
        $amount = $integer + $float;
        echo '整數：' . $integer . '，轉換成英文說法為：' . SpellNumber::value($integer)->locale($locale)->toLetters() . PHP_EOL;
        echo '浮點數：' . $float . '，轉換成英文說法為：' . SpellNumber::value($float)->locale($locale)->toLetters() . PHP_EOL;
        echo '金額：' . $amount . '，轉換成英文金融說法為：' . SpellNumber::value($amount)->locale($locale)->currency('Dollars')->fraction('cents')->toMoney() . PHP_EOL;
    }
}
