<?php

class Student {
	var $first_name;
	var $last_name;
	var $country= "None";
}

$student1 = new Student;
$student1->first_name = "Adkhambek";
$student1->last_name = "Muzaffarov";

$student2 = new Student;
$student2->first_name = "Hasan";
$student2->last_name = "Muzaffarov";

echo $student1->first_name . " " . $student1->last_name . "<br>";
echo $student2->first_name . " " . $student2->last_name . "<br>";

$class_vars = get_class_vars("Student");
$object_vars = get_object_vars($student1);

echo "class vars: <br>";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

echo "object vars: <br>";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

if(property_exists("Student", "first_name")) {
	echo "Property first_name exists";
} else {
	echo "Properties first_name doesn't exist";
}
