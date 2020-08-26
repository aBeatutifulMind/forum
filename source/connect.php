<?php
//connect.php
$server = 'sql209.epizy.com';
$username   = 'epiz_26582701';
$password   = 'fxOvGR6pyI';
$database   = 'epiz_26582701_forum';

if(!mysql_connect($server, $username,  $password))
{
    exit('Error: could not establish database connection');
}
if(!mysql_select_db($database)
{
    exit('Error: could not select the database');
}
?>
