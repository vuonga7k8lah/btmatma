<?php

/****
 ****
 *** @ PHP AES-128-CBC class
 *** @ Developed by Takis Maletsas
 ****
 ****/

require "aes.class.php";

$aes = new AES;
$x=$aes->decode("D9eYPp/FOCMylYYugJCmGQ==");
$y=$aes->encode("nguyen");
echo $x;
echo "<br>";
echo $y;
//Encrypted: hibcqPrxD0rv2E5b5/LzYQ==
//Decrypted: Hello world !

?>