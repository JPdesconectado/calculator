<?php

namespace IMC\Calculator\Http\Controllers;

use Illuminate\Http\Request;
use IMC\Calculator\Models\BmiCategory;

class CalculatorController extends Controller
{

    public function create(){
        return view('imc::imc_form');
    }

    public function calculate(Request $request){

        $height = $request->height * $request->height;
        $weight = $request->weight;

        $calc   = round(floatval($weight) / floatval($height), 2);


        $category = BmiCategory::orWhere
        ([
            ['start_interval', ">=", $calc],
            ['end_interval', "<", $calc]
        ])->orWhere([
            ['start_interval', ">", $calc],
            ['end_interval', "<", $calc]
        ])->orWhere([
            ['end_interval', ">", $calc]
        ])
        ->first();
        dd($category->title);
    }
}
