<?php


namespace flowerphp\ClassesObserve;


class Observer
{

    private $nameClassForObserve;

    public $nameClass = "Not Observed";

    public function __construct($nameClassForObserve)
    {
        $this->nameClassForObserve = $nameClassForObserve;
    }

    protected function classExists()
    {
        return class_exists($this->nameClassForObserve);
    }

    public function observe()
    {
        if ($this->classExists())
        {
            $this->nameClass = get_class($this->nameClassForObserve);
        }
    }

}