<?php
    class SBase
    {
        public function Count($a1, $a2)
        {
            $S1 = pow($a1, 2);
            $S2 = pow($a2, 2);
            return array($S1, $S2);
        }
    }
?>