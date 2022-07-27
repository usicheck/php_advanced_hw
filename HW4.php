<?php

class Color
{
    private int $red, $green, $blue;

    public function __construct($red, $green, $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;

    }
    public function mix(Color $color2): void
    {
        $r=(($this->setRed())+($color2->setRed()))/2;
        $g=(($this->setGreen())+($color2->setGreen()))/2;
        $b=(($this->setBlue())+($color2->setBlue()))/2;

        echo $r.' '. $g.' '.$b;
//        return $arr=[$r,$g,$b];
    }

    public function getRed():void
    {
        echo $this->setRed();
    }


    public function getGreen():void
    {
        echo $this->setGreen();
    }

    public function getBlue():void
    {
        echo $this->setBlue();
    }
    private function setRed(): int
    {
        if (($this->red) < 0 || ($this->red) > 255) {
            throw new Exception('Number must be in diapazon 0...255');
        }
        return $this->red;
    }
    private function setGreen(): int
    {
        if (($this->green)< 0 || ($this->green) > 255) {
            throw new Exception('Number must be in diapazon 0...255');
        }
        return $this->green;
    }

    private function setBlue():int
    {
        if (($this->blue) < 0 || ($this->blue) > 255) {
            throw new Exception('Number must be in diapazon 0...255');
        }
        return $this->blue;
    }

//    public function displayInfo(): void
//    {
//        echo "R: $this->red; G: $this->green; B: $this->blue.<br>";
//
//    }

}


$color1 = new Color(200, 200, 100);
$color2 = new Color(167, 112, 113);
$color3=$color1->mix($color2);
//$color3->r;
//$color3->getRed();


//
//$mixedColor = $color->mix(new Color(100, 100, 100));
//$mixedColor->getRed(); // 150
//$mixedColor->getGreen(); // 150
//$mixedColor->getBlue(); // 150
