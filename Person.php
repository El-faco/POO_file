<?php


class Person
{
    public $first_name;
    public $last_name;
    public $age;
    private static $totalperson = 0;

    public function __construct($first_name,$last_name,$age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;

        static::$totalperson++;
    }

     public static function getTotalperson()
     {
         return static::$totalperson;
     }

    public function fullname()
         {
            return $this->first_name. ' ' . $this->last_name;
        }


        public function getAge()
        {
            return $this->age * 365;
        }
}


$zahirou = new Person('Zahirou', 'Kaled', 12);
$abdou = new Person('Abdou', 'TCHAGBA', 18);
$DAZ = new Person('DAZ', 'DERMANN', 23);

echo Person::getTotalperson(). PHP_EOL;