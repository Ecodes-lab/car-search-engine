<?php 

include("functions.php");

?>

<!DOCTYPE html>
<html>
	<head>
		<title>three.js css3d - periodic table</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<!--		<link rel="stylesheet" type="text/css" href="css/searchresult.css">-->
	   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    
    <link href="./assets/css/toolkit.css" rel="stylesheet">
    
    <link href="./assets/css/application.css" rel="stylesheet">
        
        <style>
        
        html, body {
				height: 100%;
			}
			body {
				background-color: #000000;
				margin: 0;
				font-family: Helvetica, sans-serif;;
				overflow: hidden;
			}
			a {
				color: #ffffff;
			}
			#info {
				position: absolute;
				width: 100%;
				color: #ffffff;
				padding: 5px;
				font-family: Monospace;
				font-size: 13px;
				font-weight: bold;
				text-align: center;
				z-index: 1;
			}
			#menu {
				position: absolute;
				bottom: 20px;
				width: 100%;
				text-align: center;
			}
			.element {
				width: 120px;
				height: 160px;
				box-shadow: 0px 0px 12px rgba(0,255,255,0.5);
				border: 1px solid rgba(127,255,255,0.25);
				text-align: center;
				cursor: default;
			}
			.element:hover {
				box-shadow: 0px 0px 12px rgba(0,255,255,0.75);
				border: 1px solid rgba(127,255,255,0.75);
			}
				.element .number {
					position: absolute;
					top: 20px;
					right: 20px;
					font-size: 12px;
					color: rgba(127,255,255,0.75);
				}
				.element .symbol {
					position: absolute;
					top: 40px;
					left: 0px;
					right: 0px;
					font-size: 60px;
					font-weight: bold;
					color: rgba(255,255,255,0.75);
					text-shadow: 0 0 10px rgba(0,255,255,0.95);
				}
				.element .details {
					position: absolute;
					bottom: 15px;
					left: 0px;
					right: 0px;
					font-size: 12px;
					color: rgba(127,255,255,0.75);
				}
			button {
				color: rgba(127,255,255,0.75);
				background: transparent;
				outline: 1px solid rgba(127,255,255,0.75);
				border: 0px;
				padding: 5px 10px;
				cursor: pointer;
			}
			button:hover {
				background-color: rgba(0,255,255,0.5);
			}
			button:active {
				color: #000000;
				background-color: rgba(0,255,255,0.75);
			}
        
        </style>
        
	</head>
	<body>
        
     <nav class="navbar navbar-toggleable-sm fixed-top navbar-inverse bg-inverse app-navbar">
  <button
    class="navbar-toggler navbar-toggler-right hidden-md-up"
    type="button"
    data-toggle="collapse"
    data-target="#navbarResponsive"
    aria-controls="navbarResponsive"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="./index.php">
    <img src="./assets/img/brand-white.png" alt="brand">
  </a>

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="./views/index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
        
      <li class="nav-item">
        <a class="nav-link" href="./index.php">SEARCH</a>
      </li>
    

      

    </ul>

       <a href="search.php" style="text-decoration: none;"><input class="form-control" id="search" type="button" data-action="grow" value="Search Keywords"></a>

    
  </div>
</nav>
		<script src="js/three.js"></script>
		<script src="js/tween.min.js"></script>
		<script src="js/TrackballControls.js"></script>
		<script src="js/CSS3DRenderer.js"></script>
		<script src="js/OrbitControls.js"></script>

		<div id="container"></div>

    <div id="menu">
			<button id="table" onclick="resetcamera();">TABLE</button>
			<button id="sphere" onclick="resetcamera();">SPHERE</button>
			<button id="helix" onclick="resetcamera();">HELIX</button>
			<button id="grid" onclick="resetcamera();">GRID</button>
        </div>
        
        
        
     
        

        
        
        <script>
        var table = [];
        
        </script>
         <?php
        
         if (isset($_POST['search'])) {
            
            $search = $_POST['search'];
            
            $search = preg_replace("#[^0-9a-z]#i","", $search);
            
                         $whereClause = "";
            
           
            
            echo "<p>Showing search results for '". mysqli_real_escape_string($conn, $search)."':</p>";
            
            $whereClause = "WHERE carname LIKE '%". mysqli_real_escape_string($conn, $search)."%'";
                    
            
     
            
            

      $query = "SELECT * FROM carnames  ".$whereClause."";
         
//         $query = "SELECT users.*, profiles.*, tweets.* FROM users INNER JOIN profiles, tweets ON users.id = tweets.userid AND tweets.userid = profiles.userid ".$whereClause."";

        $result = mysqli_query($conn, $query);
            
            
       

        if (mysqli_num_rows($result) == 0) {

            echo "<p style='margin-top: 3%; color: white; font-size: 100%; font-family: Arial Black; font-wieght: 800px;'>Sorry - Couldnt find result for '". mysqli_real_escape_string($conn, $search)."':</p>";

        } else {
        
//        $query = mysqli_query($conn, "SELECT * FROM searchengine");
        
       
        while($row = mysqli_fetch_array($result)) {
        
        
        ?>
     
            
            

        
        

        <script>
            
        
            table = table.concat("<div class='miniatura'><p style=' font-weight: bold; font-family: Arial Black; line-weight: 30px;  padding: 10px; font-size: 15px;'><?php   echo  substr($row[1], 0, 120); ?></p></div>");
            
        </script>
        
    <?php
        }
        }
         }
        
        
        if(isset($_POST['submit']))
        {
        
        
           $query1 = mysqli_query($conn, "SELECT * FROM searchengine");
        
       
        while($rows = mysqli_fetch_array($query1)) {
        
        
        ?>
     
            
            

        
        

        <script>
            
        
            table = table.concat("<div class='miniatura'><?php   echo  substr($rows[1], 0, 120); ?></div>");
            
        </script>
        
    <?php
        }
        }
    
         
            ?>
        
        
      
        
        
        
       <script src='js/results.js'></script>      
        
        
        <script src="./assets/js/jquery.min.js"></script>    
    <script src="./assets/js/tether.min.js"></script>
    <script src="./assets/js/chart.js"></script>
    <script src="./assets/js/toolkit.js"></script>
    <script src="./assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){
        if (window.BS&&window.BS.loader&&window.BS.loader.length) {
          while(BS.loader.length){(BS.loader.pop())()}
        }
      })
    </script>
        
	</body>
</html>





