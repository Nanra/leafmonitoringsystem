<?php require_once "fungsi/db.php"; ?>
<?php require_once "view/header.php"; ?>
<?php require_once "view/navbar.php"; ?>



<!-- Bagian Isi -->

<!-- Bagian Table -->
<div class="container">
    <h3 class="center">Data Leaf Meter Area Sementara</h3>
    
    <?php 
include 'fungsi/db.php';
$makanan = $_POST['pilih'];
$jumlah_dipilih = count($makanan);
 
for($x=0;$x<$jumlah_dipilih;$x++){
	mysqli_query("DELETE FROM sementara WHERE id='$makanan[$x]'");
}
 
//header("location:index.php");
?>
    
    
    <form action="index.php" method="post">
    <table class="striped">
        <thead class="grey lighten-2">
            <tr>
                <th class="center">No</th>
                <th class="center">Luas</th>
                <th class="center">Jumlah</th>
                <th class="center">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 0;
            $tluas = 0;
            $tjumlah = 0;
        
        $res = $MySQLiconn->query("SELECT * FROM sementara");
        while($row=$res->fetch_array())
        { $no++;
         $tluas = $tluas + $row['luas'];
         $tjumlah = $tjumlah + $row['jumlah'];
        
        ?>
                <tr>
                    <td class="center">
                        <?php echo $row['id']; ?>
                    </td>
                    <td class="center">
                        <?php echo $row['luas']; ?>
                    </td>
                    <td class="center">
                        <?php echo $row['jumlah']; ?>
                    </td>
                    <td class="center">
                    <input class="filled-in" id="test<?php echo $row['id'];?>" type="checkbox" name="pilih[]" value="<?php echo $row['id']; ?>" /> 
                    <label for="test<?php echo $row['id'];?>"></label>
                    </td>
<!--                    <td class="center"><a href="?del=?php echo $row['id']; ?>" onclick="return confirm('Yakin Untuk Menghapus !');">Delete</a></td>-->
                </tr>
                <?php
        }
            ?>
        </tbody>

        <thead>
            <th class="grey lighten-1" colspan="4"></th>
        </thead>

        <thead>
            <th class="center">Total</th>
            <td class="center">
                <?php echo $tluas; ?> </td>
            <td class="center">
                <?php echo $tjumlah; ?> </td>
            <td class="center">
            <input type="submit" name="hapus" value="Hapus">
<!--            <a href="?delall=all data" onclick="return confirm('Yakin Untuk Menghapus Semua Data !');">Delete All</a>-->
            </td>
        </thead>

    </table>
    </form>

</div>
<!-- Penutup Table -->
<?php require_once "view/footer.php"; ?>