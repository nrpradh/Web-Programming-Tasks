<!DOCTYPE html>

<?php
  $judul = "Formulir Input Data Karyawan";
?>

<html lang="en">
<head>
  <title><?= $judul; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2><?php echo $judul ?></h2>
  <form action="simpandata.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="namadepan">Nama depan:</label>
      <input type="namadepan" class="form-control" id="namadepan" placeholder="Input nama depan" name="namadepan">
    </div>
    <div class="mb-3 mt-3">
      <label for="namabelakang">Nama belakang:</label>
      <input type="namabelakang" class="form-control" id="namabelakang" placeholder="Input nama belakang" name="namabelakang">
    </div>
    <button type="submit" class="btn btn-primary" name="tombol">Submit</button>
  </form>
</div>

</body>
</html>