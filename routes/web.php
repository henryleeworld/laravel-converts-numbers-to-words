<?php

use App\Http\Controllers\NumbersController;
use Illuminate\Support\Facades\Route;

Route::get('numbers/convert/', [NumbersController::class, 'convert']);
