<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title><?= $judul ?></title>
</head>

<body>
  <div class="container">
    <div class="row mt-3">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center">
            Form Edit Data camera
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <input type="hidden" name="id_camera" value="<?= $camera['id_camera']; ?>">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $camera['nama']; ?>">
                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $camera['deskripsi']; ?>">
                <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
              </div>
              <div class="form-group">
                <label for="tipe">Type</label>
                <select class="form-control" id="tipe" name="tipe">
                  <?php foreach ($tipe as $t) : ?>
                    <?php if ($t == $camera['tipe']) : ?>
                      <option value="<?= $t; ?>" selected><?= $t; ?></option>
                    <?php else : ?>
                      <option value="<?= $t; ?>"><?= $t; ?></option>
                    <?php endif ?>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="<?= $camera['harga']; ?>">
                <small class="form-text text-danger"><?= form_error('harga'); ?></small>
              </div>
              <br>
              <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>