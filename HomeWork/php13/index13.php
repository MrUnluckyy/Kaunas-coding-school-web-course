
<?php
    class Person
    {
        public $firstName;
        public $lastName;

        public function sayHi()
        {
            echo "Hello, $this->firstName $this->lastName!<br>";
        }
    }

    $jonas = new Person();
    $jonas->firstName = 'Jonas';
    $jonas->lastName = 'Jonauskas';

    $tomas = new Person();
    $tomas->firstName = 'Tomas';
    $tomas->lastName = 'Tominskas';


    $jonas->sayHi();
    $tomas->sayHi();
?>
