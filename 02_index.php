<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
    margin: 0;
    padding:0;
    box-sizing:border-box;
}
.container {
    max-width: 80%;
    background-color:rgb(224, 133, 133);
    margin: auto;
    padding: 23px;
}
</style>
<body>
    <div class="container">
    <h1> Let's Learn about php </h1>
    <p> Your party status is here:</p>

    <?php
    $age=35;
    if($age>18)
    {
        echo " You can go to the patry ";
    }
    else if($age==7)
    {
        echo "You are 7 years old";
    }
    else{
        echo "you can not go to the party";
    }
    //Array 
    $langs=array("Python" , "c","java","php","NodeJs");
    // echo "<br>";
    // echo $langs[0];

    //Loops in php
    $a=0;
    while ($a <= 10) {
        echo "<br> This is number :";
        echo $a;
        $a++;
    }
    $a=0;
    while ($a < count($langs)) {
        echo "<br> This is Langues $a :";
        echo $langs[$a];
       // echo $a;
        $a++;
    }
        foreach($langs as $value)
        {
            echo "<br>The value from foreach loop is : ";
            echo $value;
        }

        //Function
        function print5()
        {
            echo "<br>Five";
        }
        print5();
        function print54($num)
        {
            echo "<br>The number is : ";
            echo $num;
        }
        print54(5);
        print54(56);


    ?>
    </div>
</body>
</html>