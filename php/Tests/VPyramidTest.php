<?php
    require_once("C:/server/data/htdocs/pr/php/Classes/S/SBase.php");
    require_once("C:/server/data/htdocs/pr/php/Classes/V/VPyramid.php");

    class VPyramidTest
    {
        public function Test()
        {
            $a = 2;
            $SBase = new SBase();
            $VPyramid = new VPyramid();
            $result = 8;
            if ($result == $VPyramid->Count($SBase->Count($a, $a), $a)) {
                return array("<p class=\"text-green\">VPyramid class works correct <p />", 1);
            }
            else {
                return array("<p class=\"text-red\">Error: method returned <b>" . $VPyramid->Count($SBase->Count($a, $a), $a) ."</b>, expected: <b>". $result ." </b>(Classes/V/VPyramid.php)<p />", 0);
            }
        }
    }    
?>