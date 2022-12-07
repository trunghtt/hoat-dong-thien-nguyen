<div class="container mt-3">
    <!-- Điều hướng -->
    <div class="row">
        <div class="col-12">
            <ul class="breadcrumb">
                <li><a href="#">Hoạt động</a></li>
                <li><a href="#">Chiến dịch tình nguyện hè</a></li>
            </ul>
        </div>
    </div>
    <!-- Bài viết chi tiết và bài viết liên quan -->
    <div class="row mt-3">
        <!--Bài viết chi tiết-->
        <div class="col-lg-9 single-post">
            <?php
                foreach($baivietchitiet as $post)
                {
            ?>
            <img src="<?php echo $level.IMG.$post['anhdaidien'];?>" alt="Để trở thành sinh viên năng động cần như thế nào?" class="post-thumb w-100">
            <h1 class="title"><?php echo $post['tieude'];?></h1>
            <div>
                <span class="author"><i class="fas fa-user"></i><?php echo $post['tacgia'];?></span> <span class="time"><i
                    class="far fa-calendar-check"></i><?php echo $post['ngaygio'];?></span>
            </div>
            <!-- Nội dung bài viết -->
            <div class="content mt-4">
                <?php echo $post['noidung'];?>
            </div>
            <?php
                }
            ?>