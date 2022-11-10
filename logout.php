<?php
//get data
session_start();
session_unset();
session_destroy();

echo "You have been successfully logged out";
?>