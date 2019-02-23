<!DOCTYPE html>
<html>
<head>
    <title>Picture</title>
</head>
<body>
<?php
        $nameStudents = $_POST['nameIndex'];// studentlar nomi massivga yuklandi
        $namePicture = $_FILES['pictureIndex']; // rasmlar nomi massivga yuklandi
        // var_dump($picturesName);
        if($nameStudents){
           foreach ($namePicture['type'] as $key => $ism) {           
                if ($namePicture['type'][$key]){
                    if($namePicture['type'][$key] == 'image/jpeg'){
                        if($nameStudents[$key]){
                            $fileType = '.jpg';
                            $upload_dir = 'Picture';
                            $fileName = $nameStudents[$key] . $fileType;
                            move_uploaded_file($namePicture['tmp_name'][$key], $upload_dir . DIRECTORY_SEPARATOR . $fileName);
                           echo 'fayl yuklandi';
                           }
                    }
                    else {
                    echo 'fayl boshqa formatda <br>';
                    }
                }
             }

        }

        else {
            echo 'fayl kelmadi';
        }
    ?>

</body>
</html>
    