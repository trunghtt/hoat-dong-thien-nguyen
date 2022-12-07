<!-- Slideshow + tin nóng -->
<div class="row">
    <div class="col-md-9">
        <div id="slideshow" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                <li data-target="#slideshow" data-slide-to="1"></li>
                <li data-target="#slideshow" data-slide-to="2"></li>
                <li data-target="#slideshow" data-slide-to="3"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $level.IMG;?>slide0.jpg" alt="Slide 0">
                </div>
            <?php
                $slideshow=DP::run_query("SELECT * FROM slideshow limit 1,4",[],2);
                foreach($slideshow as $slide)
                {
            ?>
                <div class="carousel-item">
                    <img src="<?php echo $level.IMG.$slide['anhdaidien'];?>" alt="Slide 1">
                </div>
            <?php
                }
            ?>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#slideshow" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slideshow" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <div class="col-md-3 tinnong">
        <h4 class="bg-danger text-white text-center p-1">Tin nóng</h4>
        <ul>
            <?php
                foreach($tinnong as $tin)
                {
            ?>
            <li><a href="#"><?php echo $tin['tentieude'];?></a></li>
            <?php
                }
            ?>
        </ul>
    </div>
</div>