<?php
setcookie("env", "dev", time() + 3600 * 24, trim(join("/", preg_split("@\\\@", dirname($_SERVER['REQUEST_URI'])))));
header("HTTP/1.1 303 See Other");
header("Location: " . trim(join("/", preg_split("@\\\@", dirname($_SERVER['REQUEST_URI'])))));
header("Connection: close");
die;