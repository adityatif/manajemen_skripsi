
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
    <?php include '../templates/navbar_admin.html' ?>
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
<?php
  
$nim=$_GET['nim'];

echo "
 <br>
 <table align='center' cellpadding='20' width='65%' border='0'  height='10%'>
                                    <tr>
                                        <td bgcolor='#B5B5B5' style='width: 100%;height: 100%;border-radius: 20px;padding-top: 20px;padding-bottom: 20px;box-shadow: 0px 0px 5px 2px lightblue'>
                                   
                                             <center><h3>Edit Nilai Pendadaran</h3></center>

";
     
      foreach ($akses->UpdateNilaiDanStatusPendadaran2($nim) as $key) {
        
        


        echo"
        
        <br>
        <table align='center'>
        <tr>
        <td width='700px'>
<form method='POST' action='proses_updatependadaran_diadmin.php'>
  <div class='form-group'>
    <label for='formGroupExampleInput'>NIM </label>
    <input name='nim' value='$key[nim]' type='text' readonly class='form-control' id='formGroupExampleInput' placeholder='Example input'>
    <label for='formGroupExampleInput'>NAMA </label>
    <input name='nama' value='$key[nama_mhs]' type='text' readonly class='form-control' id='formGroupExampleInput' placeholder='Example input'>

  </div>
 
        
        
        ";


                    
        echo "
         <label for='formGroupExampleInput'>NILAI PENGUJI 1 </label><input type='number' pattern='[0-9]+' title='Hanya inputan angka' name='nilai_penguji_1' placeholder='Masukkan Nilai' class='form-control in-box' aria-label='Text input with checkbox' value='$key[nilai_penguji_1]' min='0' max='100' required />
         <label for='formGroupExampleInput'>NILAI PENGUJI 2 </label><input type='number' pattern='[0-9]+' title='Hanya inputan angka' name='nilai_penguji_2' placeholder='Masukkan Nilai' class='form-control in-box' aria-label='Text input with checkbox' value='$key[nilai_penguji_2]' min='0' max='100' required />
          <label for='formGroupExampleInput'>NILAI PEMBIMBING </label><input type='number' pattern='[0-9]+' title='Hanya inputan angka' name='nilai_proses_pembimbing' placeholder='Masukkan Nilai' class='form-control in-box' aria-label='Text input with checkbox' value='$key[nilai_pembimbing]' min='0' max='100' required />
      
        
        <br>   <input type='submit' name='kirim1' value='Update' class='btn btn-outline-primary''>    
        

        </form>
        </td>
        </tr>
        </table>      ";


      
    }
      ?>
<?php include '../templates/footer_Penjadwalan.php' ?>


