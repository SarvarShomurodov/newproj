<html>
    <head>
        <title>PHP with forms</title>
    </head>
    <body>
        <form action="" method="GET">
            <table>
        <tr>
          <td>
            Ism:
          </td>
          <td>
            <input  type="text" placeholder="ismingiz" name="ism">
          </td>
        </tr>
        <tr>
          <td>
            Familya:
          </td>
          <td>
            <input  type="text" placeholder="familya" name="familya">
          </td>
        </tr>
        <tr>
          <td>
            Maktab nomer:
          </td>
          <td>
            <input  type="text" placeholder="son kiriting" name="son">
          </td>
        </tr>
		
		<tr>
          <td>
            Manzili:
          </td>
          <td>
            <input  type="text" placeholder="yashash joyi" name="adress">
          </td>
        </tr>
        
        <tr>
          <td>
            
            <button type="submit" value="Tasdiqlash" >chiqarish</button>
          </td>
        </tr>
      </table>
      </form>
    </body>
</html>

<?php
	echo '<hr><b> Malumotlar:</b><br><br>';
    $name = $_GET['ism'];
    echo 'Ismingiz: <b>'  . $name . '<br>';
	$family = $_GET['familya'];
    echo  '</b>Familyangiz: <b>' . $family . '<br>';
	$son = $_GET['son'];
    echo  '</b>Maktab: <b>' . $son . '<br>';
	$adress = $_GET['adress'];
    echo  '</b>Manzil: <b>' . $adress;
?>