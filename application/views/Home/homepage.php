<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- css -->
  <link rel="stylesheet" href="<?= base_url('Assets/css/style.css'); ?>">

  <!-- js -->
  <link rel="stylesheet" href="<?= base_url('Assets/js/plugin.js'); ?>">

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

  <!-- Large-Image -->
  <div class="p-5 text-center bg-image">
    <div class="d-flex justify-content-start align-items-center h-100">
      <div class="text-black">
        <p class="mb-3">α7C</p>
        <h1 class="mb-3">Compact Size, <br> Full-frame Power</h1>
        <a class="btn btn-outline-light btn-primary" href="#!" role="button">Learn more</a>
      </div>
    </div>
  </div>
  <!-- end Large-Image -->

  <br>

  <!-- Slider -->
  <section class="slider">
    <div class="container">
      <p class="title">The Latest</p>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <!-- Slider 1 -->
          <div class="carousel-item active">
            <div class="row">
              <div class="col-4">
                <img src="Assets/images/Slider1.jpg" class="d-block h-100 w-auto" alt="...">
              </div>
              <div class="col-4">
                <img src="Assets/images/Slider2.jpg" class="d-block h-100 w-auto" alt="...">
              </div>
              <div class="col-4">
                <img src="Assets/images/Slider3.jpg" class="d-block h-100 w-auto" alt="...">
              </div>
            </div>
          </div>
          <!-- Slider 2 -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-4">
                <img src="Assets/images/Slider4.jpg" class="d-block h-100 w-auto" alt="...">
              </div>
              <div class="col-4">
                <img src="Assets/images/Slider5.jpg" class="d-block h-100 w-auto" alt="...">
              </div>
              <div class="col-4">
                <img src="Assets/images/Slider6.jpg" class="d-block h-100 w-auto" alt="...">
              </div>
            </div>
          </div>
          <!-- Slider 3 -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-4">
                <img src="Assets/images/Slider7.jpg" class="d-block h-100 w-auto" alt="...">
              </div>
              <div class="col-4">
                <img src="Assets/images/Slider8.jpg" class="d-block h-100 w-auto" alt="...">
              </div>
              <div class="col-4">
                <img src="Assets/images/Slider9.jpg" class="d-block h-100 w-auto" alt="...">
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
  </section>
  <!-- End-Slider -->

  <!-- Grid -->
  <section class="product-grid">
    <div class="container">
      <p class="title">What's Hot</p>
      <div class="row">
        <div class="col-4">
          <div class="card c1">
            <div class="card-body">
              <p class="latest-product">Latest Products from Sony</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card c2">
            <img src="Assets/images/camera.png" class="card-img-top">
            <div class="card-body">
              <div class="product-name">
                <p>α9 II full-frame camera with pro capability</p>
              </div>
              <div class="product-model">
                <p>ILCE-9M2</p>
              </div>
              <div class="product-rating">
                <span class="star-holder"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg></span>
                <span class="star-holder"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg></span>
                <span class="star-holder"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg></span>
                <span class="star-holder"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg></span>
                <span class="star-holder"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg></span>
                <span class="review">(27)</span>
              </div>
              <div class="product-price">
                <p>Rp. 63,499,000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card c3">
            <img src="Assets/images/earphone.png" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="product-name p3">
                <p class="card-text">WF-SP800N Truly Wireless Noise Cancelling Headphones for Sports</p>
              </div>
              <div class="product-model">
                <p>WF-SP800N</p>
              </div>
              <div class="product-rating">
                <span class="star-holder">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <span class="review">(100)</span>
                </span>
              </div>
              <div class="product-price">
                <p>Rp. 2,599,000</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row rw2">
        <div class="col-3">
          <div class="card c1-2">
            <img height="140" width="140" src="Assets/images/speaker.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="product-name p3">
                <p class="card-text">XB43 EXTRA BASS™ Portable BLUETOOTH® Speaker</p>
              </div>
              <div class="product-model">
                <p>SRS-XB43</p>
              </div>
              <div class="product-rating">
                <span class="star-holder">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                  </svg>
                  <span class="review">(31)</span>
                </span>
              </div>
              <div class="product-price">
                <p>Rp. 3,699,000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card c1-3">
            <img height="140" width="140" src="Assets/images/headset.png" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="product-name p3">
                <p class="card-text">WI-SP510 Wireless In Ear Headphones for Sports</p>
              </div>
              <div class="product-model">
                <p>WI-SP510</p>
              </div>
              <div class="product-rating">
                <span class="star-holder">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                  </svg>
                  <span class="review">(21)</span>
                </span>
              </div>
              <div class="product-price">
                <p>Rp. 1,299,000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card c1-4">
            <img height="140" width="140" src="Assets/images/bg.png" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="product-name p3">
                <p class="card-text">X95H | Full Array LED | 4K Ultra HD | High Dynamic Range (HDR) | Smart TV (Android TV)</p>
              </div>
              <div class="product-model">
                <p>X9500H Series</p>
              </div>
              <div class="product-rating">
                <span class="star-holder">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M5.354 5.119L7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.519.519 0 0 1-.146.05c-.341.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.171-.403.59.59 0 0 1 .084-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027c.08 0 .16.018.232.056l3.686 1.894-.694-3.957a.564.564 0 0 1 .163-.505l2.906-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.002 2.223 8 2.226v9.8z" />
                  </svg>
                  <span class="review">(551)</span>
                </span>
              </div>
              <div class="product-price">
                <p>Starting at Rp. 19,999,000</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end-grid -->

  <!-- Card -->
  <section class="product-card">
    <div class="container c">
      <p class="title">Latest News</p>
      <hr>
      <div class="row">
        <div class="col-4">
          <div class="card c1">
            <img src="assets/images/card1.jpg" class="card-img-top" alt="card1" height="250px">
            <div class="card-body">
              <h5 class="card-title">Alpha Privileged Club</h5>
              <p class="card-text">Be Part of Our First and Exclusive Membership Card</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card c2">
            <img src="assets/images/card2.jpg" class="card-img-top" alt="card2" height="250px">
            <div class="card-body">
              <h5 class="card-title">My Sony Membership & Warranty Registration</h5>
              <p class="card-text">Register your product warranty and get the benefits</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card c3">
            <img src="assets/images/card3.jpg" class="card-img-top" alt="card3" height="250px">
            <div class="card-body">
              <h5 class="card-title">About Sony</h5>
              <p class="card-text">Find out more</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End-Card -->

  <!-- card recently-view -->
  <section class="recently-view">
    <div class="container">
      <p class="title">Recently Viewd Items</p>
      <div class="row">
        <div class="col-3">
          <div class="card c1">
            <img height="140" width="140" src="Assets/images/speaker.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">XB43 EXTRA BASS™ Portable BLUETOOTH® Speaker</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card c2">
            <img height="140" width="140" src="Assets/images/camera.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">XB43 EXTRA BASS™ Portable BLUETOOTH® Speaker</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card c3">
            <img height="140" width="140" src="Assets/images/headset.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">XB43 EXTRA BASS™ Portable BLUETOOTH® Speaker</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end card recently-view -->

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

  <script>
    $(document).ready(function() {
      $(document.getElementById("headerDropupButton")).click(function() {
        $(document.getElementById("headerDropup")).slideToggle('slow', 'swing');
      });
    });

    function closeHeader() {
      $(document.getElementById("headerDropup")).slideToggle('fast', 'linear');
    };
  </script>

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