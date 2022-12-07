<?php
    include("../config.php");
    $level=L1;
    include($level.LIB."db.php");
    $nguoidang=$_GET['nguoidang'];
    $noidungbinhluan=$_GET['noidungbinhluan'];
    $idbaiviet=$_GET['idbaiviet'];
    $result=DP::run_query("INSERT INTO binhluan(nguoidang,noidung,ngaydang,trangthai,idbaiviet)value(?,?,NOW(),?,?)",
    [$nguoidang,$noidungbinhluan,1,$idbaiviet],3);
?>