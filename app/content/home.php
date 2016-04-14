<div style="margin-right:-15px;margin-left:-15px;">
<?php
$query_rumah=mysql_query("select * from home");

$jumlah_gambar=mysql_num_rows($query_rumah);
$bant=1;
?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <ol class="carousel-indicators">
 <?php 
for ($i=0; $i < $jumlah_gambar; $i++) { 
    # code...

 ?>   


    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i;?>" class="<?php if($i==0)echo "active"?>"></li>
 <?php
}
?> 

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php
    while ($fetch=mysql_fetch_array($query_rumah)) {
            
    ?>

    <div class="item <?php if($bant==1) echo "active"?>">
      <img src="./asset/img/home/<?php echo $fetch['gambar']?>" alt="...">
      <div class="col-md-5 carousel-caption" style="float:left;left:5%;text-align:left;top:10%;" >
        <h1 style="font-weight:bold;text-transform:uppercase;margin-bottom:0px;"><?php echo $fetch['judul']?></h1>
        <p style="font-weight:bold;text-shadow: 0px 0px 1px black;font-size:18px;background: rgba(0, 0, 0, 0.3);border-radius:10px"><?php echo $fetch['text']?></p>
      </div>
    </div>
    <?php
$bant++;
}
    ?>
  </div>

  <!-- Controls -->
 <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>
</div>