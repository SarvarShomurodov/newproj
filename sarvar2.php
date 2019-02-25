
<?php
	$savol=$_POST['nameIndex'];
	$togri_javob=$_POST['nameIndex4'];
    $a=$_POST['nameIndex1'];
    $b=$_POST['nameIndex2'];
    $c=$_POST['nameIndex3'];
    $select=$_POST['savol_javob'];
    if($savol && $togri_javob && $a && $b && $c){
		 $bool=false;
		 $file_name = 'yuklash/text_1.txt';
         $file = fopen($file_name, 'w'); 
         foreach ($savol as $key => $value) {
		 	if($savol[$key] && $a[$key] && $b[$key] && $c[$key] && $select[$key]){
				fwrite($file, $savol[$key].';');
				fwrite($file, $a[$key].';');
				fwrite($file, $b[$key].';');
				fwrite($file, $c[$key].';');
				fwrite($file, $select[$key].';');
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