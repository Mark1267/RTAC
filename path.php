<?php 
// die($_SERVER['HTTP_HOST']);
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){  
    $url = "https://";   
}else{ 
    $url = "http://"; 
}  
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];
$LOCAL = strpos($url, 'localhost') ? 1 : 0;
define('ROOT_PATH', realpath(dirname(__FILE__)));
if($LOCAL){
    define('BASE_URL', 'http://localhost/rta');
    define('HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'rtac');
}else{
    define('BASE_URL', 'https://rocktera-assets.com');
    define('HOST', 'localhost');
    define('DB_USER', 'u561911775_Stafen');
    define('DB_PASS', 'GZQ|hj&5T');
    define('DB_NAME', 'u561911775_rockteraasset');
    // strpos($url, 'ttp://') ? header('location:' . BASE_URL) : 0;
}

include('reuseables.php');

?>
