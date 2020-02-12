<?php
include("./functions.php");


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search Engine</title>

    <!-- Bootstrap core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      
      <script src="./vendor/jquery/jquery.min.js"></script>
      
      <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
      
      <style>
      
          body {
              
              background:url(./img/unsplash4.jpg);
  font-family: 'Titillium Web', sans-serif;
  background-size:cover;
          }
      
      </style>

    <!-- Custom fonts for this template -->
<!--
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
-->

    <!-- Custom styles for this template -->
<!--    <link href="./css/agency.min.css" rel="stylesheet">-->
      
      <script type="text/javascript">

          
          function showModal() {
            
            $("#searchModal").modal('show');
        };
      
      
      </script>

  </head>

  <body onload="showModal();" id="page-top">


    


   <!-- Button trigger modal -->
<!--
<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#searchModal">
  Launch demo modal
</button>
-->

<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" style="margin: 0% 30% 0% 30%; " action="searchResults.php" class="form-inline hidden-sm-down">
          <input class="form-control" name="search" id="search" type="text" data-action="grow" placeholder="Search">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="searchClose" onclick="closeModal();" class="btn btn-warning" data-dismiss="modal">Close</button>
<!--        <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

     <script type="text/javascript">

          
          function closeModal() {
            
            window.location.assign("index.php");
        };
      
      
      </script> 
    
      
    <!-- Bootstrap core JavaScript -->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="./js/jqBootstrapValidation.js"></script>
    <script src="./js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="./js/agency.min.js"></script>

  </body>

</html>
