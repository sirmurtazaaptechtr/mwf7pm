<?php
class Employee {
    const LEAVING_MESSAGE = "Thank you for visiting Aptech Computer Education!";

    public $name;
    public $age;

    public function set_name ($name) {
        $this->name = $name;
    }
    public function get_name () {
        return $this->name;
    }

    public function set_age ($age) {
        $this->age = $age;
    }
    public function get_age () {
        return $this->age;
    }

    public function showBio()  {
        echo "<p>Dear $this->name, you are $this->age years old.</p>";        
    }
    public function byebye() {
        echo self::LEAVING_MESSAGE;
    }
}

class FullTimeEmployee extends Employee {
    private $monthlysalary;    

    public function set_salary ($salary) {
        $this->monthlysalary = $salary;
    }
    public function get_salary () {
        return $this->monthlysalary;
    }

    public function showBio()  {
        echo "<p>Dear $this->name, you are $this->age years old and your salary is $ $this->monthlysalary /=.</p>";        
    }


}

$emp1 = new FullTimeEmployee();
$emp1->set_name("Ali Raza");
$emp1->set_age(23);
$emp1->set_salary(24000);
$emp1->showBio();
$emp1->byebye();

echo "<p>" . Employee::LEAVING_MESSAGE . "</p>";