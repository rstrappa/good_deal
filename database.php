<?php

class Database
{

	public static function Conn()
		{
    $conn = new PDO('mysql:host=clientes.tecnoactive.cl;dbname=good_deal','root','Jqa+empl17',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES \'UTF8\''));
			$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $conn;
		}
	}
	define('DB_HOST','clientes.tecnoactive.cl');
	define('DB_NAME','good_deal');
	define('DB_USER','root');
	define('DB_PASS','Jqa+empl17');
/*
	public static function Conn()
	{
		$conn = new PDO('mysql:host=localhost;dbname=lapolar','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES \'UTF8\''));
		$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $conn;
	}

}
define('DB_HOST','localhost');
define('DB_NAME','lapolar');
define('DB_USER','root');
define('DB_PASS','');
?>
*/
