<?php
require_once "classes/Person.php";
require_once "classes/Teacher.php";
require_once "classes/Student.php";


$student = new Student();

$student->set_name("Flemming");
$student->set_age(20);


$teacher = new Teacher();

$teacher->set_name("Hans");
$teacher->set_age(50);

$student->greetings();

$teacher->greetings();