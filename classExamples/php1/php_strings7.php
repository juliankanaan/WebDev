<?php

// "heredoc" quotes allow multiple lines

$my_string = <<<MYSTRINGSTUFF
This will be spread along multiple
lines but on output, will be one
long string!<br>Of course, this might be on a different line, no?
MYSTRINGSTUFF;

echo $my_string;

?>