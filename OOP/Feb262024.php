<?php 
class Student {
    // properties
    private $id;
    public $name;
    public $age;
    public $gender;
    public $email;

    // Constructor
    function __construct($enrollment_number) {
        $this->id = $enrollment_number;        
    }
    
    // behaviors
    public function set_id ($enrollment_number) {
        $this->id = $enrollment_number;
    }

    public function get_id () {
        return $this->id;
    }

    public function  display_info() {
        echo "<ul>";
        echo "<li>ID : " . $this->id . "</li>";        
        echo "<li>Name : " . $this->name . "</li>";        
        echo "<li>Age : " . $this->age . "</li>";        
        echo "<li>Gender : " . $this->gender . "</li>";        
        echo "<li>Email : " . $this->email . "</li>";
        echo "</ul>";
    }

    // Destructor
    function __destruct() {
        echo "<p>Bye Bye! " . $this->name . "</p>";       
    }
}

$s1 = new Student("Student001");
$s1->name = "Hussain";
$s1->age = 17;
$s1->gender = "male";
$s1->email = "khananihussain41@gmail.com";

$s2 = new Student("Student008");
$s2->name = "Javeria";
$s2->age = 20;
$s2->gender = "female";
$s2->email = "javerias775@gmail.com";

$s3 = new Student("Student013");
$s3->name = "Basit";
$s3->set_id("Student010");

$s1->display_info();
$s2->display_info();
$s3->display_info();