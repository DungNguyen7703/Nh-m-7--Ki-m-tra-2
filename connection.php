<?php
    $server="localhost";
    $user="root";
    $pass="";
    $dbname="exam2";
    $ocon=new mysqli($server,$user,$pass,$dbname);
    if($ocon->connect_error){
        die("Lỗi kết nối".$ocon->connect_error);
    }
    //echo "Kết nối thành công"
    

?>