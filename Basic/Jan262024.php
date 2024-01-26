<?php
function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}

function vd ($input) {
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
}

function pa ($array) {
    foreach($array as $item) {
        echo "<p>$item</p>";
    }
}
$names = array("Ali","Raza","Saleem");
// $names = ["Ali","Raza","Saleem"];

pr($names);
vd($names);

echo "<p>" . $names[0] . "</p>";

$names[1] = "Raza Ali Khan";
pr($names);

// foreach($names as $index=>$item) {
//     echo "<p>Hi $item you are at $index</p>";
// }

array_push($names,"Hussain","Rafay","Rayan");
// pa($names);
pr($names);
array_pop($names);
pr($names);

array_unshift($names,"Sadaf","Javeria");
pr($names);
array_shift($names);
pr($names);

array_splice($names,1,3);
pr($names);

// array_splice($names,1,0,"Huzaifa");
// array_splice($names,2,0,"Arbaz");
// array_splice($names,3,0,"Basit");
array_splice($names,1,0,["Huzaifa","Arbaz","Basit"]);
pr($names);

$student = array("name"=>"Javeria Shafique", "gender"=>"Female", "dob"=>'25-Oct-2003');
pr($student);

echo "<p>Dear ".$student['name']." you are ".$student['gender'] ." and your birthday is ".$student['dob']."</p>";


$students = [
    "Std001" => ["name"=>"Hussain Khanani","gender"=>"Male","dob"=>"30-May-2007"],
    "Std002" => ["name"=>"Abdul Rafay","gender"=>"Male","dob"=>"05-Nov-2007"],
    "Std003" => ["name"=>"Rayan Shahid","gender"=>"Male","dob"=>"07-Aug-2006"],
    "Std004" => ["name"=>"Arbaaz Hussain","gender"=>"Male","dob"=>"31-Aug-2005"],
    "Std005" => ["name"=>"Muhammad Huzaifa Khan","gender"=>"Male","dob"=>"04-Sep-2005"],
    "Std006" => ["name"=>"Sadaf Irshad","gender"=>"Female","dob"=>"17-Dec-2001"],
    "Std007" => ["name"=>"Javeria Shafique","gender"=>"Female","dob"=>"25-Oct-2003"],
    "Std008" => ["name"=>"Muhammad Basit","gender"=>"Male","dob"=>"30-Jan-2005"],
    "Std009" => ["name"=>"Junaid Khan","gender"=>"Male","dob"=>"16-Nov-2003"],
    "Std010" => ["name"=>"Muhammad Uzair","gender"=>"Male","dob"=>"28-Jun-2003"],
    "Std011" => ["name"=>"Abdul Rehman","gender"=>"Male","dob"=>"05-Jun-2005"]
];

pr($students);
foreach($students as $id=>$student) {
    echo "<p>Dear ".$student['name']." you are ".$student['gender'] ." and your birthday is ".$student['dob']."</p>";
}

pr($names);
sort($names);
pr($names);
rsort($names);
pr($names);

pr($student);
ksort($student);
pr($student);

pr($student);
krsort($student);
pr($student);

pr($student);
asort($student);
pr($student);

pr($student);
arsort($student);
pr($student);

$x = 75;
$name = "James";
$y = 22.7;
  
function myfunction() {
  echo "<pre>";
  print_r($GLOBALS);
  echo "</pre>";
  
  echo $GLOBALS['name'];
}

myfunction()
?>  