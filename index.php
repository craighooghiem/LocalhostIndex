<?php

$directories = glob($somePath . '/*' , GLOB_ONLYDIR);
$files = scandir();

print_r($directories);
print_r($files);
?>
