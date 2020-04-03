<?php
    class VPyramid
    {
        public function Count($S, $h)
        {
            $V = $h * ($S[0] + $S[1] + sqrt($S[0] * $S[1])) / 3;
            return $V;
        }
    }
?>