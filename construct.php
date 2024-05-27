<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contructor Function</title>
</head>
<body>

    <h1>OOPs with Construct() Function</h1>
    <h3>OOPs k ander aik <ins><i> function </ins></i> ka istmal kiya jata hay jisko <ins><i><b> Constructor()</ins></i></b> kaha jata hay orr isko likhny ka tareeqa yeh hota hay <ins><i> __construct() </ins></i> ;</h3>
    <?php


    class Employee{
        //Properties of our Class
        public $name;
        public $salary;

        //Methods of our Class
        //Contructor function in php means for Automatically Call in the Objects

        //Constructor function without arguments

        function __construct(){
            echo "Hey! My name is Asad Naeem";
        }
    }

    $employee1 = new Employee();

    echo "<br>";

    $employee2 = new Employee();

    echo "<br>";

    class Student{
        //Properties
        public $student_name;
        public $student_class;

        //Methods
        // Constructor function with arguments
        function __construct($name, $class){
            $this->student_name = $name;
            $this->student_class = $class;
        }
    }

    $asad = new Student("Asad Naeem", 12);

    echo "The Class of $asad->student_name is $asad->student_class";
    ?>
</body>
</html>