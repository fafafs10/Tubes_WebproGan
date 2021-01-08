<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- css -->
  <link rel="stylesheet" href="<?= base_url(); ?>Assets/css/signIn.css">
  <title>
    <?= $judul ?>
  </title>
</head>

<body>
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
    </div>
  </div>
  <!-- End-Jumbotron -->

  <!-- Login -->
  <section class="login-page">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-lg-10 c1">
          <img src="/Assets/images/sony_logo_transparent.png" alt="" style="margin-left: -18px;">
          <h2>Login</h2>
          <form>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <p><a href="#">Forgot Password ?</a></p>
            <div class="form-group" style="float: right;">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End-Login -->

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