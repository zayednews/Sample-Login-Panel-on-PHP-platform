<?php
	
	session_start();
	$u=$_POST['uname'];
	$p=$_POST['pass'];
$file = fopen($u.".txt", "r") or die("Unable to open file!");
while(!feof($file)) {
	$line=fgets($file);
	$var=explode(" ", $line);
	if($p==trim($var[0])){
	echo "Welcome ".$var[1];
	$_SESSION["flag"]="ok";
	$_SESSION["fla"]=$var[1];
	$_SESSION["file"]=$u.".txt";
	
	$fl=1;
	header("Location:any");
	break;
	}
else{
	echo "I can't recognize you";
	header("Location:any");
}
	}
?>
