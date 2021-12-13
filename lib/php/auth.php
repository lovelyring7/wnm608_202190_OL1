<?php

function MYSQLIAuth(){
	return[
"localhost", // mysql host
"achellys_example", //mysql username
"tjdnfeodia7", 	//mysql user password
"achellys_example" // mysql database name 
	];
}

function PDOAuth(){
	return[
		"mysql:host=localhost;dbname=achellys_example", // host and database name
		"achellys_example", //mysql username
		"tjdnfeodia7", 	//mysql user password
		[PDO:MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}