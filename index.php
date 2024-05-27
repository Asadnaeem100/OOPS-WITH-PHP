<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Oops</title>
</head>
<body>
    <h1>This is <ins> OOPs (Object Oriented Programming style) </ins>  Tutorial:-</h1>
    <h2>What is Oops?</h2>
    <marquee style="background-color: #438ed9;"><h3>OOPs is about creating Classes and Objects. Class serves as a template and multiple Objects 
    can be created using a Class.</h3></marquee>
    <br>
    <h2>What are Classes and Objects?</h2>
    <p>Classes are template for creating Objects.</p>
    <p>If car is a Class then Honda City and Honda Civic are two Different Objects.</p>
    <h2>Why OOPs</h2>
    <p>OOPs makes it easy to keep the code (DRY).</p>
    <p>DRY - Do not Repeat Youself - the code written by the programmer should be reusable.</p>

    <hr>
    
    <?php

    class Player{
        //Properties

        public $p_name;
        public $speed = 5;
        public $p_speed = 10;

        //Methods

        function set_name($name){
            $this->p_name = $name;
        }
        function get_name(){
            return $this->p_name;
        }
    }
    
    echo "Let's Understand OOPs using GTA Vice city";

    $player1 = new Player();
    $player1->set_name("Asad Naeem");
    echo $player1->get_name();

    echo "<br>";

    $player2 = new Player();
    $player2->set_name("Ahmad Naeem");
    echo $player2->get_name();

    echo "<br>";

    $player3 = new Player();
    $player3->set_name("Mubashir Naeem");
    echo $player3->get_name();

    echo "<br>";

    $player4 = new Player();
    $player4->set_name("Abdul Hadi");
    echo $player4->get_name();

    echo "<br>";

    echo $player4->speed;

    echo "<br>";

    echo $player3->p_speed;

    echo "<br>";

    $player5 = new Player();
    $player5->set_name("Naeem SB");
    echo $player5->get_name();
    
    echo "<br>";

    $player6 = new Player();
    $player6->set_name("Asad Naeem");
    echo $player6->get_name();

    echo "<hr>";

    // We make a new Class and Also new Data

    class students{
        // Properties
        public $student_name;
        public $class;

        // Methods

        function set_names($name){
            $this->student_name = $name;
        }
        function set_class($class){
            $this->class = $class;
        }

        function get_names(){
            return $this->student_name;
        }
        function get_class(){
            return $this->class;
        }
    }

    $student1 = new students();

    $student1->set_names("Asad Naeem");

    echo $student1->get_names();

    echo "<br>";

    $student1->set_class("Matric");

    echo $student1->get_class();

    echo "<br>";

    $student2 = new students();

    $student2->set_names("Ahmad Naeem");

    echo $student2->get_names();

    echo "<br>";

    $student3 = new students();

    $student3->set_names("Mubashir Naeem");

    echo $student3->get_names();


    echo "<br>";

    class student{
        //Properties
        public $student_name;
        public $student_age;

        //Methods
        function set_student_name($name){
            $this->student_name = $name;
        }
        function get_student_name(){
            return $this->student_name;
        }
    }

    $First_Student = new student();
    $First_Student->set_student_name("Asad Naeem");

    echo $First_Student->get_student_name();

    echo "<br>";

    class city{
        //Properties
        public $city_name;
        public $city_country;
        
        //Methods
        function set_city($name){
            $this->city_name = $name;
        }
        function get_city(){
            return $this->city_name;
        }
    }

    $city = new city();

    $city->set_city("Faisalabad");

    echo $city->get_city();
    
    ?>
</body>
</html>