<?php
// page1.php

session_start();

echo 'Welcome to page #1';

$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();

// Works if session cookie was accepted
echo '<br /><a href="12345.php">page 2</a>';

// Or maybe pass along the session id, if needed
echo '<br /><a href="12345.php?' . SID . '">page 2</a>';
echo "<meta http-equiv='refresh' content='0;URL=12345.php?" . SID . ">";
?>
