<?php 
/* Coding by : Super Developer
   Design by : Super Developer
   
   Contact Us 
   Twitter   : @sudeveloperid
   Facebook  : @sudeveloperid
   Instagram : @sudeveloperid
   E-mail    : sudev719@gmail.com
*/
require_once "fungsi/db.php";
?>
<html lang="en">

<head>
    <!-- For Realtime Refresh -->
    <meta http-equiv="refresh" content="25">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- Bootstrap css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hapus.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Nanra Sukedy Hasibuan" />
    <link rel="icon" type="image/png" href="img/fav.png" />
    <title>Data Leaf Area Meter</title>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/jquery.inputmask.bundle.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <ul class="nav nav-tabs  container">
        <li role="presentation" class="active">
            <a href="index.php">
                <h4>Data Sementara</h4>
            </a>
        </li>
        <li role="presentation">
            <a href="page1.php">
                <h4>Data Utama</h4>
            </a>
        </li>
    </ul><br>

    <div class="container">
        <h2>Data Leaf Area Meter Sementara</h2> <br>
        <table id="pegawai_grid" class="table table-bordered table-condensed table-hover table-striped bootgrid-table" width="60%" cellspacing="0">
            <thead>
                <tr>
                    <th style="width:100px;"><input type="checkbox" id="pilih_semua">&nbsp;Semua</th>
                    <th class="text-center">Nomor</th>
                    <th class="text-center">Luas Daun</th>
                    <th class="text-center">Jumlah Daun</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                $tluas = 0;
                $tjumlah = 0;
            $res = $MySQLiconn->query("SELECT * FROM sementara");
		while( $rows = mysqli_fetch_assoc($res) ) {
            $no++;
            $tluas = $tluas + $rows['luas'];
            $tjumlah = $tjumlah + $rows['jumlah'];
		?>

                    <tr id="<?php echo $rows['id']; ?>">
                        <td style="width:20px;" class="center"><input type="checkbox" class="pgw_checkbox" data-pwg-id="<?php echo $rows['id']; ?>"></td>
                        <td class="text-center">
                            <?php echo $no; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $rows["luas"]; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $rows["jumlah"]; ?>
                        </td>
                    </tr>
                    <?php
		}
		?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-4 well">
                <h3>Untuk Menghapus Data Daun</h3>
                <span class="baris_dipilih" id="jumlah_pilih"><h4>0 Dipilih</h4></span>
                <br> <br>
                <a href="index.php" type="button" id="hapus_record1" class="btn btn-warning btn-lg pull-right">Hapus</a>
            </div>


            <!-- Table Total Jumlah dan Luas Daun -->
            <div class="col-sm-6 col-md-8 well">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="2">
                                <h3>Total</h3>
                            </th>
                        </tr>
                        <tr>
                            <th class="text-center">Luas</th>
                            <th class="text-center">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <?php echo $tluas; ?> </td>
                            <td class="text-center">
                                <?php echo $tjumlah; ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <!-- Bagian Mengirim Data Ke Database -->
            <div class="col-sm-6 col-md-12 well">
                <form class="form" method="post" action="">
                    <span>
                    <h4>Masukkan Nama Daun : </h4><br> <br><input class="form-control" type="text" name="namadaun" required>
                </span>
                    <br>
                    <span>
                   <button class="btn btn-success btn-info btn-lg" type="submit" name="kirim">Simpan Ke Data Utama</button>
                   </span>
                </form>
            </div>

        </div>
    </div>

    <!-- Script Simpan Data Daun -->
    <?php
    if(isset($_POST['kirim']) ) {
        $nama = $_POST['namadaun'];
        $nama = mysqli_real_escape_string($MySQLiconn, $nama);
        $query = "INSERT INTO utama (nama, totalluas, totaljumlah) VALUES ('$nama','$tluas','$tjumlah')";
        $query2 = "DELETE FROM sementara";
        
        if (!empty(trim($nama))) {
        
        if (mysqli_query($MySQLiconn, $query) ){
            echo "<script>
            
            alert('Data Berhasil Disimpan');
            window.location.href = 'index.php';
            
            </script>";
            mysqli_query($MySQLiconn, $query2);
        }else {
        echo "Data Gagal Disimpan";
        }  
    } else {
        echo "<script>alert('Nama Daun Tidak Boleh Kosong')</script>";
        header('Location: index.php');
        }
        
    }
    ?>
        <br>
        <br>
        <!-- Bagian Footer -->
        <?php require_once "view/footer.php"; ?>