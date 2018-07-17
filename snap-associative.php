<?php
/**
 * Created by PhpStorm.
 * User: bashirshafii
 * Date: 7/17/18
 * Time: 9:17 AM
 */


$students = [
		 ["name" =>"Joe", "age" => 18],
       ["name" =>"Jane", "age" => 19],
		 ["name" => "Ben", "age" => 21]
	 ];

/*
 * a function that takes in associative array of people with names and ages and returns average age.
 *
 * @param array $tudents is an array of students
 * @return int $averageAge is average age of student in the array in years
 **/
function averageAge ( array $students) : float {

	$totalAge = 0;

	foreach ($students as $student) {
		//PHP_EOL creates a new line when outputing from a script
		echo $student["name"] . " is " .  $student["age"];
		echo "<br>";
		$totalAge += $student["age"];

	}
	//make sure $totalAge is the correct number
	echo "Total age is " . $totalAge;
	echo "<br>";
	return ($totalAge/count($students));

}

echo ("The average age is " .averageAge($students));




