<?php

if(isset($_GET["vorname"]) && isset($_GET["name"]))
{	
		header("HTTP/1.1 200 OK");
		echo header();	
}
else
{
 header("HTTP/1.1 419 Error");
 echo header();
}

?>