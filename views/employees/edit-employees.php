<?php

include '../../model/Employees.php';

$id = $_GET['id'];
$pegawai = getEmployeesByID($id);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../_includes/header.php';
  ?>
  <!-- Custom Style -->
  <link rel="stylesheet" href="../../css/outlet.css">

</head>

<body id="body-pd">

  <?php
  // $title = 'Outlets';
  include '../_includes/side.php';
  ?>

  <!-- Content Boody -->
  <main>
    <!-- Coding disini -->
    <div class="container">
      <!-- start add outlets -->
      <h1>Edit Pegawai</h1>

      <form action="../../controller/employees/update.php" class="form" method = "POST" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $pegawai['id']; ?>">

        <label> Nama </label>
        <input type="text" name="nama" id="" class="form-control" value="<?= $pegawai['nama']; ?>"/>

        <label> Username </label>
        <input type="text" name="username" id="" class="form-control" value="<?= $pegawai['username']; ?>"/>

        <label> Password </label>
        <input type="password" name="password" id="" class="form-control" value="<?= $pegawai['password']; ?>"/>
        
        <label> Role </label>
        <select name="role" id="role" class="form-control"> 
            <option selected>Select role</option>
            <option value="Admin" <?= $pegawai['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
            <option value="Kasir" <?= $pegawai['role'] == 'kasir' ? 'selected' : '' ?>>Kasir</option>
        </select>

        <label> Outlet </label>
        <select name="outlet" id="outlet" class="form-control"> 
            <option selected>Select outlet</option>
            <option value="OT01" <?= $pegawai['outlet_id'] == 'OT01' ? 'selected' : '' ?>>Bandung</option> 
            <option value="OT02" <?= $pegawai['outlet_id'] == 'OT02' ? 'selected' : '' ?>>Jakarta</option>
        </select>

        <input type="hidden"name="file_gambar"value="<?=$pegawai['gambar'];?>">
        <label> Gambar </label>
        <img src="../../img/employees/<?=$pegawai['gambar'];?>" alt=""style="display:block;width:450px;height:300px;margin-bottom:1rem;">
        <input type="file" name="gambar" id="inputFile" class="form-control" />
        <i style="color:red;">*Abaikan jika tidak ingin mengubah gambar</i>
        <div class="image-preview" id="imagePreview">
          <img class="image_preview" src="" alt="Image Preview" />
          <span class="image-preview_text">Image Preview</span>
        </div>
          <button type="button" class="btn" onclick="history.back()" style="margin-right: 20px">Batal</button>
          <button type="submit" class="btn btn-primary" >Simpan</button>
          <a href="../../controller/employees/delete.php?id=<?= $pegawai['id']; ?>&gambar=<?=$pegawai['gambar'];?>" class="btn btn-danger" style="float: right;">Hapus</a>
      </form>
    
    </div>

    <!-- end container add outlets -->
  </main>
  <!-- End Content Body -->

  <?php
    include '../_includes/footer.php';
  ?>

</body>

</html>