<?php
session_start();
session_destroy();

echo "U bent uitgelogd";
header ( 'Location: index.php' );
?>