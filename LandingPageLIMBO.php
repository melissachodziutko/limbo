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
        <title>Welcome to Limbo!</title>
        <meta name="description">
    </head>
    <body>
        <!-- this would lead to adminlogin.html -->
        
		<form action="adminlogin.php" >
        <input type="submit" value="Admins" />
        </form>
        <center>
        <p>
           With Limbo, you can report items that you've lost or found on the Marist College campus. 
        </p>
        </center>
        
            <div class = "all-buttons">
           <center>     
		<!-- lead to lost.html -->
        <form action="losttable.php" >
        <input type="submit" value="Lost Something?" />
        </form>
        
            
           
		<!-- lead to found.html -->
        <form action="foundtable.php" >
        <input type="submit" value="Found Something?" />
        </form>
                
            
           
        <form action="QuickLinksLIMBO.php" align = "top">
        <input type="submit" value="Quick Links" />
        </form>
               </center>
            </div>
		
        </body>
        
        
        
   
        
       
