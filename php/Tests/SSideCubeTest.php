<?php
    require_once("Classes/S/SSideCube.php");

    class SSideCubeTest
    {
        public function Test()
        {
            $a = 2;
            $result = 16;
            $SSide = new SSideCube();

            if ($result == $SSide->Count($a,$a,$a)) {
                return array("<p class=\"text-green\">SSideCube class works correct <p />", 1);
            }
            else {
                return array("<p class=\"text-red\">Error: method returned <b>" . $SSide->Count($a,$a,$a) ."</b>, expected: <b>". $result ." </b>(Classes/S/SSideCube.php)<p />", 0);
            }
        }
    }
    

?>