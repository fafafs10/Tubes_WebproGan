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
            Form Insert Data camera
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
              </div>
              <div class="form-group">
                <label for="tipe">Type</label>
                <select class="form-control" id="tipe" name="tipe">
                  <option value="Interchangeable-lens Cameras">Interchangeable-lens Cameras</option>
                  <option value="Lenses">Lenses</option>
                  <option value="Compact Cameras">Compact Cameras</option>
                  <option value="Professional Video Cameras">Professional Video Cameras</option>
                  <option value="Cinema Line Cameras">Cinema Line Cameras</option>
                  <option value="Accessories">Accessories</option>
                </select>
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga">
                <small class="form-text text-danger"><?= form_error('harga'); ?></small>
              </div>
              <br>
              <button type="submit" name="insert" class="btn btn-primary float-right">Insert Data</button>
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