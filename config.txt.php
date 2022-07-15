<?php

error_reporting(0); // disable PHP errors, you can comment out or turn on logs if you need to fix issue

/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "webbot", "u25v!7Ns0", "webbot");

// Check connection status

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

