<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- css -->
  <link rel="stylesheet" href="<?= base_url(); ?>Assets/css/register.css">
  <title><?= $judul ?></title>
</head>

<body>
  <!-- Navbar Dropup -->
  <section class="hD">
    <div class="container">
      <div class="hd1" id="headerDropup">
        <div class="row justify-content-end">
          <div class="col-1">
            <button type="button" class="btn text-light" onclick="closeHeader();">Close
              <svg height="12px" width="12px" fill="#FFFFFF" viewBox="0 0 329.26933 329" xmlns="http://www.w3.org/2000/svg">
                <path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0" />
              </svg>
            </button>
          </div>
        </div>
        <div class="row">
          <h3>Sony Sites</h3>
        </div>
        <div class="row rw2">
          <div class="col-4 c1">
            <img src="<?= base_url(); ?>Assets/images/headerDropup-1.webp" style="width: 340px; height: 300px;" alt="SONY GROUP SITE" />
            <p class="primary-caption">SONY GROUP SITE</p>
          </div>
          <div class="col-4 justify-content-around c2">
            <div class="row rwc1">
              <img src="<?= base_url(); ?>Assets/images/headerDropup-2.webp" style="width: 340px ; height: 115px;" alt="SONY GROUP SITE" />
              <p class="primary-caption">SONY DESIGN</p>
            </div>
            <div class="row rwc2">
              <img src="<?= base_url(); ?>Assets/images/headerDropup-3.webp" style="width: 340px ; height: 115px;" alt="SONY GROUP SITE" />
              <p class="primary-caption">PLAYSTATION</p>
            </div>
          </div>
          <div class="col-4 c3">
            <img src="<?= base_url(); ?>Assets/images/headerDropup-4.webp" style="width: 340px ; height: 115px;" alt="SONY GROUP SITE" />
            <p class="primary-caption">SONY PROFESSIONAL</p>
          </div>
        </div>
        <div class="row d-flex m-3 py-3 bg-light rw3">
          <div class="col-3">
            <a class="link-caption" href="">Sony and the Environment</a>
            <p class="text-dark">How we’re reducing our eco-footprint through energy efficiency and recycling initiatives.</p>
          </div>
          <div class="col-3">
            <a class="link-caption" href="">Sony Pictures</a>
            <p class="text-dark">The hub for your favourite movies and TV shows.</p>
          </div>
          <div class="col-3">
            <a class="link-caption" href="">Sony Music</a>
            <p class="text-dark">
              Classic artists to today’s stars, local and global.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end Navbar-Dropup -->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url(); ?>">
        <img width="100" src="<?= base_url(); ?>/Assets/images/sony-logo-black-and-white.png" alt="">
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Electronics
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 1000px;">
              <div class="row rwd1">
                <div class="col-3 cd1">
                  <li><a class="dropdown-item di-title" href="#">Televisions & Home cinema </a></li>
                  <li><a class="dropdown-item" href="#"> Televisions</a></li>
                  <li><a class="dropdown-item" href="#">Home Theatre & Soundbars</a></li>
                  <li><a class="dropdown-item" href="#"> Bluray Disc & DVD Playes</a></li>
                  <br>
                  <br>
                  <li><a class="dropdown-item di-view" href="#">View All</a></li>
                </div>
                <div class="col-3 cd1">
                  <li><a class="dropdown-item di-title" href="#">Audio</a></li>
                  <li><a class="dropdown-item" href="#">Headphones</a></li>
                  <li><a class="dropdown-item" href="#">MP3 Players</a></li>
                  <li><a class="dropdown-item" href="#">High-Resoluton Audio</a></li>
                  <li><a class="dropdown-item" href="#">Wireless Speakers</a></li>
                  <br>
                  <li><a class="dropdown-item di-view" href="#">View All</a></li>
                </div>
                <div class="col-3 cd1">
                  <li><a class="dropdown-item di-title" href="<?= base_url('Camera'); ?>">Cameras</a></li>
                  <li><a class="dropdown-item" href="#">Intechangeable-lens Cameras</a></li>
                  <li><a class="dropdown-item" href="#">Lenses</a></li>
                  <li><a class="dropdown-item" href="#">Compact Cameras</a></li>
                  <li><a class="dropdown-item" href="#">Cinema Lines Cameras</a></li>
                  <br>
                  <li><a class="dropdown-item di-view" href="#">View All</a></li>
                </div>
                <div class="col-3">
                  <li><a class="dropdown-item di-title" href="#">Video Cameras</a></li>
                  <li><a class="dropdown-item" href="#">Camcorders</a></li>
                  <li><a class="dropdown-item" href="#">Action Cameras</a></li>
                  <li><a class="dropdown-item" href="#">Prodessional Video Cameras</a></li>
                  <li><a class="dropdown-item" href="#">Cinema Line Cameras</a></li>
                  <br>
                  <li><a class="dropdown-item di-view" href="#">View All</a></li>
                </div>
              </div>
              <div class="row rwd2">
                <div class="col">
                  <li><a class="dropdown-item di-title" href="#">Storage & Cables </a></li>
                  <li><a class="dropdown-item" href="#">Memory Cards & SSD </a></li>
                  <li><a class="dropdown-item" href="#">Cables </a></li>
                  <br>
                  <br>
                  <br>
                  <li><a class="dropdown-item di-view" href="#">View All</a></li>
                </div>
              </div>
              <div class="row rwd3">
                <div class="col c1">
                  <a type="button" class="btn btn-primary btn2" href="#">All Electronics</a>
                </div>
                <div class="col">
                  <a type="button" class="btn btn-primary btn3" href="#">See Professional Porducts and Solutions</a>
                </div>
              </div>
            </ul>
          </li>
          <a class="nav-link" href="#">Plasytation</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Entertainment
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"><img src="<?= base_url(); ?>/Assets/images/PS4.webp" alt=""></a></li>
            </ul>
          </li>
          <a class="nav-link" href="#">Support</a>
        </ul>
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle right" href="#" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            My Sony
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="<?= base_url('Pages/Login'); ?>">
                <p>Sign in</p>
              </a></li>
            <li><a class="dropdown-item" href="<?= base_url('Pages/Login'); ?>">
                <p>Register</p>
              </a></li>
          </ul>
        </div>
        <div class="dropdown dds">
          <button class="btn btn-secondary dropdown-item btn1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            Search Sony <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
              <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
            </svg>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
          </ul>
        </div>
        <div class="btn-group dropup">
          <button type="button" id="headerDropupButton" class="btn nav-link dropdown-toggle" onclick="headerDropup();"> Sony Site </button>
        </div>
      </div>
    </div>
  </nav>
  <!-- End-Navbar -->

  <!-- register -->
  <section class="register">
    <div class="container-fluid cf-1">
      <div class="container c-1">
        <div class="regis-title">
          <h3>Join My Sony</h3>
        </div>
      </div>
    </div>
    <div class="container-fluid cf-2">
      <div class="container c-2">
        <div class="regis-info">
          <p>Please have your original purchase receipt and Sony product ready to proceed with warranty registration.</p>
          <p>Items that do not need to register:</p>
          <p>
            Storage devices, batteries and some accessories such as memory cards, USB flash drive, external hard drives, portable chargers,
            headphones and smartwatches do not require warranty registration. Please retain your original purchase receipt for warranty coverage.
          </p>
        </div>
      </div>
    </div>
    <div class="container-fluid cf-3">
      <div class="container c-3">
        <div class="regis-now">
          <h3>Register</h3>
          <div class="row rwr-1">
            <div class="col-lg">
              <form>
                <div class="form-group">
                  <label for="email">Full Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Full name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" required>
                  </div>
                  <div class="col-sm-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password" required>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary" style="width: 470px;">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End-Register -->

  <!-- footer -->
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <p class="title-search">Find a Store</p>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"></input>
            <button class="btn btn-primary btn-sm" type="submit">
              <p>Search</p>
            </button>
          </form>
          <p class="locations">See Our Locations</p>
        </div>
        <div class="col-3">
          <p class="title">Support</p>
          <ul>
            <li><a href="#">Online Help</a></li>
            <li><a href="#">Service Centres</a></li>
            <li><a href="#">Book Service Appointment</a></li>
            <li><a href="#">Warranty Information</a></li>
            <li><a href="#">Track Repair Status</a></li>
          </ul>
        </div>
        <div class="col-3">
          <p class="title">Experinece Sony</p>
          <ul>
            <li><a href="#">Eco</a></li>
            <li><a href="#">Corporate Social</a></li>
            <li><a href="#">My Sony</a></li>
          </ul>
        </div>
        <div class="col-3">
          <p class="title-news">News & Info</p>
          <a href="#">Press Center</a>
        </div>
      </div>
      <div class="row rw2">
        <div class="col c2">
          <div class="btn-group">
            <a href="#" class="btn btn-secondary btn1" aria-current="page">
              <p>Indonesia</p>
            </a>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle btn2" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                EN
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col c3">
          <ul>
            <a class="a1" href="">Professional Products & Solutions</a>
            <a class="a1" href="">Company Info</a>
            <a class="a1" href="">Careers</a>
            <a class="a1" href="">Contact Us</a>
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                </svg></button>
              <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></button>
              <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg></button>
              <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></button>
            </div>
          </ul>
        </div>
      </div>
      <hr style="color: white;">
      <div class="row rw3">
        <div class="col c1">
          <p class="footer-copyright">Copyright © 2019 Sony Indonesia. All rights reserved.</p>
        </div>
      </div>
      <div class="row rw4">
        <div class="col c1">
          <ul>
            <a href="#">Term & Conditions</a>
            <a href="#">Privacy Policy</a>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End-Footer -->

  <!-- plugin dropup navbar -->
  <script>
    $(document).ready(function() {
      $(document.getElementById("headerDropupButton")).click(function() {
        $(document.getElementById("headerDropup")).slideToggle('slow', 'swing');
      });
    });

    function closeHeader() {
      $(document.getElementById("headerDropup")).slideToggle('fast', 'linear');
    }
  </script>
  <!-- end plugin dropup navbar -->

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