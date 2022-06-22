<?php
class User {
	var $first_name;
	var $last_name;
	var $age;

	function full_name() {
			return $this->first_name . " " . $this->last_name;
	}

	function birthYear() {
		return date("Y") - $this->age;
	}
}

class Customer extends User {

}

$u = new User;
$u->first_name = "Adham";
$u->last_name = "Muzaffarov";
$u->age = "23";

echo $u->full_name() . "<br>";
echo $u->birthYear() . "<br>";

$c = new User;
$c->first_name = "Hasan";
$c->last_name = "Muzaffarov";
$c->age = "19";


echo $c->full_name() . "<br>";
echo $c->birthYear() . "<br>";