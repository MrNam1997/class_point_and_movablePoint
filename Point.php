<?php


class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x): void
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y): void
    {
        $this->y = $y;
    }

    public function getXY()
    {
        return array($this->getX(), $this->getY());
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function toString()
    {
        echo "(" . $this->getX() . "," . $this->getY() . ")";
    }

}