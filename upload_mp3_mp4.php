<?php
if($_FILES['video']) {
    $video = $_FILES['video'];
    if($video['type']=='video/mp4' || $video['type']=='audio/mp3' ) {
        $upload_dir = 'video_music';
        $fileName = uniqid() . '_' . $video['name'];
        move_uploaded_file($video['tmp_name'], $upload_dir . DIRECTORY_SEPARATOR . $fileName);
        echo 'fayl yuklandi';
    }

    else {
        echo 'Fayl  mp4 mp3 farmatda bolishi kerak!';
    }
}
else {
    echo 'fayillar kelmadi';
}
?>