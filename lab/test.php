<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
    echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
    echo "Server Protocol: " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
    echo "CGI Revision: " . $_SERVER['GATEWAY_INTERFACE'] . "<br>";
    ?>
</body>

</html>