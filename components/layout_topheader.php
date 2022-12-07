<!-- Top header -->
<div id="top-header" class="top-header bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <div class="p-2 mr-auto">
                        <img class="img-fluid" src="<?php echo $level.IMG;?>logo.png" alt="logo website">
                    </div>
                    <div class="d-flex p-2 align-items-center">
                        <div class="login mr-md-2 mr-lg-5">
                            <a class="mr-3" href="#">Đăng nhập</a>
                            <a href="#">Đăng ký</a>
                        </div>
                        <div class="search-form">
                            <form action="<?php echo $level.PAGE.'search.php'?>" method="get">
                                <input type="search" id="search" name="search" class="form-control" placeholder="Search" required>
                                <button type="submit" id="idadd"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>