<!DOCTYPE html>
<html>
<?php
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Connect to MySQL server and the database
require( 'includes/adminlogin_tools.php' ) ;
session_start();
if ($_SESSION['logged_in'] != 'logged' || empty($_SESSION)){
    echo "There was an error in login.";
}
else
    load('AdminChangeStatusLIMBO.php', $pid);
?>
    
</html>    