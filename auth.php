<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Data = "localhost";
$database_Data = "db-name";
$username_Data = "db_user";
$password_Data = "ddb-pass";
@$Data = mysql_pconnect($hostname_Data, $username_Data, $password_Data) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
