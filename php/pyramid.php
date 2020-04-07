<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/php_zadanie-master/Content/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/php_zadanie-master/Content/Style.css">
</head>
<body>
    <fieldset class="mt-5">
        <?php
            require_once("Classes/S/SBase.php");
            require_once("Classes/S/SSidePyramid.php");
            require_once("Classes/V/VPyramid.php");

            $a1 = $_POST['a1'];
            $a2 = $_POST['a2'];
            $h = $_POST['h'];

            if(!$a1 or !$a2 or !$h) 
            {
                echo "<h1>А числа чего не ввел?</h1>" ;
            }
            else {
                $SBase = new SBase();
                $SSide = new SSide();
                $VPyramid = new VPyramid();
    
                echo "<h1>Результат</h1>";
                echo "<p> Площадь оснований: " . array_sum($SBase->Count($a1, $a2)) . "</p>";
                echo "<p> Боковая площадь: " . $SSide->Count($a1, $a2, $h) . "</p>";
                echo "<p> Объем: " . $VPyramid->Count($SBase->Count($a1, $a2), $h) . "</p>";
            }

            
        ?>
    </fieldset>

    <footer>
        <a class="link" href="/php_zadanie-master/index.html"><span>Вернуться</span></a>

        <div class="loader">
            <span class="loader-item"></span>
            <span class="loader-item"></span>
            <span class="loader-item"></span>
            <span class="loader-item"></span>
        </div>
    </footer>
</body>
</html>