<?php

trait Trait1
{
    public function test(): int
    {
        return 1;
    }
}

trait Trait2
{
    public function test(): int
    {
        return 2;
    }
}

trait Trait3
{
    public function test(): int
    {
        return 3;
    }
}

class Test
{
    use Trait1, Trait2, Trait3 {
        Trait1::test insteadof Trait2;
        Trait1::test insteadof Trait3;
        Trait2::test as testReturn2;
        Trait3::test as testReturn3;
    }

    public function getSum()
    {
        echo $this->test() + $this->testReturn2() + $this->testReturn3() . PHP_EOL;
    }
}

$obj = new Test;
$obj->getSum();
