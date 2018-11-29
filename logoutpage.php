<!DOCTYPE html>
<html>
<?php
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Connect to MySQL server and the database
require( 'includes/adminlogin_tools.php' ) ;

session_start();
session_destroy();
$_SESSION['logged_in'] = logout();
load('adminlogin.php');
?>
</html>    