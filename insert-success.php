<?php



extract($_GET);
$code=$_GET['code'];
$item = $_GET['item'];
$origin = $_GET['origin'];
$brand = $_GET['brand'];
$specs = $_GET['specs'];
$dimentions = $_GET['dimentions'];
$power = $_GET['power'];
$price = $_GET['price'];



$link = 'https://ozor131190.github.io/ozor-qr-code-generator/'.$code.'.html';


echo "<br>";

?>



<html lang="en">
<head>
<title>php createing files</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js">
</script>


<style>

.linkinput {width: 100%; text-align: center;font-weight: bold;}

.buttonclick {width: 100%; margin:5px; text-align: center;
				border:0px solid red;}

.getqrclick {width: 50%;font-weight: bold; letter-spacing: 1px;
				font-size: larger;}				
.firstcol {border:0px solid red;}

.printoutput {border:2px solid red;}
.code-print {border:2px solid black;}

.code-printh3 {font-weight: bold; color:red;
				text-align: center;
			 display: block;
    overflow: visible;
    font-family: Menlo, "Deja Vu Sans Mono", "Bitstream Vera Sans Mono", Monaco, monospace;
    white-space: pre;
    white-space: pre-wrap;
margin: 0;}


.buttons {width:40%;margin:1% 5%;}

h4 {color: red; margin: 0;}
.spandata {color: black; border:1px solid black;
			border-radius: 10px;
			margin: 2px;}

		
</style>

<body onload="generateQr()">
<div class="container">
	<h4>Code : <span class="spandata"><?php echo "$code"; ?></span>
		 / Item: <span class="spandata"><?php echo "$item"; ?></span>
		  / Origin: <span class="spandata"><?php echo "$origin"; ?></span>
		   / Brand: <span class="spandata"><?php echo "$brand"; ?></span>
		    / Specs: <span class="spandata"><?php echo "$specs"; ?></span>
		     / Dimentions: <span class="spandata"><?php echo "$dimentions"; ?></span>
		      / Power: <span class="spandata"><?php echo "$power"; ?></span>
		       / Price: <span class="spandata"><?php echo "$price"; ?></span>
	</h4>

<div class="row" >



	<div class="col-lg-12 col-md-12 col-sm-12 firstcol">

		
<div class="sqrcode"></div>




<input type="text" value="<?php echo "$link"; ?>" class="linkinput"
placeholder="Paste a URL or enter 
            text, then press enter" 
onload="generateQr()" />



<div class="buttonclick">
<input align="center" class="getqrclick btn btn-success"  type="submit" onclick="generateQr()" value="Get Qr Code">


</div>
<div  id="print-content" class="qrcode">

<div class="printoutput" id="printcode" name="printcode">
</div>

<div class="code-print"><h3
align="center" class="code-printh3">
<?php echo "Item Code : $code"; ?></h3></div>

</div>

</div>

</div>
</div> <!-- end of row -->



</div>


<div class="container" >
	<div class="row" style="">
		
		<button class="col-lg-6 col-sm-6 col-md-6 buttons btn btn-success" style="float:left;" onclick="printDiv()">
			
			Print
		</button>


		<a href="test.php" class="col-lg-6 col-lg-6 buttons btn btn-danger"
		onclick="download()" >
			
			Insert New Item
		</a>

	</div>
</div>
</body>

<script type="text/javascript">
function printDiv() {
var printContents = document.getElementById("print-content").innerHTML;
w=window.open();
w.document.write(printContents);
w.print();
w.close();
}
</script>


<script>
	

	 var element = qrcode.makeCode(
            document.querySelector(
                "input").value);

	 window.write("hello");


</script>



<script src="js/script.js"></script>