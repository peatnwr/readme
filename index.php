<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
  <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">

  <!-- Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="./css/content-topic-style.css">
  <link rel="stylesheet" href="./css/navbar.css">

  <title>ReadMe</title>

  <?php
    include "./connectDB/connectDB.php";

    $sqlBookTrans = "SELECT book.book_id, book.bookname, book.bookimage, book.writer, book.company, book.bookprice,  book_category.category_name FROM book, book_category WHERE book_category.category_id = 1 AND book.category_id = book_category.category_id";
    $sqlBookRomance = "SELECT book.book_id, book.bookname, book.bookimage, book.writer, book.company, book.bookprice,  book_category.category_name FROM book, book_category WHERE book_category.category_id = 2 AND book.category_id = book_category.category_id";
    $sqlBookYaoi = "SELECT book.book_id, book.bookname, book.bookimage, book.writer, book.company, book.bookprice,  book_category.category_name FROM book, book_category WHERE book_category.category_id = 3 AND book.category_id = book_category.category_id";
    $sqlBookDetect = "SELECT book.book_id, book.bookname, book.bookimage, book.writer, book.company, book.bookprice,  book_category.category_name FROM book, book_category WHERE book_category.category_id = 4 AND book.category_id = book_category.category_id";
    $rsBookTrans = mysqli_query($conn, $sqlBookTrans);
    $rsBookRomance = mysqli_query($conn, $sqlBookRomance);
    $rsBookYaoi = mysqli_query($conn, $sqlBookYaoi);
    $rsBookDetect = mysqli_query($conn, $sqlBookDetect);
  ?>

</head>

<body>

  <!-- Header -->
  <header id="header-home" class="header">
    <?php include "./navbar.php" ?>

    <!-- Hero -->
    <div class="hero">
      <div class="glide" id="glide_1">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <span class="">นิยายแปล</span>
                  <h1 class="">ยอดนางร้ายมืออาชีพ</h1>
                  <p>การจะเป็นนางร้ายได้มาตรฐานสมอาชีพนั้นต้องได้รับการฝึกฝนอย่างเข้มงวด
                    เมื่อต้องเข้าไปสู่โลกนิยายเรื่องแล้วเรื่องเล่าและสวมบทนางร้ายที่มีชื่อเหมือนตัวเอง
                    หน้าที่ของเธอมีเพียงสองสิ่ง คือเคลียร์เส้นทางรักหวานชื่นของคู่พระ-นาง
                    และข้อสำคัญที่สุดก็คือต้องตีป้อมปราการทลายหัวใจบอสฝ่ายร้ายให้จงได้!
                  </p>
                </div>
                <div class="hero__right">
                  <div class="hero__img-container">
                    <img class="banner_01" src="./images/banners/banner1.jpg" alt="banner2">
                  </div>
                </div>
              </div>
            </li>

            <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <span class="">นิยายโรแมนติก</span>
                  <h1 class="">Fall in Love หวานใจ</h1>
                  <p>เรื่องรักแสนหวานที่สะกดให้เราต้องตามอ่านตามลุ้น ติดตามความรักของพระนางไปจนถึงตอนจบอันอิ่มเอม
                    เสน่ห์และชั้นเชิงในเรื่องเล่าของ ‘ชเล’ ยังคงมีมนตร์ขลังเสมอ โดยเฉพาะเรื่องราวของความรัก</p>
                </div>
                <div class="hero__right">
                  <div class="hero__img-container">
                    <img class="banner_02" src="./images/banners/banner2.jpg" alt="banner2">
                  </div>
                </div>
              </div>
            </li>

            <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <span class="">นิยายวาย</span>
                  <h1 class="">ฉลามไม่กินเนื้อ</h1>
                  <p>สวัสดีครับผม ฉลาม ไม่ชอบกินเนื้อทุกประเภท ชอบกินนมกล้วย แต่ที่โปรดปรานสุดๆ ก็ต้องไข่เจียวฝีมือ
                    แมวน้ำ</p>
                </div>
                <div class="hero__right">
                  <div class="hero__img-container">
                    <img class="banner_03" src="./images/banners/banner3.jpg" alt="banner2">
                  </div>
                </div>
              </div>
            </li>

            <li class="glide__slide">
              <div class="hero__center">
                <div class="hero__left">
                  <span>นิยายแปล</span>
                  <h1>ปรมาจารย์ลัทธิมารเล่ม1</h1>
                  <p>อุปสรรคครั้งใหม่ไม่ เพราะยิ่งรวบรวมชิ้นส่วนศพได้มากเท่าไร อันตรายก็ยิ่งคืบคลานเข้ามาใกล้เท่านั้น!
                  </p>
                </div>
                <div class="hero__right">
                  <img class="banner_04" src="./images/banners/banner4.jpg" alt="banner2">
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="glide__bullets" data-glide-el="controls[nav]">
          <button class="glide__bullet" data-glide-dir="=0"></button>
          <button class="glide__bullet" data-glide-dir="=1"></button>
          <button class="glide__bullet" data-glide-dir="=2"></button>
          <button class="glide__bullet" data-glide-dir="=3"></button>
          <button class="glide__bullet" data-glide-dir="=4"></button>


        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
            <i class="fa fa-angle-left"></i>
          </button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
            <i class="fa fa-angle-right"></i>
          </button>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- Main -->
  <main id="main">
    <div class="container">
      <!-- Collection -->
      <section id="collection" class="section collection">
        <div class="collection__container" data-aos="fade-up" data-aos-duration="1200">
          <div class="collection__box">
            <div class="img__container">
              <img class="collection_02" src="./images/นิยายโรแมนติก/นายคะอย่ามาร้าย.jpg" alt="">
            </div>
            <div class="collection__content">
              <div class="collection__data">
                <span>นิยายใหม่มาแรง</span>
                <h1>นายคะอย่ามาร้าย</h1>
              </div>
            </div>
          </div>
          <div class="collection__box">
            <div class="img__container">
              <img class="collection_01" src="./images/นิยายสืบสวน/ห่มแดน.jpg" alt="">
            </div>
            <div class="collection__content">
              <div class="collection__data">
                <span>ยอดฮิตตลอดกาล</span>
                <h1>ห่มแดน</h1>
              </div>
            </div>
          </div>
      </section>

      <!-- Latest Products -->
      <section class="section latest__products" id="latest">
        <div class="title__container">
          <div class="section__title active" data-id="Latest Products">
            <h1 class="primary__title">หมวดหมู่ : นิยายแปล</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center"> 
                <?php while($row = mysqli_fetch_row($rsBookTrans)){ ?>
                <li class="glide__slide">
                  <form action="./backend/cart.php" method="POST">
                    <div class="product">
                      <div class="product__header">
                        <img src="<?php echo $row[2] ?>" alt="product">
                      </div>
                      <div class="product__footer">
                        <h3><?php echo $row[1] ?></h3>
                        <p>ผู้เขียน: <?php echo $row[3] ?></p>
                        <p>สำนักพิมพ์: <?php echo $row[4] ?></p>
                        <input type="hidden" name="book_id" value="<?php echo $row[0] ?>">
                        <input type="hidden" name="bookname" value="<?php echo $row[1] ?>">
                        <input type="hidden" name="bookprice" value="<?php echo $row[5] ?>">
                        <input type="hidden" name="bookimage" value="<?php echo $row[2] ?>">
                        <div class="product__price">
                          <h4>ราคา: <?php echo $row[5] ?> บาท</h4>
                        </div>
                        <a href="./E-Book.html"><button type="submit" name="add_product" class="product__btn">เพิ่มลงตระกร้า</button></a>
                      </div>
                    </div>
                  </form>
                </li>
                <?php } ?>
              </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <i class="fa fa-angle-left" style="color: black;"></i>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <i class="fa fa-angle-right" style="color: black;"></i>
              </button>
            </div>
          </div>
        </div>
      </section>

      <section class="section latest__products" id="latest">
        <div class="title__container">
          <div class="section__title active" data-id="Latest Products">
            <h1 class="primary__title">หมวดหมู่ : นิยายโรแมนติก</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="rlide_1">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center"> 
                <?php while($row = mysqli_fetch_row($rsBookRomance)){ ?>
                <li class="glide__slide">
                  <form action="./backend/cart.php" method="POST">
                    <div class="product">
                      <div class="product__header">
                        <img src="<?php echo $row[2] ?>" alt="product">
                      </div>
                      <div class="product__footer">
                        <h3><?php echo $row[1] ?></h3>
                        <p>ผู้เขียน: <?php echo $row[3] ?></p>
                        <p>สำนักพิมพ์: <?php echo $row[4] ?></p>
                        <input type="hidden" name="book_id" value="<?php echo $row[0] ?>">
                        <input type="hidden" name="bookname" value="<?php echo $row[1] ?>">
                        <input type="hidden" name="bookprice" value="<?php echo $row[5] ?>">
                        <input type="hidden" name="bookimage" value="<?php echo $row[2] ?>">
                        <div class="product__price">
                          <h4>ราคา: <?php echo $row[5] ?> บาท</h4>
                        </div>
                        <a href="./E-Book.html"><button type="submit" name="add_product" class="product__btn">เพิ่มลงตระกร้า</button></a>
                      </div>
                    </div>
                  </form>
                </li>
                <?php } ?>
              </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <i class="fa fa-angle-left" style="color: black;"></i>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <i class="fa fa-angle-right" style="color: black;"></i>
              </button>
            </div>
          </div>
        </div>
      </section>

      <section class="section latest__products" id="latest">
        <div class="title__container">
          <div class="section__title active" data-id="Latest Products">
            <h1 class="primary__title">หมวดหมู่ : นิยายวาย</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="ylide_1">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center"> 
                <?php while($row = mysqli_fetch_row($rsBookYaoi)){ ?>
                <li class="glide__slide">
                  <form action="./backend/cart.php" method="POST">
                    <div class="product">
                      <div class="product__header">
                        <img src="<?php echo $row[2] ?>" alt="product">
                      </div>
                      <div class="product__footer">
                        <h3><?php echo $row[1] ?></h3>
                        <p>ผู้เขียน: <?php echo $row[3] ?></p>
                        <p>สำนักพิมพ์: <?php echo $row[4] ?></p>
                        <input type="hidden" name="book_id" value="<?php echo $row[0] ?>">
                        <input type="hidden" name="bookname" value="<?php echo $row[1] ?>">
                        <input type="hidden" name="bookprice" value="<?php echo $row[5] ?>">
                        <input type="hidden" name="bookimage" value="<?php echo $row[2] ?>">
                        <div class="product__price">
                          <h4>ราคา: <?php echo $row[5] ?> บาท</h4>
                        </div>
                        <a href="./E-Book.html"><button type="submit" name="add_product" class="product__btn">เพิ่มลงตระกร้า</button></a>
                      </div>
                    </div>
                  </form>
                </li>
                <?php } ?>
              </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <i class="fa fa-angle-left" style="color: black;"></i>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <i class="fa fa-angle-right" style="color: black;"></i>
              </button>
            </div>
          </div>
        </div>
      </section>

      <section class="section latest__products" id="latest">
        <div class="title__container">
          <div class="section__title active" data-id="Latest Products">
            <h1 class="primary__title">หมวดหมู่ : นิยายสืบสวน</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="dlide_1">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center"> 
                <?php while($row = mysqli_fetch_row($rsBookDetect)){ ?>
                <li class="glide__slide">
                  <form action="./backend/cart.php" method="POST">
                    <div class="product">
                      <div class="product__header">
                        <img src="<?php echo $row[2] ?>" alt="product">
                      </div>
                      <div class="product__footer">
                        <h3><?php echo $row[1] ?></h3>
                        <p>ผู้เขียน: <?php echo $row[3] ?></p>
                        <p>สำนักพิมพ์: <?php echo $row[4] ?></p>
                        <input type="hidden" name="book_id" value="<?php echo $row[0] ?>">
                        <input type="hidden" name="bookname" value="<?php echo $row[1] ?>">
                        <input type="hidden" name="bookprice" value="<?php echo $row[5] ?>">
                        <input type="hidden" name="bookimage" value="<?php echo $row[2] ?>">
                        <div class="product__price">
                          <h4>ราคา: <?php echo $row[5] ?> บาท</h4>
                        </div>
                        <a href="./E-Book.html"><button type="submit" name="add_product" class="product__btn">เพิ่มลงตระกร้า</button></a>
                      </div>
                    </div>
                  </form>
                </li>
                <?php } ?>
              </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <i class="fa fa-angle-left" style="color: black;"></i>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <i class="fa fa-angle-right" style="color: black;"></i>
              </button>
            </div>
          </div>
        </div>
      </section>

    </div>
  </main>

  <!-- End Main -->

  <?php include "./footer.php" ?>

  <!-- PopUp -->
  <!-- <div class="popup hide__popup">
    <div class="popup__content">
      <div class="popup__close">
        <i class="fa fa-times"></i>
      </div>
      <div class="popup__left">
        <div class="popup-img__container">
          <img class="popup__img" src="./images/นิยายแปล/ปรมาจารย์ลัทธิมารเล่ม1.jpg" alt="popup">
        </div>
      </div>
      <div class="popup__right">
        <div class="right__content">
          <h1>ปรมาจารย์ลัทธิมาร <br> เล่ม 1</h1>
          <p>ปรมาจารย์อี๋หลิง เว่ยอู๋เซียนสิ้นชีพผู้คนจึงพากันยินดีที่เขามอดม้วย
            เวลาผ่านไปสิบกว่าปีจะมีใครบางคนใช้อาคมต้องห้ามยอมอุทิศร่างให้เขาฟื้นคืน!
          </p>
          </form>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Go To -->

  <a href="#header" class="goto-top scroll-link">
    <i class="fas fa-angle-up" style="color: white;"></i>
  </a>


  <!-- Glide Carousel Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

  <!-- Boot Strap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Animate On Scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Custom JavaScript -->
  <script src="./js/products.js"></script>
  <script src="./js/index.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/content-topic-tap.js"></script>

</body>

</html>