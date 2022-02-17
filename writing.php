<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon" />

  <!-- Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css
">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="styles.css" />

  <title>Readme : Writing</title>
</head>

<body>
  <!-- Header -->
  <header id="header" class="header">
    <div class="navigation">
      <div class="container">
        <nav class="nav">
          <div class="nav__hamburger">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-menu"></use>
            </svg>
          </div>

          <div class="nav__logo">
            <a href="#header" class="scroll-link">
              <img src="./images/ReadMe.png" alt="logo">
            </a>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <span class="nav__category">ReadMe</span>
              <a href="#" class="close__toggle">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-cross"></use>
                </svg>
              </a>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="./index.html" class="nav__link">หน้าหลัก</a>
              </li>
              <li class="nav__item">
                <a href="./E-Book.html" class="nav__link">อีบุ๊ก</a>
              </li>
              <li class="nav__item">
                <a href="./fiction.html" class="nav__link">นิยาย</a>
              </li>
              <li class="nav__item">
                <a href="#header" class="scroll-link">เขียน</a>
              </li>
            </ul>
          </div>

          <div class="nav__icons">
            <a href="#" class="icon__item">
              <i class="fa fa-user"></i>
            </a>

            <a href="#" class="icon__item">
              <i class="fa fa-search"></i>
            </a>

            <a href="#" class="icon__item">
              <i class="fa fa-bell"></i>
              <span id="cart__total">8</span>
            </a>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <!-- Form Action -->

  <section class="section_writing">
    <div class="section_writing_new">
      <div class="title__container">
        <div class="section__title active" data-id="Latest Products">
          <h1 class="primary__title">เขียนนิยายตอนใหม่</h1>
        </div>
      </div>
      <div class="new_writing">
        <div class="writing_category">
          หมวดหมู่นิยาย : *
          <br>
          <br>
          <select class="input_category selected" name="option">
            <option value="1">นิยาย รักวัยรุ่น</option>
            <option value="2">นิยาย รัก, โรแมนติค</option>
            <option value="3">นิยาย y</option>
            <option value="4">นิยาย แฟนตาซี</option>
            <option value="5">นิยาย ดราม่า</option>
          </select>
          <br>
          <br>
          <br>
          <p>
            <label>ชื่อเรื่อง : * <br></label><br>
            <input class="input_category" name="first" type="text"></p>
          <br>
          <br>
          รายละเอียด : *
          <br>
          <br>
          <div class="input_category_detail">
            <div class="segment">
              <div class="segment_complex">
                <span><i class="fa fa-bold" style="font-size: 1.2rem;"></i>
                  <span><i class="fas fa-italic" style="font-size: 1.2rem;"></i>
                    <span><i class="fas fa-underline" style="font-size: 1.2rem;"></i>
                      <span><i class="fas fa-font" style="font-size: 1.2rem;"></i>
                        <span><i class="fas fa-align-left" style="font-size: 1.2rem;"></i>
                          <span><i class="fas fa-align-center" style="font-size: 1.2rem;"></i>
                            <span><i class="fas fa-align-right" style="font-size: 1.2rem;"></i>
                              <span><i class="fas fa-align-justify" style="font-size: 1.2rem;"></i>
                                <span><i class="fas fa-undo-alt" style="font-size: 1.2rem;"></i>
                                  <span><i class="fas fa-redo-alt" style="font-size: 1.2rem;"></i>
              </div>
              <div class="text-area">
                <textarea rows="4" cols="50">
                </textarea>
              </div>
            </div>
          </div>
          <br>
          <br>
          <br>
          <p>
            <label>ชื่อเรื่อง : * <br></label><br>
            <input class="input_category" name="first" type="text"></p>
            <br>
            <br>
           รูปภาพ : *   <span class="choose-file"> ขนาดรูปที่ทำการอัพโหลดจะต้องมีขนาดไม่เกิน 256 Kb.</span> 
           <br>
           <br>
           <input type="file" id="myfile" name="myfile">
           <br>
           <br>
           การแสดงความคิดเห็น : 
           <br>
           <br>
           <select class="input_category selected" name="option">
             <option value="1">เฉพาะสมาชิก</option>
             <option value="2">ปิดการแสดงความคิดเห็น</option>
           </select>
           <br>
           <br>
           สถานะ :
           <br>
           <br>
           <select class="input_category selected" name="option">
             <option value="1">แสดง</option>
             <option value="2">ซ่อน</option>
           </select>
           <br>
           <br>
           <button class="assent">ตกลง</button> <span> <button class="cancel">ยกเลิก</button></span>

        </div>
      </div>
    </div>

  </section>

  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer__top">
        <div class="footer-top__box">
          <h3>อ่านนิยาย</h3>
          <a href="#">อีบุ๊กนิยาย</a>
          <a href="#">นิยายแปลลิขสิทธิ์ถูกต้อง</a>
          <a href="#">นิยายใหม่มาแรง</a>
          <a href="#">อริจินัลซีรีส์</a>
          <a href="#">รายการอ่านล่าสุด</a>
        </div>
        <div class="footer-top__box">
          <h3>เกี่ยวกับเว็บไซต์</h3>
          <a href="https://fictionlog.co/">&copy; Fictionlog</a>
          <a href="https://www.readawrite.com/">&copy; ReadAWrite</a>
          <a href="https://www.tunwalai.com/">&copy; Tunwalai</a>
          <a href="https://www.webtoons.com/th/">&copy; WEBTOON</a>
          <a href="https://www.mebmarket.com/">&copy; Meb</a>
          <a href="https://www.jamsai.com/">&copy; jamsai</a>
        </div>
        <div class="footer-top__box">
          <h3>เกี่ยวกับเรา</h3>
          <a href="#">ติดต่อเรา</a>
          <a href="#">ความตั้งใจของเรา</a>
        </div>
        <div class="footer-top__box">
          <h3>นโยบาย</h3>
          <div>
            นโยบายความเป็นส่วนตัว
          </div>
          <div>
            ข้อตกลงในการใช้งาน
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="footer-bottom__box">

      </div>
      <div class="footer-bottom__box">

      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Go To -->

  <a href="#header" class="goto-top scroll-link">
    <i class="fas fa-angle-up" style="color: white;"></i>
  </a>

  <!-- Glide Carousel Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

  <!-- Animate On Scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Custom JavaScript -->
  <script src="./js/products.js"></script>
  <script src="./js/index.js"></script>
  <script src="./js/slider.js"></script>
</body>

</html>