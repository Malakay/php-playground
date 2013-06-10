<?php

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Test Bootstrap</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <table class="table-hover" align="center">
            <?php
            for ($x = 1; $x <= 10; $x++) {
                echo '<tr>';
                echo '<td>'.$x.'</td>';
                echo '<td>'.generateRandomString().'</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>
