<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <title>Document</title>
</head>
<body>

<!-- navbar -->
<nav style="background-color: lightgrey;" class="navbar navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistem Penilaian</a>
  </div>
</nav>

<!-- konten -->
<div class="container mt-5">
    <div class="row">
    <div class="col"><h2>Form Nilai Siswa</h2><hr></div>
</div>
    <div class="row justify-content-center">
    <div class="col-md-8">
        <form method="get" action="form_nilai.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
            </div>
            </div>
            
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required="required">
                    <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                    <option value="Basis Data I">Basis Data I</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                </select>
            </div>
            </div>
            
            <div class="form-group row">
                <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-4">
                <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control" required="required">
            </div>
            </div>
            
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-4">
                <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control" required="required">
            </div>
            </div>

            <div class="form-group row">
                <label for="tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
            <div class="col-4">
                <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" required="required" class="form-control">
            </div>
            </div>
            
            <div class="form-group row">
                <label style="color: grey;" class="col-12 col-form-label">*Klik simpan untuk melihat data siswa</label> 
            </div>
            
            <div class="form-group row">
            <div class="col">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </form>

<!-- PHP -->
<?php if( isset($_GET["submit"]) ): ?>
    <hr><br>
    <p>Nama        : <?= $_GET["nama"]; ?></p>
    <p>Mata Kuliah : <?= $_GET["matkul"]; ?></p>
    <p>Nilai UTS   : <?= $_GET["uts"]; ?></p>
    <p>Nilai UAS   : <?= $_GET["uas"]; ?></p>
    <p>Nilai Tugas : <?= $_GET["tugas"]; ?></p><br>
<?php endif; ?>

</div>
</div>
</div>

<!-- footer -->
<footer style="background-color: lightgrey;" class="fixed-bottom">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a class="text-black fw-bold" href="https://api.whatsapp.com/send?phone=6281393439765&text=udah liat semuanya, kerenn 😚">Ammar Ayyasy</a></p>
    </footer>
    
</body>
</html>