<?php 


abstract class AbstractOne
{
    abstract public function methodOne();

    abstract public function methodTwo($sumOne, $sumTwo);

    abstract public function methodTree($sums);
}


class ChildAbstractOne extends AbstractOne 
{
    public $sumOne;

    public $sumTwo;

    public $sums;
    public function methodOne()
    {
        echo 'This is method one.';
    }

    public function methodTwo($sumOne,$sumTwo)
    {
        $sums  =  $this->sumOne + $this->sumTwo;

        echo $sums;
    }

    public function methodTree($sums)
    {
        echo $sums.'is all sum';
    }

}

$objectOne = new ChildAbstractOne();
$objectOne->methodOne();