<?php
global $MySQLiconn;

include_once 'db.php';

/* Untuk Masukkan Data */
if(isset($_POST['save']))
{

     $nim = $MySQLiconn->real_escape_string($_POST['nim']);
     $penulis = $MySQLiconn->real_escape_string($_POST['penulis']);
     $judul = $MySQLiconn->real_escape_string($_POST['judul']);
     $pembimbing = $MySQLiconn->real_escape_string($_POST['pembimbing']);
	
	 $SQL = $MySQLiconn->query("INSERT INTO ta(judul,nim,penulis,pembimbing) VALUES('$judul','$nim','$penulis','$pembimbing')");
	 
	 if(!$SQL)
	 {
		 echo $MySQLiconn->error;
	 } 
}
/* Penutup Masukkan Data */



/* Untuk Hapus Data */
if(isset($_GET['del']))
{
	$SQL = mysqli_query($MySQLiconn,"DELETE FROM sementara WHERE id=".$_GET['del']);
	header("Location: index.php");
}
/* Penutup Hapus Data */



/* Untuk Hapus Semua Data */
if(isset($_GET['delall']))
{
	$SQL = mysqli_query($MySQLiconn,"DELETE * FROM sementara");
	header("Location: index.php");
}
/* Penutup Hapus Semua Data */




/* Untuk Penutup Data */
if(isset($_GET['edit']))
{
	$SQL = mysqli_query($MySQLiconn,"SELECT * FROM ta WHERE id=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
	$SQL = mysqli_query($MySQLiconn,"UPDATE ta SET judul='".$_POST['judul']."', nim='".$_POST['nim']."' , penulis='".$_POST['penulis']."' , pembimbing='".$_POST['pembimbing']."' WHERE id=".$_GET['edit']);
    
	header("Location: index.php");
}
/* Penutup Update Data */

?>