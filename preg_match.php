<?php
    $urlinput = "http://www.sdev253.net/home.html";
    preg_match_all ("/www.(.*)\//", $urlinput, $pat_array);
    print $pat_array[1][0];
?>