<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResClick Tema 2</title>
    <link rel="apple-touch-icon" href="images/icon.png" />
    <link rel="icon" href="images/icon.png" />
    <meta name="description" content="ResClick Theme 2" />
    <meta property="og:site_name" content="ResClick Theme 2" />
    <meta name="classification" content="ResClick Theme 2" />
    <meta name="abstract" content="ResClick Theme 2" />
    <meta name="twitter:creator" content="@ResClick" />
    <meta name="twitter:card" content="summary" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/sub.css" />
    <link rel="stylesheet" href="css/swiper-bundle.css" />
<style>
    .swiper {
        width: 100%;
        height: 600px;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .swiper-slide {
        width: 95%;
      }

      .swiper-slide:nth-child(2n) {
        width: 95%;
      }

      .swiper-slide:nth-child(3n) {
        width: 95%;
      }

</style>
    <?php include 'inc/header.php' ?> 
    
        <div class="img-top" style="background-image:url('images/home/5.webp') ;"></div>

        
    <section class="text-bg-light bg">
      <div class="container">

        <div class="row position-relative">
        <div class="col-lg-12">
        <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
            
        <?php for ($i = 4; $i <= 9; $i++) { ?>
            <div class="swiper-slide">
                <img alt="ResClick Image" src="images/home/<?php echo $i ?>.webp" />
            </div>

        <?php } ?>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
    </div>
    </div>
          <div class="col-lg-12 pt-4 text-center" id="activities">
            <h2>Sahil & Havuz</h2>
            <br>
              <h3>Slogan</h3>
              <br>
              <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>

             <br>

             <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>

            <br>
             
              <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>
            </div>
        </div>

      </div>
    </section>
    

    <!-- mid-content -->
    <section id="middle-cover" style="background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%),url(images/home/9.webp) no-repeat fixed center center / cover rgba(0, 0, 0, 5);">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <h2 data-sr="enter top over 1s, wait 0.3s, move 24px, reset" class="white-text" style="font-family: 'Poppins', sans-serif; font-size: 50px; color:#fff">Slogan</h2>
                <h5 data-sr="enter bottom over 1s, wait 0.3s, move 24px, reset" class="white-text" style="font-size: 20px; color:#fff">Hoşgeldiniz!</h5>

                <div class="form-group col-sm-12 ">
                    <button class="btn btn-light">Fiyat Sorgula</button>
                </div>
            </div>
        </div>
    </div>	
</section>
<!-- mid-content -->

    <?php include 'inc/footer.php' ?>
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/swiper-bundle.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
    </body>

</html>