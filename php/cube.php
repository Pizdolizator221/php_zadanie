<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="http://localhost/pr/content/bootstrap-grid.min.css">
    <link rel="stylesheet" href="http://localhost/pr/content/Style.css">
</head>
<body>
    <fieldset class="mt-5">
        <?php
            require_once("Classes/S/SBase.php");
            require_once("Classes/S/SSideCube.php");
            require_once("Classes/V/VCube.php");
            $a = $_POST['a'];

            if(!$a) 
            {
                echo "<h1>А числа чего не ввел?</h1>";
            }
            else {
                
                $SBase = new SBase();
                $SSide = new SSideCube();
                $VCube = new VCube();
                echo "<h1>Результат</h1>";
                echo "<p> Площадь оснований: " . array_sum($SBase->Count($a, $a)) . "</p>";
                echo "<p> Боковая площадь: " . $SSide->Count($a) . "</p>";
                echo "<p> Объем: " . $VCube->Count($a) . "</p>";
            }
        ?>
    </fieldset>

    <footer>
        <a class="link" href="http://localhost/pr/"><span>Вернуться</span></a>

        <div class="loader">
            <span class="loader-item"></span>
            <span class="loader-item"></span>
            <span class="loader-item"></span>
            <span class="loader-item"></span>
        </div>
    </footer>
</body>
</html>