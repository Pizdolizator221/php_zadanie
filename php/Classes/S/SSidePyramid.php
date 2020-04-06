<?php
    class SSide
    {
        public function Count($a1, $a2, $h)
        {
            $S = ((($a1 + $a2) / 2) * $h) * 4;
            return $S;
        }
    }
?>