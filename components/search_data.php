<?php
    $search=DP::run_query("SELECT * FROM baiviet ORDER BY RAND() limit 0,8",[],2);

    $key = "%".$_GET['search']."%";
    if(isset($_GET['page']))
        $page=$_GET['page'];
    else 
        $page=1;
    $dsbaiviet=DP::run_query("Select * from baiviet where baiviet.tieude like ?",[$key],2);
    $dsbaiviet_ptrang=DP::run_query("
    Select * from baiviet where baiviet.tieude like ?
    limit ?,?",[$key,($page-1)*4+1,4],2);

    // if(isset($_GET['txtkey']))
    // {
    //     $dstimkiem=DP::run_query('select * from baiviet where tieude like concat(\'%\',?,\'%\') or tieude like concat(\'%\',?,\'%\') ORDER BY RAND()',[$_GET['txtkey'],$_GET['txtkey']],2);
    // }
    // if(isset($_GET['idbaiviet']))
    // {
    //     $dstimkiem=DP::run_query('select * from baiviet where idbaiviet=? ORDER BY RAND()',[$_GET['idbaiviet']],2);
    // }
    // if(isset($_GET['txtkey'])==false && isset($_GET['idbaiviet'])==false)
    // {
    //     header('location:'.$level.'index.php');
    // }
?>