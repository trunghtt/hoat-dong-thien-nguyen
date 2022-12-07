<!-- Bài viết mới nhất	 -->
<div class="row mt-4 mb-3">
    <div class="col-12">
        <div class="title-section">
            <h4 class="bg-danger p-3 text-white">Bài viết mới nhất</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <div class="card w-100">
            <img class="card-img-top" src="<?php echo $level.IMG;?>tin1.jpg"
                alt="Để trở thành sinh viên năng động cần như thế nào?">
            <div class="card-body">
                <h4 class="card-title">Để trở thành sinh viên năng động cần như thế nào?</h4>
                <p class="card-time">10/10/2019 10:10</p>
                <p class="card-text line-clamp-3">Bạn cần nắm bắt đúng thời cơ để trở thành những sinh viên năng
                    động. Một người trẻ năng động sẽ có nhiều cơ hội để học hỏi thêm những điều mới mẻ và có ích
                    cho bản thân. Hiện nay tại các trường Đại học – Cao đẳng đều có các hoạt động ngoại khóa vì
                    thế sinh viên nên tận dụng cơ hội này để có thể chọn cho mình một hoạt động như: thể thao,
                    câu lạc bộ học thuật…</p>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="row">
        <?php
            foreach($toppost as $post)
            {
        ?>
            <div class="col-md-6 mb-2">
                <div class="card w-100">
                    <img class="card-img-top" src="<?php echo $level.IMG.$post['anhdaidien'];?>" alt="Để trở thành sinh viên năng động cần như thế nào?">
                    <div class="card-body pb-1">
                        <a href="<?php echo $level.PAGE?>detail.php?id=<?php echo $post['idbaiviet'];?>"><h6 class="card-title line-clamp-2"><?php echo $post['tieude'];?></h6></a>
                        <p class="card-time"><?php echo $post['ngaygio'];?></p>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
    </div>
</div>