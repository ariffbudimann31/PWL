<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1e3cfe8117.js" crossorigin="anonymous"></script>

    <title>FORMULIR
    </title>
  </head>
  <body>
    <body>
      <nav id="navbar-exa" class="navbar navbar-expand-lg navbar-light bg- fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand font-weight-bold text-danger" href="index.html.html">MAKARONI LEO</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link js-scroll-trigger text-danger" href="index.html.html"><i class="fas fa-arrow-circle-left">BACK</i><span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
      </nav>
    <div class="container p-5">
      <h2 class="alert alert-primary text-center mt-3">FORM PEMESANAN</h2>
     
      <form method="post" action="simpan.php">
        <div class="form-group">
          <label for="NAMA"> NAMA </label>
          <input type="text" name="NAMA" class="form-control" placeholder="Masukkan Nama" id="NAMA">
          </div>
        <div class="form-group">
          <label>Pilih MENU</label>
          <select name="MENU" class="form-control" >
            <option>MAKARONI</option>
            <option>MIE LIDI</option>
            <option>MIE KREMES</option>
            <option>SEMPOLAN</option>
            <option>BAKSO IKAN</option>
          </select>
        </div>
        <div class="form-group">
          <label>Pilih RASA</label>
          <select name="RASA" class="form-control" >
            <option>PEDAS LVL 1</option>
            <option>PEDAS LVL 2</option>
            <option>PEDAS LVL 3</option>
            <option>PEDAS LVL 4</option>
            <option>PEDAS LVL 5</option>
            <option>ASIN</option>
            <option>BALADO</option>
            <option>BBQ</option>
            <option>JAGUNG BAKAR</option>
            <option>KEJU</option>
          </select>
        </div>
      <div class="form-group">
        <label for="Deskripsi">Deskripsi PESANAN</label>
        <textarea name="DESKRIPSI" class="form-control" id="DESKRIPSI"></textarea>
        <small>Maks. MIX 2 rasa</small>
      </div>
      <div class="form-group">
          <label for="Pengambilan"> Pengambilan </label>
          <input type="date" name="PENGAMBILAN" class="form-control">
          </div>
      <button type="submit" class="btn btn-primary">PESAN</button>
      <button type="reset" class="btn btn-danger">RESET</button>

        </div>
      </form>
      <?php
  include "simpan.php";
  $query=mysqli_query($koneksi,'select * from id15904773_pemesanan');
  while($data=mysqli_fetch_array($query)) {

  $NAMA  = $_REQUEST['NAMA'];
  $MENU  = $_REQUEST['MENU'];
  $RASA  = $_REQUEST['RASA'];
  $DESKRIPSI  = $_REQUEST['DESKRIPSI'];
  $PENGAMBILAN  = $_REQUEST['PENGAMBILAN'];
  };
      ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>