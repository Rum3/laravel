<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('calculator');
});

Route::post('/calculate', function (Request $request) {
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $operator = $request->input('operator');

    if ($operator == 'add') {
        $result = $num1 + $num2;
    } elseif ($operator == 'subtract') {
        $result = $num1 - $num2;
    } elseif ($operator == 'multiply') {
        $result = $num1 * $num2;
    } elseif ($operator == 'divide') {
        $result = $num1 / $num2;
    }

    return view('calculator', compact('result'));
});