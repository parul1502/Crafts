<?php
//including the Mysql connect parameters.
include("../sql-connections/db-creds.inc");


$con = mysql_connect($host,$dbuser,$dbpass);
if (!$con)
  {
  die('[*]Could not connect to DB, check the creds in db-creds.inc: ' . mysql_error());
  }




//@mysql_select_db('mysql',$con)	
	
//purging Old Database	
	$sql="DROP DATABASE IF EXISTS  form";
	if (mysql_query($sql))
		{echo "[*]Old database Removed if exists"; echo "</br></br>";}
	else 
		{echo "[*]Error Removing database: " . mysql_error(); echo "</br></br>";}


//Creating new database form
	$sql="CREATE database `form` CHARACTER SET `gbk` ";
	if (mysql_query($sql))
		{echo "[*]Creating New database successfully";echo "</br></br>";}
	else 
		{echo "[*]Error creating database: " . mysql_error();echo "</br></br>";}

//creating table users
$sql="CREATE TABLE form.login (firstname varchar(20) NOT NULL, lastname varchar(20) NOT NULL,username varchar(20) NOT NULL,email varchar(20) NOT NULL,password varchar(20) NOT NULL)";
	if (mysql_query($sql))
		{echo "[*]Creating New Table 'login' successfully";echo "</br></br>";}
	else 
		{echo "[*]Error creating Table: " . mysql_error();echo "</br></br>";}
?>

