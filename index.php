<?php
echo "hello"
?>

<h1>
<?php
echo "hello"
?>
</h1>

<?php
//single line comment
/* 
multi 
line
comment
*/
//print "hello";


//variable - 
/* 
prefix- $
start- letter, underscore,numbers,case sensitive
*/
$output = 'hello world';
echo $output;

#datatypes
/* 
String
int
floats
bool
arrays
null
resourse
*/

$output1 = 'helllo';
$output2= 'world';

$greetings = $output1 .' '. $output2. '!';
$greetings2 = "$output1 $output2 ";

$output3 = 'they\'re here';

$output3 = "they're here";

$num1 = 5;
$num2=6;
$sum = $num1 + $num2;

$float1 = 5.4;
$bool1= true;

/* echo $greetings;
echo $sum;
echo $float1;
echo $bool1;
echo $output3;
echo $output3; */

echo $bool1;

//constants - use define
define('GREET','hello everyone');

echo GREET;
echo $sum;


?>





