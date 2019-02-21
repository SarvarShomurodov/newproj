<html>
<head>
    <title>second</title>
</head>
<body>
<form action="upload_txt.php" method="POST" enctype="multipart/form-data">
    <label>
    <input required type="file" name="txt">
        </label>
    <button type="submit">yuklash</button>
    </form>
<form action="upload_mp3_mp4.php" method="POST" enctype="multipart/form-data">
    <label>
        <input required type="file" name="video">
    </label>
    <button type="submit">yuklash</button>

</form>
<?php
//1. 3 ta massiv berilgan, ular ichida faqat integer qiymatlar mavjud. Ularni birlashtiring va tartiblang.
//2. Anonim funskiya yordamida 2 ta argumetnda massiv keladi,
//2 ta massivning key (kalit)  bir xil bo'lgan massiv elementlarini qoshib qaytaring
//(return da massiv qaytishi kerak).
//3. 3 ta project yarating fayl yuklash bo'yicha.
//3.1 Office tipdagi fayllar yuklansin (PSF, MSC OFFICE (XLS,XLSX, DOC,DOCX))
//3.2 CSV va TXT fayllar yuklansin.
//3.3. MP3 va MP4 fayllar yuklansin va mp3 fayl mp3 papkaga tushsin. mp4 fayl mp4 papkaga yuklansin.
function massiv_javob($array)
{
    foreach($array as $arr){
        echo $arr;
        echo " ";
    }
};
$array1=[10,20,30,40];
$array2=[21,20,30,20];
$array3=[45,2,35,40];
$array=array();
$array=array_merge($array1,$array2,$array3);
echo "massivning asil korinishi <br>";
massiv_javob($array);
echo "<br>";
echo "tartiblangandan keyingi korinish <br>";
sort($array);
massiv_javob($array);
?>
</body>
</html>