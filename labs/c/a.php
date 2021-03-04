<?php
ob_start();
exec("gcc a.cpp" . " 2>&1", $out);
$res=ob_get_contents();
ob_end_clean();
var_dump($out);
?>