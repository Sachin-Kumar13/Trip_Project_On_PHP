<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Language</title>
</head>
<body>
<div class="container">
This is my first php website
<?php
echo "Hello World and this is printed using php","    ";
//comment
/*
multy line 
comment
*/
//Variable 
echo "<br";
$var1=10;
$var2=8;
echo $var1,"    ";
echo $var2,"    ";
echo "<br";
echo "Sum is " ,$var1 +$var2;
//Operators in php
// Arithmetic Operator 
echo "<br>";
echo "The value of variable1 + variable2 is";
echo "<br>";
echo $var1 +$var2;
echo "<br>";
echo "The value of variable1 - variable2 is";
echo "<br>";
echo $var1 -$var2;
echo "<br>";
echo "The value of variable1 * variable2 is";
echo "<br>";
echo $var1 * $var2;
echo "<br>";
echo "The value of variable1 / variable2 is";
echo "<br>";
echo $var1 / $var2;

// Assignment Operator 
$newVar=$var1;

//$newVar+=1;
$newVar *=2;
echo "The value of new variable is  ";
echo $newVar;
echo "<br>";

// Comparison Operator
//echo "<h1> Comparison Operators </h1> "

echo "The value of 1==4 is ";
echo var_dump(1==4);
echo "<br>";
echo "The value of 1!=4 is ";
echo var_dump(1!=4);
echo "<br>";
echo "The value of 1<=4 is ";
echo var_dump(1<=4);
echo "<br>";
echo "The value of 1>=4 is ";
echo var_dump(1>=4);
echo "<br>";

// Increment/Decrement Operator
echo $var1++;
// echo $var1++
// echo ++$var1;
// echo --$var1;
// Logical Operator
define('pi',3.14);

//Data Types in php
// 1. String 
// 2. Integer
// 3. Float
// 4. Boolean
// 5. Array 
// 6." Object
Echo "<br> This is data types <br>";
$var3="This is String ";
echo var_dump($var3);
echo "<br>";
echo pi;
?>
 </div>
</body>
</html>