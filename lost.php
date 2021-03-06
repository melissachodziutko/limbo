<!DOCTYPE html>
<html>
    
    <head><style>
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("marist.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 40px;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

input[type=submit] {
    border: 1px solid #f44c0e;
    color: #fff;
    background: tomato;
    padding: 10px 20px;
    border-radius: 5px;
}
input[type=submit]:hover {
    background: #f44c0e;
}
</style>
         
        <div class="hero-image">
            <link rel="stylesheet" href="overall.css">
  <div class="hero-text">
    <h1>LIMBO</h1>
    <p>Marist's #1 Lost and Found Database</p>
  </div>
</div>
    </head>
    <body>
        <!--lead back to PracticePageLIMBO.html-->
		<form action="LandingPageLIMBO.php" align = "left">
        <input type="submit" value="Go to Landing Page" />
        </form>
         <form action="losttable.php" align = "left">
        <input type="submit" value="Back to table" />
        </form>
        
        <center>
        
        <p>
           Lost something? Fill out this form to help other people find your stuff.
        </p>
        

<?php
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;
# Includes these helper functions
require( 'includes/helpers_limbo.php' ) ;


if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $id = $_POST['id'];
    #echo $id;
    #show_query($query);
    #$id = mysqli_query($dbc, $query);
    #echo "This is id:", $id, "!!!";
    $desc = $_POST['description'] ;
	$create = date('Y-m-d G:i:s');
    $update = date('Y-m-d G:i:s');
    $room = $_POST['room'] ;
    $owner = 'N/A' ;
    $finder = $_POST['finder'] ;
    $item_status = 'lost' ;
	#$dob = '0000-00-00 00:00:00'
    if (!empty($id) || !empty($desc) || !empty($room) || !empty($finder)) {
       #check for valid inputs
        if ($id == 0){
        echo '<p style="color:red">Please pick a location!</p>' ;    
        } else if (empty($finder)){
                    echo '<p style="color:red">Please fill out all required information!</p>' ;   
                    } else if (empty($room)){
                        echo '<p style="color:red">Please fill out all required information!</p>' ;   
                            }else if (empty($desc)){  
                                echo '<p style="color:red">Please fill out all required information!</p>' ;   
                                }  else if (empty($desc) && empty($room) && empty($id) && empty($finder)){
                                    echo '<p style="color:red">Please fill out all required information!</p>' ;
                                    }
                                    else{  
                        $result = insert_record($dbc, $id, $desc, $create, $update, $room, $owner, $finder, $item_status) ;
                                        }
    }
      #echo "<p>Added " . $result . " new print(s) ". $num . " @ $" . $fname . " . $lname . "</p>" ; 
        
   
 # Close the connection

}
    
# Close the connection
mysqli_close( $dbc ) ;
?>


<!-- HTML with embedded PHP --> 
<form action="lost.php" method="POST"> 

<p>Location: 

    <select id="id" name="id">                      

  <option value="0">--Select Location--</option>

    <option value="1">Byrne House</option>

    <option value="2">Cannavino Library</option>

    <option value="3">Champagnat</option>

    <option value="4">Chapel</option>

    <option value="5">Cornell Boathouse</option>

    <option value="6">Donnelly</option>

    <option value="7">Dyson Center</option>

    <option value="8">Fern Tor</option>

    <option value="9">Fontaine Hall</option>

    <option value="10">Foy Townhouses</option>

    <option value="11">Fulton Street Townhouses (Lower)</option>

    <option value="12">Fulton Street Townhouses (Upper)</option>

    <option value="13">Greystone Hall</option>

    <option value="14">Hancock Center</option>

    <option value="15">Kieran Gatehouse</option>

    <option value="16">Kirk House</option>

    <option value="17">Leo Hall</option>

    <option value="18">Longview Park</option>

    <option value="19">Lowell Thomas</option>

    <option value="20">Marian Hall</option>

    <option value="21">McCann Center</option>

    <option value="22">Mid-Rise Hall</option>

    <option value="23">North Campuse Housing Complex</option>

    <option value="24">St. Anne's Hermitage</option>

    <option value="25">St. Peter's</option>

    <option value="26">Science and Allied Health Building</option>

    <option value="27">Sheahan Hall</option>

    <option value="28">Steel Plant Studios and Gallery</option>

    <option value="29">Student Center/Music Building</option>

    <option value="30">West Cedar Townhouses (Lower)</option>

    <option value="31">West Cedar Townhouses (Upper)</option>

</select>

</select>





    <!--<input type="text" name="id" value="<?php 

    if (isset($_POST['id'])) echo $_POST['id']; ?>">--> </p> 

<p>Description: <input type="text" name="description" value="<?php 

    if (isset($_POST['description'])) echo $_POST['description']; ?>"></p> 

<p>Room: <input type="text" name="room" value="<?php 

    if (isset($_POST['room'])) echo $_POST['room']; ?>"></p>

<p>Your name: <input type="text" name="finder" value="<?php 

    if (isset($_POST['finder'])) echo $_POST['finder']; ?>"></p>

<p><input type="submit"></p> 

</form>

	
        </body>
</html>
        
       
