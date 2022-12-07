<?php
    $toppost=DP::run_query("SELECT * FROM baiviet ORDER BY RAND() limit 1,4",[],2);
    $midpost=DP::run_query("SELECT * FROM baiviet ORDER BY RAND() limit 1,4",[],2);
    $endpost=DP::run_query("SELECT * FROM baiviet ORDER BY RAND() limit 1,6",[],2);
    $img=DP::run_query("SELECT * FROM hinhanh_video ORDER BY RAND() limit 0,3",[],2);
    $noibat=DP::run_query("SELECT * FROM baiviet ORDER BY RAND() limit 1,5",[],2);
    $tinnong=DP::run_query("SELECT * FROM tieude ORDER BY RAND()",[],2);
    $slideshow=DP::run_query("SELECT * FROM slideshow ORDER BY RAND() limit 1,3",[],2);
    $videopost=DP::run_query("SELECT * FROM hinhanh_video limit 0,3",[],2);
?>