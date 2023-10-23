<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($num1, $operation, $num2)
    {
        $result = 0;
        switch ($operation) {
            case 'addition':
                $result = $num1 + $num2;
                break;
            case 'subtraction':
                $result = $num1 - $num2;
                break;
            case 'multiplication':
                $result = $num1 * $num2;
                break;
            case 'division':
                $result = $num1 / $num2;
                break;
            default:
                $result = "パラメータ2にはaddition,subtraction,multiplication,divisionのどれかを入力してください";
                break;
        }


        return view(
            'main.calc',
            [
                'result' => $result
            ]
        );
    }
}
