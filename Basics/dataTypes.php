<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Datos</title>
</head>
<body>
    <?php
        //On this .php you'll found all data types, inside of PHP...
        $bool = true;
        $integer = 20;
        $decimal = 34.12;
        $string = "Nick Gaming"; //Not a primitive data type...

        echo "Now priting the different data types...<br>";

        echo "This is a boolean: $bool<br>";
        echo "This is an integer data: $integer<br>";
        echo "This is a decimal data: $decimal<br>";
        echo "This is a string data: $string<br>";
    ?>
    <br>
    <br>
    <?php
        //Compound Data Types...
        //This can hold on multiple values inside.
        $array = array("Love", "Spider", "Nissan", "Mama");

        class bike {
            function model() {
                $model = "Harley";
                echo "Bike model: " .$model;
            }
        }
        $obj = new bike();
        $obj -> model();
    ?>
    <br>
    <br>
    <?php
        //Special Data Types...
        //We have the type NULL & resource...
        $x = 20;
        $x = NULL;
        var_dump($x);

        //The resource type, we'll check in files or connecting into a DB...
    ?>
</body>
</html>