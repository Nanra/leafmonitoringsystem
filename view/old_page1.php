<?php require_once "fungsi/db.php"; ?>
<?php require_once "view/header.php"; ?>
<?php require_once "view/navbar.php"; ?>

<!-- Bagian Isi -->

<!-- Bagian Table -->
<div class="container">
    <h3 class="center">Data Utama Leaf Meter Area</h3>
    <table class="striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Luas</th>
                <th>Jumlah</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            <?php
            $no = 0;
        
        $res = $MySQLiconn->query("SELECT * FROM utama");
        while($row=$res->fetch_array())
        { $no++;
        
        ?>
                <tr>
                    <td>
                        <?php echo $no; ?>
                    </td>
                    <td>
                        <?php echo $row['nama']; ?>
                    </td>
                    <td>
                        <?php echo $row['totalluas']; ?>
                    </td>
                    <td>
                        <?php echo $row['totaljumlah']; ?>
                    </td>
                    <td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('Yakin Untuk Menghapus !');">Delete</a></td>
                </tr>
                <?php
}
            ?>
        </tbody>
    </table>

</div>
<!-- Penutup Table -->


<?php require_once "view/footer.php"; ?>