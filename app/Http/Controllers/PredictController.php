<?php

namespace App\Http\Controllers;

use App\Models\Predict;
use App\Models\RandomForestPrediction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Rubix\ML\Classifiers\RandomForest;
use Rubix\ML\Classifiers\ClassificationTree;

class PredictController extends Controller
{
    public function predict(Request $request)
    {
        $inputData = $request-> validate([
            "cycle"=> 'required|numeric',
            "x1"=> 'required|numeric',
            "x2"=> 'required|numeric',
            "x3"=> 'required|numeric',
            "x4"=> 'required|numeric',
            "x5"=> 'required|numeric',
            "x6"=> 'required|numeric',
            "y"=> 'required|numeric',
        ]);

        $randomforestResult = (new RandomForestPrediction('Real_Estate.csv', [[$inputData]]))->predictResult();

        print_r($randomforestResult);

        return redirect('/dashboard');
    }
}
