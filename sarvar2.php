
<?php
	$savol=$_POST['nameIndex'];
	$togri_javob=$_POST['nameIndex4'];
    $a=$_POST['nameIndex1'];
    $b=$_POST['nameIndex2'];
    $c=$_POST['nameIndex3'];
    if($savol && $togri_javob && $a && $b && $c){
		 $bool=false;
		 $file_name = 'yuklash/text_1.txt';
         $file = fopen($file_name, 'w'); 
         foreach ($savol as $key => $value) {
		 	if($savol[$key] && $togri_javob[$key] && $a[$key] && $b[$key] && $c[$key]){
				fwrite($file, $savol[$key].';');
				fwrite($file, $togri_javob[$key].';');
				fwrite($file, $a[$key].';');
				fwrite($file, $b[$key].';');
				fwrite($file, $c[$key].';');
				$bool=true;	
			}
		}
		if($bool==true){
			echo 'fayl yuklandi';
		}
		fclose($file);
	}	
	else{
		echo 'fayl kelmadi';
	}

?>