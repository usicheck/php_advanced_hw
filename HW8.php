<?php

class User
{
    private string $name = 'Yasia';
    private int $age = 28;
    private string $email = 'usicheck@gmail.com';


    private function setName(): void
    {
        echo $this->name;
    }

    private function setAge(): void
    {
        echo $this->age;
    }

    public function getAll(): void
    {
        echo $this->name . ' ' . $this->age . ' ' . $this->email;
    }

    public function __call($name, $args)
    {
        if (method_exists($this, $name)) {
            return call_user_func_array(array($this, $name), $args);
        } else {
            try {
                throw new Exception("Такого методу не існує.");
            } catch (Exception $e) {
                echo $e->getMessage() . '<br>';
            }
        }
        return $e->getFile();
    }

    public function __set($name, $value)
    {
        return $this->name = $value;
    }

    public function __get($name)
    {
        echo $this->__set($this->name, 'Vasya');
    }
}
//    public function getName(){
//        return $this->name;
//    }
//}

$user = new User();

//echo $user->setName() . ' — ім\'я з приватного методу;' . '<br>';
//echo $user->setAge() . ' — вік з приватного методу;' . '<br>';

//echo $user->getAll() . ' — ім\'я, вік, email;' . '<br>';

//echo $user->setEmail();

echo $user->name;
