<?php
    $dta[0]["NAMA"] = "Ervina";
    $dta[0]["TGL_LAHIR"] = "2003-11-01";
    $dta[0]["JKEL"] = "P";
    $dta[0]["NIM"] = "2201010703";
    $dta[0]["ALAMAT"] = "Badung";

    $dta[1]["NAMA"] = "Sunari";
    $dta[1]["TGL_LAHIR"] = "2003-11-01";
    $dta[1]["JKEL"] = "P";
    $dta[1]["NIM"] = "2201010703";
    $dta[1]["ALAMAT"] = "Bali";

    $dta[2]["NAMA"] = "AyuPuspita";
    $dta[2]["TGL_LAHIR"] = "2004-01-11";
    $dta[2]["JKEL"] = "P";
    $dta[2]["NIM"] = "2201010298";
    $dta[2]["ALAMAT"] = "Nusa Dua";

    $dta[3]["NAMA"] = "Ni Ketut Melli";
    $dta[3]["TGL_LAHIR"] = "2004-05-16";
    $dta[3]["JKEL"] = "P";
    $dta[3]["NIM"] = "2201010311";
    $dta[3]["ALAMAT"] = "Karangasem";

    $dta[4]["NAMA"] = "Intan ";
    $dta[4]["TGL_LAHIR"] = "2003-01-11";
    $dta[4]["JKEL"] = "P";
    $dta[4]["NIM"] = "2201010298";
    $dta[4]["ALAMAT"] = "Petang";

    header("content-type: application/json; charser=utf-8");
    echo json_encode($dta);