<?php


class Matrix
{
    private array $arr;

    public function __construct(array $arr)
    {
        $this->arr = $arr;
    }

    function add(Matrix $matrix){
        for ($i = 0; $i < count($this->arr); $i++){
            for($j = 0; $j < count($this->arr[$i]); $j++){
                $this->arr[$i][$j] += $matrix->toArray()[$i][$j];
            }
        }
    }

    function diff(Matrix $matrix){
        for ($i = 0; $i < count($this->arr); $i++){
            for($j = 0; $j < count($this->arr[$i]); $j++){
                $this->arr[$i][$j] -= $matrix->toArray()[$i][$j];
            }
        }
    }

    function mult(Matrix $matrix){
        for ($i = 0; $i < count($this->arr); $i++){
            for($j = 0; $j < count($this->arr[$i]); $j++){
                $this->arr[$i][$j] -= $matrix->toArray()[$i][$j];
            }
        }
    }

    function toArray(){
        return $this->arr;
    }
}