<?php
    $dta["NAMA"] = "Ervina";
    $dta["TGL_LAHIR"] = "2003-11-01";
    $dta["JKEL"] = "P";
    $dta["NIM"] = "2201010703";
    $dta["ALAMAT"] = "Badung";

    header("content-type: application/json; charser=utf-8");
    echo json_encode($dta);