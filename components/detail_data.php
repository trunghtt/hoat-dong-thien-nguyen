<?php
    $idbaiviet=$_GET['id'];
    $baivietchitiet=DP::run_query("SELECT * FROM baiviet WhERE idbaiviet=?",[$idbaiviet],2);
    $baivietlienquan=DP::run_query("SELECT * FROM baiviet limit 0,5",[],2);
    $dsbinhluan=DP::run_query('SELECT * FROM binhluan WHERE binhluan.idbaiviet=?',[$idbaiviet],2);
?>