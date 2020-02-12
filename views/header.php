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

  <a class="navbar-brand" href="../index.html">
    <img src="./assets/img/brand-white.png" alt="brand">
  </a>

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="./views/index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
<!--
      <li class="nav-item">
        <a class="nav-link" href="./views/index.php">About Us</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="./views/index.php">Contact Us</a>
      </li>

      <li class="nav-item hidden-md-up">
        <a class="nav-link" href="./notifications/index.html">Notifications</a>
      </li>
-->
      

    </ul>

        <form class="form-inline float-right hidden-sm-down">
          <input class="form-control" type="text" data-action="grow" placeholder="Search">
        </form>

    
  </div>
</nav>
        
    
        
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