<html>
	<head>
		<body>
			<form action="" method="GET">
				<label>
					<input style="width: 200px" type="text" name="cnt">
				</label>
				<button type="submit">Ok</button><br><br>
			</form>
			<form action="sarvar2.php" method="POST" enctype="multipart/form-data">
				<?php
    				$cnt = $_GET['cnt'];
    				if($cnt){
    					for ($id = 0; $id < $cnt; $id++){
							echo '<table style="border:2px solid"><tr><td>
								<input style="width: 400px" placeholder="savollar" type="text"  name="nameIndex[]">  <br><br>
														
								<input style="width: 50px" placeholder="a." type="text"  name="nameIndex1[]"> &nbsp 

								<input style="width: 50px" placeholder="b." type="text"  name="nameIndex2[]"> &nbsp  

								<input style="width: 50px" placeholder="c." type="text"  name="nameIndex3[]">  &nbsp 

								<input style="width: 100px" placeholder="tog`ri javob" type="text"  name="nameIndex4[]"> <br><br> <br><br> 
					
							</td></tr></table>';
						}
    					echo '<button type="submit">Yuklash</button>';
					}
				?>
			</form>
		</body>
	</head>
</html>