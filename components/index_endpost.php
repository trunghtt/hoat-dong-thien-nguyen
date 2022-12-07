<!-- Công tác giáo dục + phong trào -->
<div class="row mt-4">
    <div class="col-md-8">
        <div class="row mb-3">
            <div class="col-12">
                <div class="title-section">
                    <h4 class="bg-danger p-3 text-white">Công tác giáo dục</h4>
                </div>
            </div>
        </div>
        <div class="row">
        <?php
            foreach($endpost as $post)
            {
        ?>
            <div class="col-md-4 mb-2">
                <div class="card w-100">
                    <img class="card-img-top" src="<?php echo $level.IMG.$post['anhdaidien'];?>"
                        alt="Để trở thành sinh viên năng động cần như thế nào?">
                    <div class="card-body">
                        <a href="<?php echo $level.PAGE?>detail.php?id=<?php echo $post['idbaiviet'];?>"><h5 class="card-title line-clamp-2"><?php echo $post['tieude'];?></h5></a>
                        <p class="card-time"><?php echo $post['ngaygio'];?></p>
                        <p class="card-text line-clamp-3"><?php echo $post['tomtat'];?></p>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row mb-3">
            <div class="col-12">
                <div class="title-section">
                    <h4 class="bg-danger p-3 text-white">Phong trào</h4>
                </div>
            </div>
        </div>
        <div class="row">
        <?php
            foreach($noibat as $post)
            {
        ?>
            <div class="col-md-12 mb-2">
                <div class="card w-100">
                    <div class="row">
                        <div class="col-5">
                            <img class="card-img-top" src="<?php echo $level.IMG.$post['anhdaidien'];?>"
                                alt="Để trở thành sinh viên năng động cần như thế nào?">
                        </div>
                        <div class="col">
                            <div class="card-body p-0">
                            <a href="<?php echo $level.PAGE?>detail.php?id=<?php echo $post['idbaiviet'];?>"><h4 class="card-title"><h6 class="card-title line-clamp-2"><?php echo $post['tieude'];?></h6></a>
                                <p class="card-time"><?php echo $post['ngaygio'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>

    </div>
</div>