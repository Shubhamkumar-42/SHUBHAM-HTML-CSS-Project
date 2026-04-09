<?php

echo "<h1>System Info</h1>";

echo "<p>PHP Version: " . PHP_VERSION . "</p>";
echo "<p>OS: " . PHP_OS . "</p>";
echo "<p>Max Integer: " . PHP_INT_MAX . "</p>";
echo "<p>Min Integer: " . PHP_INT_MIN . "</p>";

echo "<p>Current Date & Time: " . date("Y-m-d H:i:s") . "</p>";

echo "<h2>Server Info</h2>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "<h2>Selected Server Details</h2>";

echo "<p>Server Name: " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p>Request Method: " . $_SERVER['REQUEST_METHOD'] . "</p>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";

?>