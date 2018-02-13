<?php
$date =  date('Y/m/d', time()); //HW 2
print "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

if ($tar - $date > 0) {print "the future";} //HW 3
elseif ($tar - $date < 0) {print "the past"."<br>";}
elseif ($tar - $date == 0) {print "Oops!";}

$date_S_count = substr_count($date, "/"); //HW4
print "The total number of '/' in \$date: ".$date_S_count."<br>";

$date_count = str_word_count($date);//HW 5
print "The total word count for \$date is: ".$date_count."<br>";

function countprint($str){
	$a = strlen($str);
	print "Number of characters in string: ".$a."<br>";
} 

countprint($date); //HW6

function firstletter($str){
	$b = substr($str, 0, 1);
	$b_code = ord($b);
	print "ASCII code of first letter in the string: ".$b_code."<br>";
}

firstletter($date); //HW7

$end_date = substr($date, -2);//HW 8
print "The last two characters of \$date: ".$end_date."<br>";


$date_array = explode('/', $date);//HW 9
echo "The value of \$date as an array: ";
print_r($date_array);
echo "<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br>";

foreach ($year as $value) {
	$year_R = $value % 4;

	switch ($year_R){
		case 0:
			$msg = true;
			break;
		case 1:
			$msg = false;
			break;
	}

	while ($year_R == true){
		print "True";
	}
	print "False";
}

?>