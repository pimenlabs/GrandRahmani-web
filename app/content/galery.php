<div class="row">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <?php
        $query = mysql_query("select * from slider");
        $jumlah_gambar = mysql_num_rows($query) or die(mysql_error());
        ?>
        <ol class="carousel-indicators">
            <?php
            for ($a = 0; $a < $jumlah_gambar; $a++) {

                echo "<li data-target=\"#carousel-example-generic\" data-slide-to=\"$a\" class=";
                if ($a == 0)
                    echo "active";
                echo "></li>";
            }
            ?>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <?php
            $bantu = 1;
            while ($fetch_slide = mysql_fetch_array($query)) {
                ?><div class="item <?php if ($bantu == 1) echo "active" ?>">
                    <img src="./asset/img/slider/<?php echo $fetch_slide['gambar'] ?>" style="margin:auto;height:300px;" alt="...">
                    <div class="carousel-caption">

                        <?php echo $fetch_slide['caption'] ?>

                    </div>
                </div>
                <?php
                $bantu++;
            }
            ?>

        </div>


        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

</div>


<?php
$dataperhalaman = 8;
if (isset($_GET['page'])) {
    $halaman = $_GET['page'];
} else{
    $halaman = 1;
}
    $dataawal = ($halaman - 1) * $dataperhalaman;

if (isset($_GET['tipe'])) {
    $tipe = $_GET['tipe'];
    $query2 = mysql_query("select * from galeri where tipe='$tipe'") or die(mysql_error());
    $query_rumah = mysql_query("select * from galeri where tipe='$tipe' limit $dataawal,$dataperhalaman")or die(mysql_error());
    $link = "index.php?content=galery&tipe=$tipe";
} else {
    $tipe = "";
    $link = "index.php?content=galery";
    $query2 = mysql_query("select * from galeri");
    $query_rumah = mysql_query("select * from galeri limit $dataawal,$dataperhalaman");
}
if(mysql_num_rows($query2)!=0){
$jumlah_data = mysql_num_rows($query2) ;   
}else {
$jumlah_data=0;
}

$jumlah_halaman = ceil($jumlah_data / $dataperhalaman);
?>
<div class="row">
    <div class="col-md-10">
        <div class="page-header"> <h3>Browse All Categories</h3></div>
        <?php
        if($jumlah_data==0){
            echo "<div class=\"alert alert-danger\">
      <strong>Maaf!</strong> Data yang anda cari tidak ada!
    </div>";
        }else
            while ($fetch = mysql_fetch_array($query_rumah)) {	
        ?>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="thumbnail">
                    <img src="./asset/img/gambar/<?php echo $fetch['gambar'] ?>" style="height:200px;"alt="..." >
                    <div class="caption">
                        <p>Type : <?php echo str_replace("_", " ", $fetch['tipe'])?></p>
                        <p><a href="./asset/img/gambar/<?php echo $fetch['gambar'] ?>" download="<?php echo $fetch['gambar'] ?>"class="btn btn-primary" role="button">Download Gambar Ini</a> </p>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
    <div class="col-md-2">
        <div class="page-header">
            <h3>Categories</h3>
        </div>
        <ul class="nav bs-docs-sidenav">
            <li>
                <a href="index.php?content=galery"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> All Categories</a>
            </li>
            <li>
                <a href="index.php?content=galery&tipe=36"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Type 36</a>
            </li>
            <li>
                <a href="index.php?content=galery&tipe=38"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Type 38</a>
            </li>
            <li>
                <a href="index.php?content=galery&tipe=45"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Type 45</a>
            </li>
            <li>
                <a href="index.php?content=galery&tipe=60"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Type 60</a>
            </li>
            <li>
                <a href="index.php?content=galery&tipe=Progres"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Progres</a>
            </li>
        </ul>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <ul class="pagination">

            <?php
            if ($halaman > 1) {
                echo "<li><a href=\"$link&page=" . ($halaman - 1) . " \"><<<</a></li>";
            } else {
                echo "<li class=disabled><a href=#><<<</a></li>";
            }
            for ($a = 1; $a <= $jumlah_halaman; $a++) {
                if ($halaman == $a)
                    $aktif = "class=\"active\"";
                else
                    $aktif = "";
                echo "<li $aktif><a href=\"$link&page=$a\">$a</a></li>";
            }

            if ($halaman < $jumlah_halaman)
                echo "<li><a href=\"$link&page=" . ($halaman + 1) . " \">>>></a></li>";
            else
                echo "<li class=disabled><a href=#>>>></a></li>";
            ?>


        </ul>
    </div>
</div>
