<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../Content/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../Content/Style.css">
</head>
<body>
    <h1>Результаты тестирования работы классов приложения:</h1>
    <fieldset class="col-md-8 ml-auto mr-auto">
    <?php
        $isPassed = 0;
        // Проверка класса площади оснований
        require_once("Tests\SBaseTest.php");
        $SBaseTest = new SBaseTest();
        $TestMessage = $SBaseTest->Test()[0];
        $isPassed += $SBaseTest->Test()[1];
        echo $TestMessage;

        require_once("Tests\SSideCubeTest.php");
        $SSideCubeTest = new SSideCubeTest();
        $TestMessage = $SBaseTest->Test()[0];
        $isPassed += $SBaseTest->Test()[1];
        echo $TestMessage;
        
        // Проверка класса боковой площади 
        require_once("Tests\SSidePyramidTest.php");
        $SSideTest = new SSideTest();
        $TestMessage = $SSideTest->Test()[0];
        $isPassed += $SSideTest->Test()[1];
        echo $TestMessage;

        // Проверка класса объема куба
        require_once("Tests\VCubeTest.php");
        $VCubeTest = new VCubeTest();
        $TestMessage = $VCubeTest->Test()[0];
        $isPassed += $VCubeTest->Test()[1];
        echo $TestMessage;

        //Проверка класса объема пирамиды
        require_once("Tests\VPyramidTest.php");  
        $VPyramidTest = new VPyramidTest();
        $TestMessage = $VPyramidTest->Test()[0];
        $isPassed += $VPyramidTest->Test()[1];
        echo $TestMessage;

        echo "<hr>";

        if ($isPassed<4) {
            echo "<p class=\"text-red\">Модульное тестирование прошли ".$isPassed." объектов из 4</p>";
        } else {
            echo "<p class=\"text-green\">Модульное тестирование прошли все объекты</p>";
        }
    ?>
    </fieldset>
    
    <footer>
    <a class="link" href="../index.html"><span>Вернуться</span></a>

    <div class="loader">
        <span class="loader-item"></span>
        <span class="loader-item"></span>
        <span class="loader-item"></span>
        <span class="loader-item"></span>
    </div>
    </footer>
</body>
</html>