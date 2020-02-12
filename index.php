<?php include("functions.php"); ?>


<!DOCTYPE html>
<html>
	<head>
		<title>three.js css3d - periodic table</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<!--		<link rel="stylesheet" type="text/css" href="css/style.css">-->
        
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
        
             <script>
//        $("#search").click(function(){
//            window.location.assign("search.php");
//        
//        })
          
      
      </script>
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


    </ul>

\
<!--      <form method="post"  action="searchResults.php" class="form-inline float-right hidden-sm-down">-->
          <a href="search.php" style="text-decoration: none;"><input class="form-control" id="search" type="button" data-action="grow" value="Search Keywords"></a>
<!--        </form>s-->
      
      
 
    


    
  </div>
</nav>
        
        
        
		<script src="js/three.js"></script>
		<script src="js/tween.min.js"></script>
		<script src="js/TrackballControls.js"></script>
		<script src="js/CSS3DRenderer.js"></script>
        <script src="js/OrbitControls.js"></script>


		<div id="container"></div>
		
		
        <div id="menu">
			<button id="table">TABLE</button>
			<button id="sphere">SPHERE</button>
			<button id="helix">HELIX</button>
			<button id="grid">GRID</button>
            
            
		</div>

        
        <script>
        
            var table = [] ;
            
        </script>
            
         <?php
        

        
        $query = mysqli_query($conn, "SELECT * FROM carnames ");
        
       
        while($row = mysqli_fetch_array($query)) {
        
        
        ?>
     
            
            

        
        

        <script>
            
        
            table = table.concat("<form method='post' action='searchResults.php'><div class='miniatura' ><button id='submit' type='submit' name='submit' style='font-size: 15px;' ><center><p style=' font-weight: bold; font-family: Arial Black; line-weight: 30px;  margin-left: -10px; padding: 10px;'><?php  echo $row[1]; ?></p></center></button></div></form>");
            
        </script>
        
    <?php
        }
            ?>

        

        
<!--        <script type="text/javascript" src="./js/ajax.js"></script>-->
<script src="js/script.js"></script>
        
        
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