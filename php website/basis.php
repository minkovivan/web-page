<?php
$integer = 27;
$float = 2.13;
$string  = "Hello World!";
$bool = TRUE;


echo 'DATA TYPES<br>';
echo gettype($integer);
echo "<br>";
echo gettype($float);
echo "<br>";
echo gettype($string);
echo "<br>";
echo gettype($bool);
echo "<br>";


echo '<br>OUTPUT<br>';
echo "Here we're gonna to multiply our integer(27) by 2";
echo "<br>";
if (is_int($integer)) {
    $integer *= 2;
}
echo "$integer<br>";

echo "And here we're going to show you our string";
echo "<br>";
if (is_string($string)) {
    echo "String: $string";
}

echo "<br>";
echo "<br>";


echo 'STRING<br>';
$string1 = "Group ";
$string2 = "";
echo $string1;
echo "<br>";
$string2 = $string1 . "TI-02";

echo $string2;
echo "<br><br>";


echo 'ARRAY';
$array_int = array(1, 2, 3);
echo "<br>";
echo "Array of integers:";
echo "<br>";
foreach ($array_int as $el) {
    echo $el . ' ';
}
echo "<br>";

echo "<br>";
echo "Array of strings:";

$array_string = array("My", "name", "is", "Ivan,", "I'm", "from", "Zaporizhzhia.");
echo "<br>";

for($i = 0; $i < 7; $i++){
    echo $array_string[$i] . " ";
}

echo "<br>";
echo "<br>";


echo 'SIMPLE FUNCTION<br>';
function simple_function($a)
{
    if ($a <= 10) {
        echo "$a ";
        simple_function($a + 1);
    }
}

$a = 1;
simple_function($a);

echo "<br><br>";

//-----------------------------------------------------------
echo 'CLASS<br>';
include_once "class.php";

$objectMen = new Men("Ivan Ivanov", "18");
$objectWomen = new Women("Olga Maksimova", "81");

$objectCouple = new Couple($objectWomen, $objectMen);

$res = $objectCouple->result();

echo $res;
echo "<br>";
echo "<br>";