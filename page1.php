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


<html>

<head>
    <!-- For Realtime Refresh -->
    <meta http-equiv="refresh" content="10">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hapus2.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Nanra Sukedy Hasibuan" />
    <link rel="icon" type="image/png" href="img/fav.png" />
    <title>Data Leaf Area Meter</title>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/jquery.inputmask.bundle.js"></script>
</head>

<body>
    <ul class="nav nav-tabs  container">
        <li role="presentation">
            <a href="index.php">
                <h4>Data Sementara</h4>
            </a>
        </li>
        <li role="presentation" class="active">
            <a href="page1.php">
                <h4>Data Utama</h4>
            </a>
        </li>
    </ul><br>

    <div class="container">
        <h2>Data Leaf Area Meter Utama</h2> <br>
        <table id="pegawai_grid" class="table table-condensed table-bordered table-hover table-striped bootgrid-table" width="60%" cellspacing="0">
            <thead>
                <tr>
                    <th style="width:100px;"><input type="checkbox" id="pilih_semua"> &nbsp;Semua</th>
                    <th class="text-left">Nomor</th>
                    <th class="text-center">Nama Daun</th>
                    <th class="text-center">Luas</th>
                    <th class="text-center">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
            $res = $MySQLiconn->query("SELECT * FROM utama");
		while( $rows = mysqli_fetch_assoc($res) ) {
            $no++;
		?>
                    <tr id="<?php echo $rows['id']; ?>">
                        <td><input type="checkbox" class="pgw_checkbox" data-pwg-id="<?php echo $rows['id']; ?>"></td>
                        <td class="text-left">
                            <?php echo $no; ?>
                        </td>
                        <td class="text-left">
                            <?php echo $rows["nama"]; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $rows["totalluas"]; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $rows["totaljumlah"]; ?>
                        </td>
                    </tr>
                    <?php
		}
		?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-3 well">
                <span class="baris_dipilih" id="jumlah_pilih">0 Dipilih</span>
                <a type="button" id="hapus_record" class="btn btn-primary pull-right">Hapus</a>
            </div>
        </div>
    </div>

    <br>
    <br>

    <?php require_once "view/footer.php"; ?>