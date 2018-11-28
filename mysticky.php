<!--
This PHP script was modified based on sticky.php in McGrath (2012).
  1) Moved the form into PHP code as opposed to being embedded in the form.
  2) Put the form in a function.
  3) Initialized the fields if doing a GET.
By Ron Coleman
-->

<!DOCTYPE HTML><html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Sticky Form</title>
</head>
<body>

<?php
# If user opened the page without submitting, initialize the fields
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'GET' ) {
  $name = "" ;
  $email = "" ;
}

# Otherwise, user submitted the form, so let's validate
else if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Initialize an error array.
  $errors = array();

  $name = $_POST[ 'name' ] ;
  $email = $_POST[ 'email' ] ;

  # Check for a name & email address.
  if ( empty( $name ) )  {
  	$errors[] = 'name' ;
  }
  else {
  	$name = trim( $name )  ;
  }

  if ( empty( $_POST[ 'email' ] ) ) {
  	$errors[] = 'email' ;
  }
  else {
  	$email = trim( $email )  ;
  }

  # Report result.
  if( !empty( $errors ) )
  {
    echo 'Error! Please enter your  ' ;
    foreach ( $errors as $field ) { echo " - $field " ; }
  }
  else {
  	echo "<p>Success! Thanks $name </p>" ;
  }
}

# Show the input form with whatever we got for fields
show_form($name,$email) ;

# Shows the input form
function show_form($name,$email) {
  echo '<form action="mysticky.php" method="POST">' ;
  echo '<p>Name: <input type="text" name="name" value="' . $name . '"> </p> ' ;
  echo '<p>Email: <input type="text" name="email" value="' . $email . '"></p>' ;
  echo '<p><input type="submit"></p>' ;
  echo '</form>' ;
}
?>
</html>