<?php
if($_FILES['txt']) {
    $video = $_FILES['txt'];
        if ($video['type'] == 'text/plain' || $video['type'] == 'application/vnd.ms-excel') {
        $upload_dir = 'uploads';
        $fileName = uniqid() . '_' . $video['name'];
        move_uploaded_file($video['tmp_name'], $upload_dir . DIRECTORY_SEPARATOR . $fileName);
        echo 'fayl yuklandi';
    }
    else {

            echo 'Fayl txt/csv farmatda bolishi kerak!';
        }
        }
    else {
            echo 'fayillar kelmadi';


}
?>