<?php
$debug = true;
#Amy Moczydlowski, Melissa Chodziutko, Shaina Razvi, Danielle Anderson
require( 'includes/connect_db.php' ) ;
# Includes these helper functions
require( 'includes/helpers_limbo.php' ) ;
# Shows the records in prints
show_records($dbc);
#shows table of items
function show_records($dbc) {
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
?>