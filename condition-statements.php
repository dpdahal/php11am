<?php
//$x = 10;
//$y = 20;
//$z = 30;
//
//if ($x > $y) {
//    if ($x > $z) {
//        echo "x";
//    } else {
//        echo "y";
//    }
//} else {
//    if ($y > $z) {
//        echo "Y";
//    } else {
//        echo "z";
//    }
//}


//if ($x > $y and $x > $z) {
//    echo "x is large";
//} elseif ($y > $x and $y > $z) {
//    echo "y is large";
//} else {
//    echo "Z large";
//}

//if ($x > $y) {
//    echo "x is large";
//} else {
//    echo "Y is large";
//}


$username = 'admin';
$password = 'admin002';


if (($username == 'admin' && $password == 'admin002')
    or ($username == 'ram' && $password == 'ram002')) {
    echo "welcome $username";
} else {
    echo "username & password not match";
}