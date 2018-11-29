<?php
$debug = true;
#Amy Moczydlowski, Melissa Chodziutko, Shaina Razvi, Danielle Anderson
# Shows the records in prints

#shows table of items
function show_lost_records($dbc) {
	# Create a query to get the description, create_date, item_status
    
	$query = "SELECT description, create_date, item_status FROM stuff WHERE item_status= 'lost' ORDER BY create_date DESC" ;
	
	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		 echo '<H1>Lost Items</H1>' ;
		echo '<TABLE>';
		  echo '<table border = "1"';
		  echo '<TR>';
		  echo '<TH>Description</TH>';
		  echo '<TH>Creation Date</TH>';
		  echo '<TH>Status</TH>';
		  echo '</TR>';
		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
		  {
			echo '<TR>' ;
			echo '<TD>' . $row['description'] . '</TD>' ;
			echo '<TD>' . $row['create_date'] . '</TD>' ;
			echo '<TD>' . $row['item_status'] . '</TD>' ;
			echo '</TR>' ;
		  }
		  # End the table
		  echo '</TABLE>';
		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
    }
}
function show_lost_ql1_records($dbc) {
	# Create a query to get the description, create_date, item_status
    
	$query = "SELECT description, create_date, item_status FROM stuff WHERE item_status= 'lost' AND update_date < '2017-12-06 07:12:46'  ORDER BY create_date DESC" ;
	
	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		 echo '<H1>Lost Items</H1>' ;
		echo '<TABLE>';
		  echo '<table border = "1"';
		  echo '<TR>';
		  echo '<TH>Description</TH>';
		  echo '<TH>Creation Date</TH>';
		  echo '<TH>Status</TH>';
		  echo '</TR>';
		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
		  {
			echo '<TR>' ;
			echo '<TD>' . $row['description'] . '</TD>' ;
			echo '<TD>' . $row['create_date'] . '</TD>' ;
			echo '<TD>' . $row['item_status'] . '</TD>' ;
			echo '</TR>' ;
		  }
		  # End the table
		  echo '</TABLE>';
		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
    }
}
function show_found_records($dbc) {
	# Create a query to get the description, create_date, item_status
    
	$query = "SELECT id, description, create_date, item_status FROM stuff WHERE item_status= 'found' ORDER BY create_date DESC" ;
	
    # Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		 echo '<H1>Found Items</H1>' ;
		echo '<TABLE>';
		  echo '<table border = "1"';
		  echo '<TR>';
        echo '<TH>Id</TH>';
		  echo '<TH>Description</TH>';
		  echo '<TH>Last Sighting Date/Time</TH>';
		  echo '<TH>Status</TH>';
		  echo '</TR>';
		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
          {
			echo '<TR>' ;
			
			$alink = '<A HREF=foundtable.php?id=' . $row['id']  . '>' . $row['id'] . '</A>' ;
			echo '<TD ALIGN=right>' . $alink . '</TD>' ;
            echo '<TD>' . $row['description'] . '</TD>' ;
			echo '<TD>' . $row['create_date'] . '</TD>' ;
			echo '<TD>' . $row['item_status'] . '</TD>' ;
			echo '</TR>' ;
		  }
		  
		  # End the table
		  echo '</TABLE>';
		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
			}
}
# Table of admin info
function show_admin_records($dbc) {
	
# Query to get email, username, and password for each admin
$query = 'SELECT email, username, password FROM admins ORDER BY username ASC';

$results = mysli_query( $dbc, $query );
check_results($results);

# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		 echo '<H1>Admins</H1>' ;
		echo '<TABLE>';
		  echo '<table border = "1"';
		  echo '<TR>';
		  echo '<TH>Username</TH>';
		  echo '<TH>Email</TH>';
		  echo '<TH>Password</TH>';
		  echo '</TR>';

		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
		  {
			echo '<TR>' ;
			echo '<TD>' . $row['username'] . '</TD>' ;
			echo '<TD>' . $row['email'] . '</TD>' ;
			echo '<TD>' . $row['password'] . '</TD>' ;
			echo '</TR>' ;
		  }
		  # End the table
		  echo '</TABLE>';
		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
    }
}
	# Execute the query
	/*$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		 echo '<H1>Found Items</H1>' ;
		echo '<TABLE>';
		  echo '<table border = "1"';
		  echo '<TR>';
		  echo '<TH>Description</TH>';
		  echo '<TH>Creation Date</TH>';
		  echo '<TH>Status</TH>';
		  echo '</TR>';
		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
		  {
			echo '<TR>' ;
			echo '<TD>' . $row['description'] . '</TD>' ;
			echo '<TD>' . $row['create_date'] . '</TD>' ;
			echo '<TD>' . $row['item_status'] . '</TD>' ;
			echo '</TR>' ;
		  }
		  # End the table
		  echo '</TABLE>';
		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
			}
}*/

function show_link_records($dbc) {
	# Create a query to get the description, create_date, item_status
	$query = 'SELECT description, create_date, item_status FROM stuff ORDER BY create_date DESC' ;
	
	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		 echo '<H1>Lost Items</H1>' ;
		echo '<TABLE>';
		  echo '<table border = "1"';
		  echo '<TR>';
		  echo '<TH>Description</TH>';
		  echo '<TH>Last Sighting Date/Time</TH>';
		  echo '<TH>Status</TH>';
		  echo '</TR>';
		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
          {
			echo '<TR>' ;
			#echo '<TD>' . $row['id'] . '</TD>' ;
			$alink = '<A HREF=test.php?id=' . $row['description']  . '>' . $row['description'] . '</A>' ;
			echo '<TD ALIGN=right>' . $alink . '</TD>' ;
			echo '<TD>' . $row['create_date'] . '</TD>' ;
			echo '<TD>' . $row['item_status'] . '</TD>' ;
			echo '</TR>' ;
		  }
		  
		  # End the table
		  echo '</TABLE>';
		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
			}
}
#show the record of a specific requested item
function show_record($dbc, $id) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT id, location_id, description, create_date, update_date, room, owner, finder, item_status FROM stuff WHERE id =' . $id ;
	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	if( $results )
	{
  		# But...wait until we know the query succeed before
  		# rendering the table start.
  		 echo '<H1>Requested Item</H1>' ;
		echo '<TABLE>';
		  echo '<table border = "1"';
		  echo '<TR>';
          echo '<TH>Owner Name</TH>';
          echo '<TH>Finder Name</TH>';
          echo '<TH>Description</TH>';
		  echo '<TH>Last Sighting Date/Time</TH>';
		  echo '<TH>Building of Last Sighting</TH>';
		  echo '<TH>Room of Last Sighting</TH>';
		  echo '<TH>Last Update to Report</TH>';
		  echo '<TH>Status</TH>';
		  echo '</TR>';
		  # For each row result, generate a table row
		  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
		  {
			echo '<TR>' ;
			echo '<TD>' . $row['owner'] . '</TD>' ;
            echo '<TD>' . $row['finder'] . '</TD>' ;
			echo '<TD>' . $row['description'] . '</TD>' ;
			echo '<TD>' . $row['create_date'] . '</TD>' ;
            echo '<TD>' . $row['location_id'] . '</TD>' ;
			echo '<TD>' . $row['room'] . '</TD>' ;
            echo '<TD>' . $row['update_date'] . '</TD>' ;
			echo '<TD>' . $row['item_status'] . '</TD>' ;
			echo '</TR>' ;
		  }
		  # End the table
		  echo '</TABLE>';
		  # Free up the results in memory
		  mysqli_free_result( $results ) ;
    }
}

# Inserts a record into the prints table
function insert_record($dbc, $id, $desc, $create, $update, $room, $owner, $finder, $item_status) {
  $query = 'INSERT INTO stuff(location_id, description, create_date, update_date, room, owner, finder, item_status) VALUES ("' . $id . '" ,"' . $desc . '" , "' . $create . '","' . $update . '","' . $room . '","' . $owner . '","' . $finder . '","' . $item_status . '")' ;
  show_query($query);
	$results = mysqli_query($dbc,$query) ;
	if(!valid_description($desc))
	  echo '<p style ="color:red; font-size:16px;">Please give a description.</p>';
	else if (!valid_date($create))
	  echo '<p style ="color:red; font-size:16px;">Please give a valid date.</p>'; 
	else if (!valid_status($item_status))
	  echo '<p style ="color:red; font-size:16px;">Please complete the item status.</p>';
	else
		check_results($results) ;

  return $results ;
}

function change_status($dbc, $id, $status)
{
    $query = 'UPDATE stuff SET item_status ="' . $status . '" WHERE id=' . $id;
    show_query($query);
    $results = mysqli_query($dbc,$query) ;
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

function valid_description($description) {  
#echo '<p> I am being called</p>'; 
if(empty($description) || is_numeric($description))
    return false ;   
else
  return true ; 
}

 function valid_date($date) {
	#echo '<p> I am being called</p>'; 
	if (empty($date)) 
		return false;
	else
		return true;
 }

function valid_status($item_status) {
    if(empty($item_status))
        return false;
    else
        return true;
}

?>
