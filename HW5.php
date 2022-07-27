<?php

class User
{
    public mixed $id;
    private mixed $password;
    private mixed $email;

    public function __construct($id, $password, $email)
    {
        $this->id = $id;
        $this->password = $password;
        $this->email = $email;
    }

    public function getUserData(): void
    {
        if (!is_numeric($this->id) || ((strlen($this->password)) > 9)) {
            try {
                throw new Exception("ID не є числовим або password більше 8 символів.");
            } catch (Exception $e) {
                echo $e->getMessage() . '<br>';
                echo "Вийняток був створений на рядку: " . $e->getLine() . '<br>';
                echo "Вийняток був створений у файлі: " . $e->getFile() . '<br>';
            }
        } else {
            echo "$this->id; $this->password; $this->email ";
        }
    }

}

$obj = new User(122, 'орhgfhаd', '123tyu');
$obj->getUserData();
