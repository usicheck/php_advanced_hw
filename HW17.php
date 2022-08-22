<?php
interface BirdEat
{
    public function eat();
}
interface BirdFly {
    public function fly($fly);
}

class Swallow implements BirdEat, BirdFly //ласточка
{
    public function eat() {}
    public function fly($fly) {}
}

class Ostrich implements BirdEat, BirdFly //страус
{
    public function eat() {}

    public function fly($fly) {
        if ($fly === 'not fly'){
            Throw new Exception('It\'s jump, not fly');/* exception */ }
    }
}
try {
    $ostrich = new Ostrich();
    $ostrich->fly('not fly');
} catch (Exception $exception) {
    var_dump ($exception->getMessage());
}
