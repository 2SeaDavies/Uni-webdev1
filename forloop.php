<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NEW TITLE</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: 0702555
 * Date: 03/10/2016
 * Time: 15:46
 */


for ($i = 1; $i<30; $i++)
{
    $printlist = array();
    if ($i % 2 == 0) {
        $printlist[] = "Specs";
    }
    if ($i % 3 == 0 ) {
        $printlist[] ="Mugs";    }
    if ($i % 4 ==0) {
        $printlist[] ="Sausage Rolls";
    }
    else {
        $printlist[] ="no products";
    }
    foreach ($printlist as $x) {
        print "<p> $x</p>";
    }
    print "<p> are available </p>";
}
?>
</body>
</html>
