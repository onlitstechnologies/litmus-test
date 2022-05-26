<?php
$code = $_POST['code'];
$code_file = fopen("submission.c","w");
fwrite($code_file,$code);
fclose($code_file);
$out = var_dump(exec("gcc submission.c", $output, $retval));
echo $out . "<br>";
print_r($output[1]) . "<br>";
echo $retval . "<br>";