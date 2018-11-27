<?php
$debug = true;
#Amy Moczydlowski, Melissa Chodziutko, Shaina Razvi, Danielle Anderson
# Shows the records in prints
function show_records($dbc) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT num, fname, lname FROM presidents ORDER BY num ASC' ;
	
	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		 echo '<H1>Dead Presidents</H1>' ;
		echo '<TABLE>';
		  echo '<table border = "1"';
		  echo '<TR>';
		  echo '<TH>Number</TH>';
		  echo '<TH>First Name</TH>';
		  echo '<TH>Last Name</TH>';
		  echo '</TR>';
		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
		  {
			echo '<TR>' ;
			echo '<TD>' . $row['num'] . '</TD>' ;
			echo '<TD>' . $row['fname'] . '</TD>' ;
			echo '<TD>' . $row['lname'] . '</TD>' ;
			echo '</TR>' ;
		  }
		  # End the table
		  echo '</TABLE>';
		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
			}
}

function show_link_records($dbc) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT id,lname FROM presidents ORDER BY id ASC' ;
	
	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		 echo '<H1>Dead Presidents</H1>' ;
		echo '<TABLE>';
		  echo '<table border = "1"';
		  echo '<TR>';
		  echo '<TH>ID</TH>';
		  echo '<TH>Last Name</TH>';
		  echo '</TR>';
		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
		  {
			echo '<TR>' ;
			#echo '<TD>' . $row['id'] . '</TD>' ;
			$alink = '<A HREF=linkypresidents.php?id=' . $row['id']  . '>' . $row['id'] . '</A>' ;
			echo '<TD ALIGN=right>' . $alink . '</TD>' ;
			echo '<TD>' . $row['lname'] . '</TD>' ;
			echo '</TR>' ;
		  }
		  
		  # End the table
		  echo '</TABLE>';
		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
			}
}

function show_record($dbc, $id) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT id, num, lname, fname FROM presidents WHERE id =' . $id ;
	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		 echo '<H1>Dead Presidents</H1>' ;
		echo '<TABLE>';
		  echo '<table border = "1"';
		  echo '<TR>';
		  echo '<TH>Number</TH>';
		  echo '<TH>Last Name</TH>';
		  echo '<TH>First Name</TH>';
		  echo '</TR>';
		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
		  {
			echo '<TR>' ;
			echo '<TD>' . $row['num'] . '</TD>' ;
			echo '<TD>' . $row['lname'] . '</TD>' ;
			echo '<TD>' . $row['fname'] . '</TD>' ;
			echo '</TR>' ;
		  }
		  # End the table
		  echo '</TABLE>';
		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
			}
}

# Inserts a record into the prints table
function insert_record($dbc, $num, $fname, $lname) {
  $query = 'INSERT INTO presidents(num, fname, lname) VALUES ("' . $num . '" , "' . $fname . '","' . $lname . '")' ;
  show_query($query);
	$results = mysqli_query($dbc,$query) ;
	if(!valid_number($num))
	  echo '<p style ="color:red; font-size:16px;">Please give a valid number.</p>';
	else if (!valid_name($fname))
	  echo '<p style ="color:red; font-size:16px;">Please complete the first name.</p>'; 
	else if (!valid_name($lname))
	  echo '<p style ="color:red; font-size:16px;">Please complete the last name.</p>';
	else
		check_results($results) ;

  return $results ;
}

# Shows the query as a debugging aid
function show_query($query) {
  global $debug;

  if($debug)
    echo "<p>Query = $query</p>" ;
}

# Checks the query results as a debugging aid
function check_results($results) {
  global $dbc;

  if($results != true)
    echo '<p>SQL ERROR = ' . mysqli_error( $dbc ) . '</p>'  ; 
}

function valid_number($num) {  
#echo '<p> I am being called</p>'; 
if(empty($num) || !is_numeric($num))
    return false ;   
else {
    $num = intval($num) ;      
	if($num <= 0)         
		return false ;
  }
  return true ; 
}

 function valid_name($name) {
	#echo '<p> I am being called</p>'; 
	if (empty($name)) 
		return false;
	else
		return true;
 }



?>