<pre>
<?php

include('Test.php');

echo 'Uzduotis nr. 1<br>';
$myTest = new Test();
echo '<br>';

echo 'Uzduotis nr. 2<br>';
echo $myTest->dayToday();
echo '<br>';

echo 'Uzduotis nr. 3<br>';
$myTest->storeToCookie();

$cookie_name = 'test_today';
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
echo '<br>';

echo 'Uzduotis nr. 4<br>';
if ($myTest->isEven(2)) {
	echo '2 (lyginis skaicius) grazina TRUE';
}
if ($myTest->isEven(3)) {
	echo '3 (nelyginis skaicius) grazina TRUE';
}
echo '<br>';

echo 'Uzduotis nr. 5<br>';
echo $myTest->language;
echo '<br>';

echo 'Uzduotis nr. 6<br>';
$myTest->setLanguage('Russia');
echo $myTest->language;
echo '<br>';

echo 'Uzduotis nr. 7<br>';
// generate a random array with 7 elements between 1 and 100
function generateRandomArray() {
	for ($i=0; $i < 7 ; $i++) { 
		$randArray[] = rand(1, 100);
	}
	return $randArray;
}
$newRandArray = generateRandomArray();
print_r($newRandArray);
print_r($myTest->discount($newRandArray));

echo 'Uzduotis nr. 8<br>';
echo $myTest->storeRandom();
echo '<br>';

echo 'Uzduotis nr. 9<br>';
$sentence = 'this is a vEry simple sentence';
echo $sentence;
echo '<br>';
echo $myTest->glueText($sentence);
echo '<br>';

echo 'Uzduotis nr. 10<br>';
?>
</pre>
<p>
<?php
echo $myTest->textGen();