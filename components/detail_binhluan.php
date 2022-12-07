<!-- Bình luận -->
<div class="row mt-4 mb-4 comment">
        <div class="col-12 title pl-0">Bình luận</div>
    <form action="<?php echo $level.COMP.'add_comment.php'?>" method="get" class="col-12 write-comment pl-0 pr-0">
            <div class="input-group mb-3">
                <textarea class="form-control" name="nguoidang" placeholder="Người đăng" rows="3"></textarea>
                <textarea class="form-control" name="noidungbinhluan" placeholder="Nội dung bình luận" rows="3"></textarea>
                <input type="text" name="idbaiviet" hidden="true" value="<?php echo $baivietchitiet[0]['idbaiviet'];?>">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Gửi bình luận</button>
                </div>
            </div>
    </form>
    <?php
        foreach($dsbinhluan as $binhluan)
        {
    ?>
    <div class="col-12 media border p-3">
        <img src="<?php echo $level.IMG;?>img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width: 60px;">
        <div class="media-body">
            <h4><?php echo $binhluan['nguoidang'];?><small><i> Đăng ngày <?php echo $binhluan['ngaydang'];?></i></small></h4>
            <p><?php echo $binhluan['noidung'];?></p>
        </div>
    </div>
    <?php 
        }
    ?>
</div>