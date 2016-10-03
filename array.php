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
 * Time: 15:37
 */
$provisioned_activities = array("specs","recreational pharmaceuticals","Led Zeppelin");

foreach ($provisioned_activities as $x) {
    print "<p>$x</p>";
}

$provisioned_activities[1] ="hugs";
foreach ($provisioned_activities as $x) {
    print "<p>$x</p>";
}
unset($provisioned_activities[2]);
foreach ($provisioned_activities as $x) {
    print "<p>$x</p>";
}
?>
</body>
</html>