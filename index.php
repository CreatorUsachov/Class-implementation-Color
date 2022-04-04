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



    public function setRed(int $red): void
    {
        if ($red > 255)
        {
            throw new Exception("not a valid number");
        }
        $this->red = $red;
    }

    public function getRed():int
    {
        return $this->red;
    }
    public function setGreen(int $green): void
    {
        if ($green > 255)
        {
            throw new Exception("not a valid number");
        }
        $this->green = $green;
    }

    public function getGreen():int
    {
        return $this->green;
    }
    public function setBlue(int $blue): void
    {
        if ($blue > 255)
        {
            throw new Exception("not a valid number");
        }
        $this->blue = $blue;
    }

    public function getBlue():int
    {
        return $this->blue;
    }
    public function isEquals(Color $rgb): bool
    {
        return $this == $rgb;

    }
    public function mix(int $rgb)
    {


    }




}

$rgb =  new Color  (200, 200, 200);
$rgb1 = new Color(200, 200, 200);

//echo $color->mix();
//echo $color->isEquals();