<?php include '../templates/header_Penjadwalan.php' ?>
<?php

    //membutuhkan file fungsi_semprop
    require('../fungsi_pendadaran.php');

    //instansiasi objek class Seminar_Proposal
    $akses = new ujian_pendadaran();
    $akses->koneksi();

     session_start();
if($_SESSION['status'] == "login"){
  // menampilkan pesan selamat datang
  //echo "Hai, selamat datang ". $_SESSION['username'];
}else{
  header("location:../index.php");
}

?>

   <!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../templates/navbar_dosen.html' ?>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- /\ambil css penjadwalan -->
    <!-- Tambahan CSS -->
    <link rel="stylesheet" href="../css/style_penjadwalan.css">
    <link rel="stylesheet" href="../css/switches_Penjadwalan.css">

    <style type="text/css" href="../css/tombol_penjadwalan.css"></style>
</head>
<body>
    <br>

    <table align="center" cellpadding="10" width="80%" border="0"  height="10%">
                                    <tr>
                                        <td bgcolor="#B5B5B5" style="width: 100%;height: 100%;border-radius: 20px;padding-top: 20px;padding-bottom: 20px;box-shadow: 0px 0px 5px 2px lightblue">
                                   




    <h2 align="center">Daftar Mahasiswa Bimbingan</h2>
<br>
    
<br><br>

        <table align='center' width='60%'' height='30%' class='table table-striped'>
    <tr align='center' bgcolor="#D3D3D3">
      <th height="50">Nim</th>
      <th height="50" >Nama</th>
      <th height="50">Status</th>
       <th height="50">Lihat Rincian</th>

    </tr>

<?php
$usr=$_SESSION['username'];
      foreach ($akses->lihatstatusmahasiswapendadaran($usr) as $key) {
        


        echo"
       
        

        <tr>
          <td align='center'>$key[nim]</td>
          <td align='center'>$key[nama_mhs]</td>
          <td align='center'>$key[status]</td>
          <td align='center'><a href='lihat_nilai_pendadaran_didosen.php?nim=$key[nim]' class='btn btn-outline-primary' role='button' aria-pressed='true'>Lihat</a></td>
          </tr>
          
        ";


      
    }

        
      ?>

<?php include '../templates/footer_Penjadwalan.php' ?>