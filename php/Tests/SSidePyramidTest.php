<?php
    require_once("Classes/S/SSidePyramid.php");

    class SSideTest
    {
        public function Test()
        {
            $a = 2;
            $SSide = new SSide();
            $result = 16;
            if ($result == $SSide->Count($a,$a,$a)) {
                return array("<p class=\"text-green\">SSidePyramid class works correct <p />", 1);
            }
            else {
                return array("<p class=\"text-red\">Error: method returned <b>" . $SSide->Count($a,$a,$a) ."</b>, expected: <b>". $result ." </b>(Classes/S/SSidePyramid.php)<p />", 0);
            }
        }
    }
    
?>