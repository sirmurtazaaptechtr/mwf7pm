<?php
    class Employee {
        private $empid;
        private $name;
        private $dob;
        private $email;

        function __construct($employeeID) {
            $this->empid = $employeeID;            
        }

        public function get_empid () {
            return $this->empid;
        }

        public function set_name ($name) {
            $this->name = $name;
        }
        public function get_name () {
            return $this->name;
        }

        public function set_dob ($dob) {
            $this->dob = $dob;
        }
        public function get_dob () {
            return $this->dob;
        } 

        public function set_email ($email) {
            $this->email = $email;
        }
        public function get_email () {
            return $this->email;
        } 
        
    }

    class PEmployee extends Employee {
        private $monthly_salary;

        public function set_monthly_salary ($monthly_salary) {
            $this->monthly_salary = $monthly_salary;
        }
        public function get_monthly_salary () {
            return $this->monthly_salary;
        } 

    }

    class TEmployee extends Employee{
        private $hourly_rate;

        public function set_hourly_rate ($hourly_rate) {
            $this->hourly_rate = $hourly_rate;
        }
        public function get_hourly_rate () {
            return $this->hourly_rate;
        } 

    }

    $te1 = new TEmployee("emp001");

    $te1->set_hourly_rate(1200);
    $te1->set_name("Abdul Rafay");
    $te1->set_dob("5-Nov-2007");
    $te1->set_email("rafaylakhani555@gmail.com");
    
    $pe1 = new PEmployee("emp002");

    $pe1->set_monthly_salary(135200);
    $pe1->set_name("Rayyan Shahid");
    $pe1->set_dob("7-Aug-2006");
    $pe1->set_email("rayyanshahid786@gmail.com");

    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <li><b>ID : </b><?php echo $te1->get_empid(); ?></li>
            <li><b>NAME : </b><?php echo $te1->get_name(); ?></li>
            <li><b>DOB : </b><?php echo $te1->get_dob(); ?></li>
            <li><b>EMAIL : </b><?php echo $te1->get_email(); ?></li>
            <li><b>HOUR RATE (PKR): </b><?php echo $te1->get_hourly_rate(); ?>/=</li>
        </ul>
        <ul>
            <li><b>ID : </b><?php echo $pe1->get_empid(); ?></li>
            <li><b>NAME : </b><?php echo $pe1->get_name(); ?></li>
            <li><b>DOB : </b><?php echo $pe1->get_dob(); ?></li>
            <li><b>EMAIL : </b><?php echo $pe1->get_email(); ?></li>
            <li><b>MONTH SALARY (PKR): </b><?php echo $pe1->get_monthly_salary(); ?>/=</li>
        </ul>
        
    </body>
    </html>