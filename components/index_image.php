<!-- Tiêu đề Hình ảnh hoạt động	 -->
<div class="row mt-4 mb-3">
    <div class="col-12">
        <div class="title-section">
            <h4 class="bg-danger p-3 text-white">Hình ảnh hoạt động</h4>
        </div>
    </div>
</div>
<!-- Slideshow hình ảnh-->
<div class="row">
    <div class="col-md-12">
        <div id="slideshowHinhAnh" class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                    <?php
                        foreach($img as $post)
                        {
                    ?>
                        <div class="col">
                            <img src="<?php echo $level.IMG.$post['hinhanh'];?>" alt="Hình 0">
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                    <?php
                        foreach($img as $post)
                        {
                    ?>
                        <div class="col">
                            <img src="<?php echo $level.IMG.$post['hinhanh'];?>" alt="Hình 0">
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#slideshowHinhAnh" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slideshowHinhAnh" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>