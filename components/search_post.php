<?php
if (isset($_GET['page']))
	$page=$_GET['page'];
else
	$page=1;//khởi tạo trang ban đầu
	$total_record = sizeof($dsbaiviet);//tính tổng số bản ghi select được
	$total_page=ceil($total_record/4);//tính tổng số trang sẽ chia
?>
<div class="container mt-3">
    <!-- Điều hướng -->
    <div class="row">
        <div class="col-12">
            <ul class="breadcrumb">
                <li><a href="#">Hoạt động</a></li>
                <li><a href="#">Chiến dịch tình nguyện hè</a></li>
            </ul>
        </div>
        <div class="col-12">
            <h4 class="font-weight-light text-search">Có <?php echo count($dsbaiviet);?> kết quả</h4>
        </div>
    </div>
    <!-- Danh sách sản phẩm -->
    <div class="row">
    <?php
    foreach($dsbaiviet_ptrang as $post)
        {
    ?>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card w-100">
                <img class="card-img-top" src="<?php echo $level.IMG.$post['anhdaidien'];?>"
                    alt="Để trở thành sinh viên năng động cần như thế nào?">
                <div class="card-body">
                    <a href="<?php echo $level.PAGE?>detail.php?id=<?php echo $post['idbaiviet'];?>"><h4 class="card-title"><?php echo $post['tieude'];?></h4></a>
                    <p class="card-time"><?php echo $post['ngaygio'];?></p>
                    <p class="card-text line-clamp-3"><?php echo $post['tomtat'];?></p>
                </div>
            </div>
        </div>
    <?php
        }
    ?>
    </div>
    <!-- Phân trang -->
    <div class="row mt-4">
        <ul class="pagination justify-content-center w-100">
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Trang trước</a></li>
			<?php for( $i=1;$i<=$total_page;$i++) {?>
            <li <?php if($page == $i) echo "class='page-item active'"; ?>>
				<a class="page-link" href="<?php echo $level.PAGE."search.php?search=".$key."&page=".$i;?>">
					<?php echo $i; ?>
				</a>
			</li>
			<?php } ?>
            
            <li class="page-item"><a class="page-link" href="javascript:void(0);">Trang sau</a></li>
        </ul>
    </div>
</div>