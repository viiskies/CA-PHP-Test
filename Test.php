<?php

class Test
{
    public $language;

    function __construct()
    {
        echo 'Vytautas';
        $this->language = 'LT';
    }

    public function dayToday() {
        return date('Y-m-d');
    }

    public function storeToCookie() {
        setcookie('test_today', $this->dayToday(), time() + (86400 * 7), "/");
    }

    public function isEven(int $num) {
        if ($num % 2 == 0) {
            return true;
        }
    }

    public function setLanguage(string $lang){
        switch ($lang) {
            case 'Lithuania':
                $this->language = 'LT';
                break;
            
            case 'Russia':
                $this->language = 'RU';
                break;
            
            case 'Poland':
                $this->language = 'PL';
                break;
            
            default:
                echo 'Language will stay the same as before<br>';
                break;
        }
    }

    public function discount(array $num_array) {
        rsort($num_array);
        for ($i=0; $i < count($num_array) ; $i++) { 
            if ($i < 3) {
                $newArray[] = $num_array[$i] * 0.9;
            } else {
                $newArray[] = $num_array[$i];
            }
        }
        return $newArray;
    }

    public function storeRandom() {
        $randomNumber = rand(1990,2017);
        $myfile = fopen("random.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $randomNumber);
        fclose($myfile);
        return 'A random number between 1990 and 2017 was written to a file random.txt';
    }

    public function glueText(string $someText) {
        $explodedText = explode(" ", $someText);
        $upperCaseString = '';
        foreach ($explodedText as $word) {
            $upperCaseString .= ucfirst(strtolower($word));
        }
        return $upperCaseString;
    }

    public function textGen() {
        $textToReturn = '';
        $randomWords = ['this', 'is', 'just', 'a', 'test'];
        for ($i=0; $i < 100 ; $i++) { 
            $textToReturn .= $randomWords[rand(0, count($randomWords)-1)] . " ";
        }
        return rtrim($textToReturn);
    }

}