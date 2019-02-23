<html>
 <body>
   <form method="GET" action="">
    <label>
       <input type="text" name="count">
       </label>
       <button type="submit">ok</button><br><br>
   </form>
   <form method="POST" action="upload_picture.php" enctype="multipart/form-data">
        <?php
         $cnt=$_GET['count'];
         if(cnt){
         for($index=0; $index < $cnt; $index++){
            echo '<label> <input type="text" name="nameIndex[]"> Picture* 
            <input type="file" name="pictureIndex[]"><br><br>
         </label>';
    };
         echo '<button type="submit">Yuklash</button>';
}
    ?>
    </form>
 </body>
</html>
