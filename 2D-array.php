<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $market = array(
            "round"=>array("fruit1"=>"orange", "fruit2"=>"grapes"), 
            "yellow"=>array("fruit3"=>"banana", "fruit4"=>"mango")
        );
        // echo $market["yellow"]["fruit3"]."<br>";
        // echo $market["round"]["fruit2"];

        // 2-D arrayの呼び出しはforeachを2回使う
        foreach ($market as $category) {
            foreach ($category as $fruit) {
                echo $fruit." ";
            }
        }
    ?>
</body>
</html>