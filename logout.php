<?php
session_start();
//collect the old data throw session
$_SESSION['flag']="";
// flag is just using for the purpose of remind the user/logger only
session_destroy();
header("Location:index.html");
//here index.html is the first page
?>
