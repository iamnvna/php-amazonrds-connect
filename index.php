<?php

$dbhost = ' '; // Your Database Host is the <endpoint> associated with your Database.
$dbport = ' '; // <Enter your Port Number associated with the your Database> The Default is '3306'.
$dbname = ' '; // <Enter your Database name here>
$charset = ' ' ; // <Enter your Character Set here> The Default is 'utf8'.

/*
The information above can be found under the Connectivity & Security, and Configuration tabs in your Amazon RDS Database.
*/

try {
    $dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}"; //mysql used in this line denotes the type of DBMS being used. Refer to documentation for other DBMSs. 
    $username = ' '; // <Enter your Database username here> NB: This can be different to your Database Name in Line 5 above
    $password = ' '; // <Enter the password associated with your username>
    $pdo = new PDO ($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful.";
    
} catch (PDOException $e) {
    echo "Connection failed: ".$e->getMessage(); // get.Message() retrieves the exact error message associated with the connection failure which is stored in variable $e. 
}

/*
Use the Try Catch error handling technique to produce an output that is consistent with the state of connection. Though an IF ELSE statement is viable, it doesn't allow us output the error statement associated with the connection should the connection fail. 
*/

?>
