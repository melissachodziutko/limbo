<!DOCTYPE html>
<html>
<?php
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;
# Includes these helper functions
require( 'includes/helpers.php' ) ;


if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $num = $_POST['num'] ;
    $fname = $_POST['fname'] ;
	$lname = $_POST['lname'] ;
	#$dob = '0000-00-00 00:00:00'
    if(!empty($num) || !empty($fname) || !empty($lname) ){
       #check for valid inputs
        if (empty($num)){
        echo '<p style="color:red">Please input President\'s number</p>' ;    
        }
            else if (empty($fname)){
                
             echo '<p style="color:red">Please input President\'s first name</p>' ;   
            }
                else if (empty($lname)){
                 echo '<p style="color:red">Please input President\'s last name!</p>' ;   
                }
            else{  
            $result = insert_record($dbc, $num, $fname, $lname) ;
      #echo "<p>Added " . $result . " new print(s) ". $num . " @ $" . $fname . " . $lname . "</p>" ; 
            }
    } else {
        echo '<p style="color:red">Please input President\'s number, first, and last name!</p>' ;
    }
   
 
}
    



# Show the records
show_records($dbc);
# Close the connection
mysqli_close( $dbc ) ;
?>
<!-- Get inputs from the user. -->
<!--<form action="stickypresidents.php" method="POST">
<table>
<tr>
<td>Number:</td><td><input type="text" name="num"></td>
</tr>
<tr>
<td>First Name:</td><td><input type="text" name="fname"></td>
</tr>
<tr>
<td>Last Name:</td><td><input type="text" name="lname"></td>
</tr>
</table>
<p><input type="submit" ></p>

</form>-->
<!-- HTML with embedded PHP --> 
<form action="stickypresidents.php" method="POST"> 
<p>Number: <input type="text" name="num" value="<?php 
    if (isset($_POST['num'])) echo $_POST['num']; ?>"> </p> 
<p>First Name: <input type="text" name="fname" value="<?php 
    if (isset($_POST['fname'])) echo $_POST['fname']; ?>"></p> 
<p>Last Name: <input type="text" name="lname" value="<?php 
    if (isset($_POST['lname'])) echo $_POST['lname']; ?>"></p>
<p><input type="submit"></p> 
</form>

</html>