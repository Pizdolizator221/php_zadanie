<?php
    require_once("Classes/V/VCube.php");
    
    class VCubeTest
    {
        public function Test()
        {
            $a = 2;
            $VCube = new VCube();
            $result = 8;

            if ($result == $VCube->Count($a)) {
                return array("<p class=\"text-green\">VCube class works correct <p />", 1);
            }
            else {
                return array("<p class=\"text-red \">Error: method returned <b>" . $VCube->Count($a) ."</b>, expected: <b>". $result ." </b>(Classes/V/VCube.php)<p />", 0);
            }
        }
    }
    
?>