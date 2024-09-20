<?php

$host = 'localhost';
$dbname = 'InventorySystem';
$dbusername = 'root';
$dbpassword = 'Js#2010052';

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

//Setting up PHP:
// 1. download php from website.
// 2. Extract into C drive file.
// 3. In the file, find php.ini-development.
// 4. Rename to php.ini
// 5. open php.ini uncomment extension=mysqli
// 6. modify "extension_dir="./"" into "extension_dir="./ext"" {RELATIVE PATH!!!!}
// 7. That's all!
