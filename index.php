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
	echo 'grazina TRUE';
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
print_r([148,244,52,49,55,19,1]);
print_r($myTest->discount([148,244,52,49,55,19,1]));

echo 'Uzduotis nr. 8<br>';
echo $myTest->storeRandom();
echo '<br>';

echo 'Uzduotis nr. 9<br>';
echo $myTest->glueText('this is a very simple sentence');
echo '<br>';
echo 'Uzduotis nr. 10<br>';
?>
</pre>
<p>
<?php
echo $myTest->textGen();