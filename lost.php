<!DOCTYPE html>
<html>
    
    <head>
        
        <title>Lost</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="overall.css">
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
        <h1>Welcome to Limbo!</h1>
     
        <h2> Marist's Lost and Found Database </h2>
        
        
        <p>
           Lost something? Fill out this form so people can keep an eye out. Check our current lost item page regularly to see if someone found it.
        </p>
        
      
		<form>  
		Item: <br>
        <input type="text" name="Item"> <br>
		Location Lost: <br>
        <!--update this when we move it to PHP to make it grab from sql- let melissa handle this-->
		<select>
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
        </select> <br>
        Color:<br>
        <input type="text" name="Color"> <br>
        When it was lost (MM/DD/YY format): <br>
        <input type="text" name="Item"> <br>
        Contact Number: <br>
        <input type="text" name="Item"> <br>
        Contact Email: <br>
        <input type="text" name="Item"> <br>
		</form>
		
		<br>
		<!-- put stuff in the database-->
		<button type = "button"> Submit </button>
        
            </center>
        </body>
</html>
        
       