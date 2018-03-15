<?php
setcookie("env", "dev", time() + 3600 * 24, "/2019");
header("HTTP/1.1 303 See Other");
header("Location: /2019");
header("Connection: close");
die;