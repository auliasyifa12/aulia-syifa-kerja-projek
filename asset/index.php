<?php
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bunga</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="style.css">
    <style>
        .active {
            background-color: purple;
            border-radius: 7px;
            }
            .nav-item {
                margin-right: 20px;
            }
    </style>
</head>
<body>
    
    
<header>
    <!-- <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label> -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 14px 0px; font-size: 22px;">
  <div class="container-fluid d-flex justify-content-between" >
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#product" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu" style="font-size: 22px;">
            <li><a class="dropdown-item" href="bungapot.html">bungapot</a></li>
            <li><a class="dropdown-item" href="bucketbunga.html">bucketbunga</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">feedback</a>
        </li>
      </ul>
    </div>
    <div>
    <a href="login.php" class="fas fa-user" margin-right= 40 px></a>
    </div>
    </div>
  </div>
</nav>
</header>

<section class="home" id="home">
    <div class="content">
        <h3>fresh flowers</h3>
        <span> natural & beautiful flowers</span>
        <a href="products" class="btn"> shop now</a>
    </div>
</section>

<section class="about" id="about">
    <h1 class="heading"><span> about </span> us </h1>
    <div class="row">
        <div class="image-container">
            <img src="tulip 1.jpg" ></img>
            <img src="bunga.jpg" ></img>
            <img src="bungaa.jpg" ></img>
            <img src="bungaaa.jpg" ></img>
            <img src="anggrek.jpg" ></img>

        </div>
        <div class="content" margin= right>
        <br>
            <h2>Mengapa memilih kita?</h2>
            <p>toko ini memiliki bunga dari perkebunan bunga terpecaya.</p align= justafy>
            </div>
        </br>
        </div>
    </div>
</section>

<section class="icons-container">
    <div class="icons">
        <img src="gambar 1.jpg" alt="">
        <div class="info">
            <h3>Gratis Ongkir</h3>
            <span>Untuk Semua Pembelian</span>
        </div>
    </div>

    <div class="icons">
        <img src="gambar 2.jpg" alt="">
        <div class="info">
            <h3>10 Hari Kembali</h3>
            <span>Garansi Uang Kembali</span>
        </div>
    </div>

    <div class="icons">
        <img src="gambar 3.jpg" alt="">
        <div class="info">
            <h3>Gratis Hadiah</h3>
            <span>Untuk Semua Pembelian</span>
        </div>
    </div>

    <div class="icons icon4">
        <img src="gambar 4.jpg" alt="">
        <div class="info">
            <h3>pembayaran yang aman</h3>
            <span>Untuk Semua Pembelian</span>
        </div>
    </div>
</section>

<section class="products" id="products">
    <h1 class="heading">latest <span>products</span></h1>

    <div class="box-container">
    <div class="box">
                <span class="discount">-20%</span>
                <div class="image">
                    <img src="7.jpg" alt="">
                    <div class="icons">
                        <a href="" class="fa fa-heart"></a>
                        <a href="" class="cart-btn">Keranjang</a>
                        <a href="" class="fas fa-share"></a>
                    </div>
                </div>

                <div class="content">
                    <h3>Pot lavender</h3>
                    <div class="price"> Rp48.000 <span> Rp60.000</span></div>
                </div>
            </div>
    
            <div class="box">
                <span class="discount">-5%</span>
                <div class="image">
                    <img src="4.jpg" alt="">
                    <div class="icons">
                        <a href="" class="fa fa-heart"></a>
                        <a href="" class="cart-btn">Keranjang</a>
                        <a href="" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Anggrek pot ungu</h3>
                    <div class="price"> Rp.38.000 <span>Rp.40.000</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img src="8.jpg" alt="">
                    <div class="icons">
                        <a href="" class="fa fa-heart"></a>
                        <a href="" class="cart-btn">Keranjang</a>
                        <a href="" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Anggrek pot pink</h3>
                    <div class="price"> Rp45.000 <span>Rp50.000</span></div>
                </div>
                </div>
    
            <div class="box">
                <span class="discount">-15%</span>
                <div class="image">
                    <img src="1.jpg" alt="">
                    <div class="icons">
                        <a href="" class="fa fa-heart"></a>
                        <a href="" class="cart-btn">Keranjang</a>
                        <a href="" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Anggrek pot putih</h3>
                    <div class="price"> Rp51.000 <span>Rp60.000</span></div>
                </div>
            </div>

        
</section>


<section class="contact" id="contact">

    <h1 class="heading"><span>feed</span>back</h1>
    <div class="row">
    <form action="feedback.php" method="POST">
            <input type="text" placeholder="name" name="name" class="box">
            <input type="text" placeholder="email" name="email" class="box">
            <textarea name="message" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" name="submit" class="btn">
        </form>
        </div>
    </div>
    
</section>

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
            <a href="#contact">contact</a>
        </div>

        <div class="box">
            <h3>extrac links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">bandung</a>
            <a href="#">bekasi</a>
            <a href="#">jakarta</a>
            <a href="#">yogyakarta</a>
        </div>
        <div class="box">
            <h3>contac info</h3>
            <a href="#">+628212546781</a>
            <a href="#">bungacantik@gmail.com</a>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(".navbar .nav-link").on("click", function(){
   $(".navbar").find(".active").removeClass("active");
   $(this).addClass("active");
});
</script>
</body>
</html>
