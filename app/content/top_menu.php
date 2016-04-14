<header class="navbar navbar-default" id="atas" role="navigation" style="margin-bottom:0px;border-color:#EB0101">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?content=home" id="tulisan_atas" style="font-family:Rockwell;font-weight:bold">Grand Rahmani</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php?content=home" id="tulisan_atas">Home</a></li>
                <li><a href="index.php?content=galery" id="tulisan_atas">Galeri</a></li>
                <?php
                if (!empty($_SESSION['user2323'])) {
                    ?>

                    <li><a href="index.php?content=status" id="tulisan_atas">Status</a></li>
                    <?php
                }
                ?>
                <li><a href="index.php?content=site_plan" id="tulisan_atas">Site Plan</a></li>  
                <li><a href="index.php?content=contact" id="tulisan_atas">Contact Us</a></li>
                <?php
                if (empty($_SESSION['user2323'])) {
                    ?>
                    <li><a href="index.php?content=login" id="tulisan_atas">Login</a></li>
                    <?php   
                }
                    ?>
                <li><a href="./asset/img/brosur/Brosur.jpg" Download="brosur.jpg"id="tulisan_atas">Download Brosur</a></li>
            </ul>
                <?php
                if (!empty($_SESSION['user2323'])) {
                    ?>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Marketing <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Edit Akun</a></li>
                                <li><a href="logout.php">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php
                }
                ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</header>
