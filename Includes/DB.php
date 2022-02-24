<?php
$DSN='mysql:host = localhost; dbname=cms4_2_1.sql';
$ConnectingDB = new PDO($DSN,'root','root');
if(!$ConnectingDB)
	{
		//echo "<h3>Not able to establish Database Connection</h3>";
	}
else
    {
       // echo "connection success";
    }
?>
