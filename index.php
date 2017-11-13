<pre>
<?php

include('Test.php');

$myTest = new Test();
echo '<br>';

echo $myTest->dayToday();
echo '<br>';

$myTest->storeToCookie();

$cookie_name = 'test_today';
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
echo '<br>';


if ($myTest->isEven(2)) {
	echo 'TRUE';
}
echo '<br>';

$myTest->setLanguage('Russia');
echo $myTest->language;

echo '<br>';

print_r([148,244,52,49,55,19,1]);
print_r($myTest->discount([148,244,52,49,55,19,1]));

echo $myTest->storeRandom();
echo '<br>';

echo $myTest->glueText('this is a very simple sentence');
echo '<br>';

?>
</pre>
<p>
<?php
echo $myTest->textGen();