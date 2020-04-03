<?php
    require_once("C:/server/data/htdocs/pr/php/Classes/S/SBase.php");    

    class SBaseTest
    {
        public function Test(Type $var = null)
        {
            $a = 2;
            $SBase = new SBase();
            $result = 8;
            if ($result == array_sum($SBase->Count($a,$a))){
                return array("<p class=\"text-green\">SBase class works correct <p />", 1);
            }
            else {
                return array("<p class=\"text-red \">Error: method returned <b>" . array_sum($SBase->Count($a,$a)) ."</b>, expected: <b>". $result ." </b>(Classes/S/SBase.php)<p />", 0);
            }
        }
    }
?>