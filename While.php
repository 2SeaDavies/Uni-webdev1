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
 * Time: 16:07
 */
$mugs = 7;
$specs = 7;
$sausage = 7;
$count = 0;
while ($count < 30) {
    $num = rand(0,2);
    print "<p> on day $count </p>";
    if (($num ==0) && ($mugs >0)){
        print "<p>mugs are available</p>";
        $mugs -=1;

    }
    elseif (($num ==1) && ($specs >0)){
        print "<p>specs are available</p>";
        $specs -=1;

    }
    elseif (($num ==2) && ($sausage >0)){
        print "<p>sausages are available</p>";
        $sausage -=1;

    }
    else {
        print "<p> nothing is available </p>";
    }
    $count++;

}


?>

</body>
</html>