<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_nilai</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light bg-light" >
      <div class="container">
        <a class="navbar-brand" href="#">
          <p>Form Nilai Siswa</p>
        </a>
      </div>
    </nav>
    <!-----------------------Pemisah------------------------>
<div class="formm1">
  <div class="bag1">
  <form class="form-horizontal" method="POST" action="nilai_siswa.php">
        Nama Lengkap : <input type="text" class="isi" name="nama" value="" size="30"/><br><br>
        Mata Kuliah :
        <select name="matkul" class="isi" >
            <option value="DDP">Dasar-Dasar pemrograman</option>
            <option value="BDI">Basis data </option>
            <option value="WEB1">Pemrograman Web</option>
        <select><br><br>
        Nilai UTS : <input type="text" class="isi" name="nilai_uts" value="" size="6" /><br><br>
        Nilai UAS : <input type="text" class="isi" name="nilai_uas" value="" size="6" /><br><br>
        Nilai Tugas/Praktikum : <input type="text" class="isi" name="nilai_tugas" value="" size="6"/><br><br>
        <input type="submit" class="tombol" value="Simpan" name="proses"/>
    </form>
  </div>
 </div>
</div>
<div class="kaki">
    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/"></a>
  </div>
  <!-- Copyright -->
</footer> 
</div>
</body>
</html>