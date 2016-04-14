<?php
$dataperhalaman = 10;
if (isset($_GET['page'])) {
    $halaman = $_GET['page'];
} else
    $halaman = 1;
    $dataawal = ($halaman - 1) * $dataperhalaman;


if (isset($_GET['status'])) {

    $status = $_GET['status'];
    $query2 = mysql_query("select * from rumah where status=$status");
    $query = mysql_query("select * from rumah where status=$status limit $dataawal,$dataperhalaman");
    $link = "index.php?content=status&status=$status";
} else {
    $status = "";
    $link = "index.php?content=status";
    $query2 = mysql_query("select * from rumah");
    $query = mysql_query("select * from rumah limit $dataawal,$dataperhalaman");
}
$jumlah_data = mysql_num_rows($query2);

$jumlah_halaman = ceil($jumlah_data / $dataperhalaman);
?>
<div class="row"><br/>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">        
                <h4>Status</h4>
        </div>
        <section>
        <div class="panel-body"><p>
        View by satus : 
        <label class="radio-inline">
            <input type="radio" id="inlineCheckbox1" value="0" name="status" onclick="fungsiku(0)" <?php if ($status == "") echo "checked" ?>> All
        </label>
        <label class="radio-inline">

            <input type="radio" id="inlineCheckbox1" value="1" name="status" onclick="fungsiku(1)" <?php if ($status == "1") echo "checked" ?>> Available

        </label>

        <label class="radio-inline">
            <input type="radio" id="inlineCheckbox2" value="2" name="status" onclick="fungsiku(2)" <?php if ($status == "2") echo "checked" ?>> Booking

        </label>
        <label class="radio-inline">
            <input type="radio" id="inlineCheckbox2" value="3   " name="status" onclick="fungsiku(3)" <?php if ($status == "3") echo "checked" ?>> Sold
        </label>
        <label>
            <input type="search" class="light-table-filter form-control input-sm" data-table="order-table" placeholder="Cari" />      
        </label>        
        
        </p>
        </div>

        
        

        <table class="table table-striped table-bordered order-table">
            <thead>
                <tr>
                    <th>Kavling</th>
                    <th>Tipe</th>
                    <th>Luas</th>
                    <th>Harga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($fetch = mysql_fetch_array($query)) {
                    if($fetch['status']==1)
                        $color="green";
                    elseif($fetch['status']==2)
                        $color="rgb(255,194,0)";
                    else 
                        $color="red";
                    echo "<tr style=\"color:$color;font-weight:bold\">";
                    echo "<td>" . $fetch['kavling'] . "</td>";
                    echo "<td>" . $fetch['tipe'] . "</td>";
                    echo "<td>" . $fetch['luas'] . "</td>";
                    echo "<td>" . $fetch['harga'] . "</td>";
                    echo "<td>";
                    if ($fetch['status'] == 1)
                        echo "Available";
                    elseif ($fetch['status'] == 2)
                        echo "Booking";
                    else
                        echo "Sold";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>    
        </table>
        </section>

    </div>
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
<div class="row">
    <div class="col-md-12" style="height:100px">
        <h4>Informasi Tambahan</h4>        
        <?php
        $query_informasi = mysql_query("select informasi from information limit 1");
        $fetch_informasi = mysql_fetch_array($query_informasi);
        echo $fetch_informasi[0];
        ?>
    </div>

</div>


<script>
    function fungsiku(b) {
        if (b == 0) {
            window.location.href = "index.php?content=status";
        } else if (b == 1) {
            window.location.href = "index.php?content=status&status=1";
        } else if (b == 2) {
            window.location.href = "index.php?content=status&status=2";
        } else {
            window.location.href = "index.php?content=status&status=3";
        }
    }
</script>