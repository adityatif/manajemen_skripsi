<?php include '../templates/header_Penjadwalan.php' ?>
<?php
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
    <!-- Content -->
        <div class="container"> 
            <!-- Box -->
            <div class="row mt-5 ">
                <div class="col-2">
                </div>
                <div class="col-8 box2 bg-two">
                    <div class="row">
                        <div class="col-10 mt-3 mb-3">
                            <p class="judul">Ujian Pendadaran</p>
                        </div>
                    </div>
                    <form action="hasil_pencarian_PD_diadmin.php" method="POST">
                        <div class="row">
                            <div class="col-2 ml-3 pt-1">
                                <p class="pone">NIM :</p>
                            </div>
                            <div class="col-6">
                                <input type="number" name='nim' placeholder='Masukkan NIM' class="form-control in-box" id="search_nim">
                            </div>
                            <div class="col-2 mb-5">
                                <button type="submit" name="submit11" value="Submit" class="butn butn2 ml-2" onclick="if($('#search_nim').val()==''){swal('Konfirmasi','NIM tidak boleh kosong!','warning'); return false;}">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-2 ">
            </div>
        </div>
    
    </body>
</html>
        

<?php include '../templates/footer_Penjadwalan.php' ?>
