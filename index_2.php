<html>
<head>
<title>array</title>
</head>
<body>
<href="">
<?php 
$input='doctor';
$massiv1=array(22,'sarvar','injiner',true);
$massiv2=array(26,'islom','dasturchi',true);
$massiv3=array(12,'rashid','doctor',true);

	if($input==$massiv1[2]&& $massiv1[0]<=25 && $massiv1[3]===true){
		echo '<center><h1>yaroqli</h1></center>';
	}else {
		echo '<center><h1>yaroqsiz</h1></center>';
	}
	if($input==$massiv2[2] &&$massiv2[0]<=25 && $massiv2[3]===true){
		echo '<center><h1>yaroqli</h1></center>';
	}else {
		echo '<center><h1>yaroqsiz</h1></center>';
	}
	if($input==$massiv3[2] &&$massiv3[0]<=25 && $massiv3[3]===true){
		echo '<center><h1>yaroqli</h1></center>';
	}else {
		echo '<center><h1>yaroqsiz</h1></center>';
	}
	
?>
</body>
</html>


