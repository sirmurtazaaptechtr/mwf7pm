<?php
    date_default_timezone_set("Asia/Karachi");
    echo date("l, d-m-Y h:i:sa") . "<br>";
    echo date("l, F d Y") . "<br>";
    
    $dob_aq = mktime(04, 22, 30, 8, 23, 2005);
    echo date("l, F d Y  h:i:sa",$dob_aq) . "<br>";
    
    $dob_bz = mktime(23, 58, 28, 4, 30, 2006);
    echo date("l, F d Y  h:i:sa",$dob_bz) . "<br>";
    
    $dob_si = mktime(17, 25, 18, 12, 17, 2001);
    echo date("l, F d Y  h:i:sa",$dob_si) . "<br>";
    
    $dt = strtotime("+ 3 weeks");
    echo date("l, F d Y",$dt) . "<br>";

    $dt=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $dt) . "<br>";

    $dt=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $dt) . "<br>";
    
    $dt=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $dt) . "<br>";

    echo date("l, F d Y  h:i:sa",strtotime("now")) . "<br>";
    echo date("l, F d Y  h:i:sa",strtotime("10 September 2000")) . "<br>";
    echo date("l, F d Y  h:i:sa",strtotime("+1 day")) . "<br>";
    echo date("l, F d Y  h:i:sa",strtotime("+1 week")) . "<br>";
    echo date("l, F d Y  h:i:sa",strtotime("+1 week 2 days 4 hours 2 seconds")) . "<br>";
    echo date("l, F d Y  h:i:sa",strtotime("next Thursday")) . "<br>";
    echo date("l, F d Y  h:i:sa",strtotime("last Monday")) . "<br>";

    $days = (strtotime('2020-11-25') - strtotime('2020-11-13')) / (60 * 60 * 24);
    echo floor($days); // Output: 12
    

