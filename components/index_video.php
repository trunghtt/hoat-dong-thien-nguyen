<!-- Tiêu đề Video hoạt động -->
<div class="row mt-4 mb-3">
    <div class="col-12">
        <div class="title-section">
            <h4 class="bg-danger p-3 text-white">Video hoạt động</h4>
        </div>
    </div>
</div>
<!-- Slideshow video-->
<div class="row">
    <div class="col-md-12">
        <div id="slideshowVideo" class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                    <?php
                        foreach($videopost as $post)
                        {
                    ?>
                        <div class="col-4">
                            <video controls class="w-100">
                                <source src="<?php echo $level.VIDEO.$post['video'];?>" type="<?php echo $level.VIDEO;?>mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                    <?php
                        foreach($videopost as $post)
                        {
                    ?>
                        <div class="col-4">
                            <video controls class="w-100">
                                <source src="<?php echo $level.VIDEO.$post['video'];?>" type="<?php echo $level.VIDEO;?>mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#slideshowVideo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slideshowVideo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>