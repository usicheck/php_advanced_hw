<?php

class Color
{
    private float $red, $green, $blue;

    public function __construct($red, $green, $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;

    }

    public function mix(Color $color2): object
    {
        $r = (($this->setRed()) + ($color2->setRed())) / 2;
        $g = (($this->setGreen()) + ($color2->setGreen())) / 2;
        $b = (($this->setBlue()) + ($color2->setBlue())) / 2;

        return new Color ($r, $g, $b);

    }

    public function getRed(): void
    {
        echo $this->setRed();
    }


    public function getGreen(): void
    {
        echo $this->setGreen();
    }

    public function getBlue(): void
    {
        echo $this->setBlue();
    }

    private function setRed(): float
    {
        if (($this->red) < 0 || ($this->red) > 255) {
            try {
                throw new Exception("Номер кольору має бути у діапазоні 0...255.");
            } catch (Exception $e) {
                echo $e->getMessage() . '<br>';
            }
        } else {
            $red = $this->red;
        }
        return $red;
    }

    private function setGreen(): float
    {
        if (($this->green) < 0 || ($this->green) > 255) {
            try {
                throw new Exception("Номер кольору має бути у діапазоні 0...255.");
            } catch (Exception $e) {
                echo $e->getMessage() . '<br>';
            }
        } else {
            $green = $this->green;
        }
        return $green;
    }

    private function setBlue(): float
    {
        if (($this->blue) < 0 || ($this->blue) > 255) {
            try {
                throw new Exception("Номер кольору має бути у діапазоні 0...255.");
            } catch (Exception $e) {
                echo $e->getMessage() . '<br>';
            }
        } else {
            $blue = $this->blue;
        }
        return $blue;
    }

    public function equals($color1, $color2): bool
    {
        if ($color1 == $color2) {
            return true;
        } else {
            return false;
        }
    }

    public static function random($colorRandom): object
    {
        $colorRandom->red = random_int(0, 255);
        $colorRandom->green = random_int(0, 255);
        $colorRandom->blue = random_int(0, 255);

        return $colorRandom;
    }

}

$color1 = new Color(200, 100, 100);
echo 'Перший колір в RGB: ' . '<br>';
echo $color1->getRed() . '<br>';
echo $color1->getGreen() . '<br>';
echo $color1->getBlue() . '<br>';

$color2 = new Color(104, 97, 45);
echo 'Другий колір в RGB: ' . '<br>';
echo $color2->getRed() . '<br>';
echo $color2->getGreen() . '<br>';
echo $color2->getBlue() . '<br>';

$colorMixed = $color1->mix($color2);
echo 'Мікс кольорів (середнє значення) в RGB: ' . '<br>';
echo $colorMixed->getRed() . '<br>';
echo $colorMixed->getGreen() . '<br>';
echo $colorMixed->getBlue() . '<br>';

$colorRandom = new Color(0, 0, 0);
echo 'Рандомне значення кольорів в RGB: ' . '<br>';

print_r($colorRandom->random($colorRandom));

echo '<br>'.'Чи однакові значення мають об\'єкти: ' . '<br>';
var_dump ($colorMixed->equals($color1, $color2));
