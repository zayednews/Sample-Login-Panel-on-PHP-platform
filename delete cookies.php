<?php
// set the expiration date to one hour ago
setcookie("name", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie is deleted.";
?>

</body>
</html>
