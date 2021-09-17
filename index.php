<?php

include 'con_db.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Assignment</title>
  </head>
  <body>
    
	<div class="container my-5" >
	
	<button class="btn btn-primary my-2"><a href="operation.php?source=000" class="text-light"style="text-decoration:none">000</a></button>
	
	<button class="btn btn-primary"><a href="operation.php?source=001"class="text-light"style="text-decoration:none">001</a></button>
	<button class="btn btn-primary"><a href="operation.php?source=010"class="text-light"style="text-decoration:none">010</a></button>
	
	<button class="btn btn-primary"><a href="operation.php?source=100"class="text-light"style="text-decoration:none">100</a></button>
	<br>
	<button class="btn btn-primary"><a href="operation.php?source=011"class="text-light"style="text-decoration:none">011</a></button>
	<button class="btn btn-primary"><a href="operation.php?source=110"class="text-light"style="text-decoration:none">110</a></button>
	<button class="btn btn-primary"><a href="operation.php?source=101"class="text-light"style="text-decoration:none">101</a></button>
	<button class="btn btn-primary"><a href="operation.php?source=111"class="text-light"style="text-decoration:none">111</a></button>
	</div>	
         
  </body>
</html>