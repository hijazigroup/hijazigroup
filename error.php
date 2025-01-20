<?php
extract($_GET);
$code=$_GET['data'];



 ?>
 




 <html lang="en">
<head>
<title>php createing files</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src=
"https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js">
</script>
</head>

<style>

body {background-color: black;}	
.center {
  margin: auto;
  width: 40%;
  border: 0px solid #73AD21;
  padding: 10px;
}

 {width: 100%; height: 50%;}

h2 {color:white;}


.spanerror {color:red;}

.back {width:70%; font-weight: bold; font-size: 18px; }
</style>
</head>
<body>




<br><br><br><br><br><br>
<div class="center">
  <h2>Code <span class="spanerror"> "<?php echo "$code"; ?>"</span> ALready Exist</2>
  	<br>
  	<a href="test.php" class="btn btn-danger back">Return Back</a>
 
</div>







</body>
</html>