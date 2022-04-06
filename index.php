<?php
declare(strict_types=1);

class Color
{
    private $red ;
    private $green;
    private $blue;

    public function __construct(int $red,int $green,int $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;

    }



    private function setRed(int $red): void
    {
        if (!$this->isValide($red))
        {
            throw new Exception("not a valid color");
        }
        $this->red = $red;
    }

    public function getRed():int
    {
        return $this->red;
    }
    private function setGreen(int $green): void
    {
        if (!$this->isValide($green))
        {
            throw new Exception("not a valid number");
        }
        $this->green = $green;
    }

    public function getGreen():int
    {
        return $this->green;
    }
    private function setBlue(int $blue): void
    {
        if (!$this->isValide($blue))
        {
            throw new Exception("not a valid number");
        }
        $this->blue = $blue;
    }

    public function getBlue():int
    {
        return $this->blue;
    }
    public function Equals(Color $color): bool
    {

          return $this == $color;

    }
    public function mix(Color $color)
    {
        return new Color(
            intval (($this->red + $color->red) / 2),
            intval (($this->green + $color->green) / 2),
                intval (($this->blue + $color->blue) / 2),
        );
    }

    private function isValide (int $value):bool
    {
       return $value < 0 || $value > 255;
    }
    public static function random()
    {
        return new Color(
            rand(0,255),
            rand(0,255),
            rand(0,255)
        );
    }


}

$color1 = Color::random();
$color2 = Color::random();
$color3 = $color1->mix($color2);

var_dump($color3);

