<?php

function romanNumber($n)
{
    // support for numbers greater than a thousand
    $ret1 = '';
    while ($n >= 1000) {
        $ret1 .= 'M';
        $n -= 1000;
    }

    $ret = '';
    if ($n > 0) {
        $n = (string) $n;
        $l = 'IVXLCDM';
        $j = 0; // goes by roman letters
        for ($i = strlen($n)-1; $i >= 0; --$i) { // goes by decimal number
            switch ($n[$i]) {
                case 0: $s = ''; break;
                case 1: $s = $l[$j]; break;
                case 2: $s = $l[$j].$l[$j]; break;
                case 3: $s = $l[$j].$l[$j].$l[$j]; break;
                case 4: $s = $l[$j].$l[$j+1]; break;
                case 5: $s = $l[$j+1]; break;
                case 6: $s = $l[$j+1].$l[$j]; break;
                case 7: $s = $l[$j+1].$l[$j].$l[$j]; break;
                case 8: $s = $l[$j+1].$l[$j].$l[$j].$l[$j]; break;
                case 9: $s = $l[$j].$l[$j+2]; break;
            }
            $j += 2;
            $ret = $s.$ret;
        }
    }

    return $ret1.$ret;
}
