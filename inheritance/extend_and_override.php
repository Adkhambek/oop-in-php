<?php
class User {
	var $is_admin = false;
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
	var $city;
	var $state;
	var $country;

	function location() {
		return $this->city . ", " . $this->state . ", " . $this->country . "<br>";
	}

}

class UserAdmin {
	var $is_admin = true;

	function full_name() {
		return $this->first_name . " " . $this->last_name . " (Amdin)";
	}
}

$u = new User;
$u->first_name = "Adham";
$u->last_name = "Muzaffarov";
$u->age = 23;

echo $u->full_name() . "<br>";
echo $u->birthYear() . "<br>";

$c = new Customer;
$c->first_name = "Hasan";
$c->last_name = "Muzaffarov";
$c->age = 19;
$c->city = "Tashkent";
$c->state = "Tashkent";
$c->country = "Uzbekistan";


echo $c->full_name() . "<br>";
echo $c->birthYear() . "<br>";
echo $c->location() . "<br>";