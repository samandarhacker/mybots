<?php
$a = scandir("s");
print_r($a);
for($i=0;$i<count($a);$i++){
    unlink("s/$a[$i]");
}