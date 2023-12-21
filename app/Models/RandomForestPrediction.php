<?php

namespace App\Models;

use Rubix\ML\Classifiers\RandomForest;
use Rubix\ML\Datasets\Labeled;
use Rubix\ML\Datasets\Unlabeled;

use Rubix\ML\Classifiers\ClassificationTree;

class RandomForestPrediction
{
    public $filename, $input, $samples=[], $targets=[];

    public function __construct($filename, $input)
    {
        $this->filename = $filename;
        $this->input = $input;
    }

    public function predictResult()
    {
        $this->readFile();

        $model = new RandomForest(new ClassificationTree(10), 300, 0.1, true);

        $dataset = new Labeled($this->samples, $this->targets);
        $model->train($dataset);

        $inputDataset = new Unlabeled($this->input);

        return $model->predict($inputDataset);
    }

    public function readFile()
    {
        $file = fopen($this->filename, 'r');
        $row = 1;
        $tempArray = [];

        if($file !== false)
        {
            while (($data = fgetcsv($file)) !== false)
            {
                if($row != 1)
                {
                    $num = count($data);

                     for($c=0; $c<$num; $c++)
                     {
                        if($c<=7)
                        {
                            array_push($tempArray, $data[$c]);
                        }
                        else if($c == 8)
                        {
                            array_push($this->targets, $data[$c]);
                        }
                    }

                    array_push($this->samples, $tempArray);
                    $tempArray=[];
                }
                $row ++;
            }
        }
        fclose($file);
    }
}
