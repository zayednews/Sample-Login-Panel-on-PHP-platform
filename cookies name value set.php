<?php
$name = "user";
$value = "Zayed News";
setcookie($name, $value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$name])) {
    echo "Cookie named '" . $name . "' is not set!";
} else {
    echo "Cookie '" . $name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$name];
}
?>

</body>
</html>
