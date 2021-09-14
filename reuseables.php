<?php 
$reuseables = array(
    "XIMAGE" => array('jpg', 'jpeg', 'png', 'gif'),
    "XVIDEO" => array('mp4', 'mkv', 'avi', '3gp'),
    "XAUDIO" => array('mp3', 'm4a', 'wav', 'opus'),
    "XFILE" => array('txt', 'pdf', 'docx'),
    "MUSER" => 'info@rocktera-assets.com',
    "MPASS" => 'Stafen12345'
);

foreach($reuseables as $key => $value){
    define($key, $value);
}
?>