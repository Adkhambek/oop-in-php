<?php

class Student {
	public static $grades = ["Freshman", "Sophomore", "Junior", "Senior"];
	private static $total_students = 0;

	public static function motto(){
		return "To learn PHP OOP !";
	}

	public static function count(){
		return self::$total_students;
	}

	public static function addStudent(){
		self::$total_students++;
	}
}

echo Student::$grades[0] . "<br>";
echo Student::motto() . "</br>";

//echo Student::$total_students; //Error

echo Student::count() . "</br>";
Student::addStudent();
echo Student::count() . "</br>";