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

  <title>Readme : E-Book</title>
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
                <i class="fa fa-times"></i>
              </a>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="./index.html" class="nav__link">หน้าหลัก</a>
              </li>
              <li class="nav__item">
                <a href="#header" class="scroll-link">อีบุ๊ก</a>
              </li>
              <li class="nav__item">
                <a href="./fiction.html" class="nav__link">นิยาย</a>
              </li>
              <li class="nav__item">
                <a href="./writing.html" class="nav__link">เขียน</a>
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

    <div class="page__title-area">
      <div class="container">
        <div class="page__title-container">
          <ul class="page__titles">
            <li>
              <a href="/">
              </a>
            </li>
            <li class="page__title">อีบุ๊คมาใหม่</li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main id="main">
    <div class="container">
      <!-- Products Details -->
      <section class="section product-details__section">
        <div class="product-detail__container">
          <div class="product-detail__left">
            <div class="details__container--left">
              <div class="product__pictures">
                <div class="pictures__container">
                  <img class="picture" src="./images/นิยายวาย/ฉลามไม่กินเนื้อ0.jpg" id="pic1" />
                </div>
                <div class="pictures__container">
                  <img class="picture" src="./images/นิยายวาย/ฉลามไม่กินเนื้อ1.jpg" id="pic2" />
                </div>
                <div class="pictures__container">
                  <img class="picture" src="./images/นิยายวาย/ฉลามไม่กินเนื้อ2.jpg" id="pic3" />
                </div>
                <div class="pictures__container">
                  <img class="picture" src="./images/นิยายวาย/ฉลามไม่กินเนื้อ3.jpg" id="pic4" />
                </div>
                <div class="pictures__container">
                  <img class="picture" src="./images/นิยายวาย/ฉลามไม่กินเนื้อ4.jpg" id="pic5" />
                </div>
              </div>
              <div class="product__picture" id="product__picture">
                <div class="picture__container">
                  <img src="./images/นิยายวาย/ฉลามไม่กินเนื้อ0.jpg" id="pic" />
                </div>-++
              </div>
              <div class="zoom" id="zoom"></div>
            </div>

            <div class="product-details__btn">
              <a class="add" href="#">
                <span>
                  <i class="fas fa-shopping-cart"></i>
                </span>

                เพิ่มลงในรถเข็น</a>
              <a class="buy" href="#">
                <span>
                  <i class="far fa-credit-card"></i>
                </span>
                ซื้อเลย
              </a>
            </div>
          </div>

          <div class="product-detail__right">
            <div class="product-detail__content">
              <h3>ฉลามไม่กินเนื้อ</h3>
              <div class="price">
                <span class="new__price">425.00฿</span>
              </div>
              <div class="product__review">
                <div class="rating">
                  <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                  <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                  <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                  <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                  <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                </div>
              </div>
              <p>
                สวัสดีครับผม ฉลาม ไม่ชอบกินเนื้อทุกประเภท ชอบกินนมกล้วย แต่ที่โปรดปรานสุดๆ ก็ต้องไข่เจียวฝีมือ แมวน้ำ
              </p>
              <div class="product__info-container">
                <ul class="product__info">
                  <li class="select">
                  </li>
                  <li>

                    <div class="input-counter">
                      <span>จำนวน : </span>
                      <div>
                        <span class="minus-btn">
                          <i class="fas fa-minus" style="padding: 0.4rem 1rem 0.4rem 1rem;"></i>
                        </span>
                        <input type="text" min="1" value="1" max="10" class="counter-btn">
                        <span class="plus-btn">
                          <i class="fas fa-plus" style="padding: 0.4rem 1rem 0.4rem 1rem;"></i>
                        </span>
                      </div>
                    </div>
                  </li>

                  <li>
                    <span>โดย :</span>
                    <a href="#" class="new__price">Scriper</a>
                  </li>
                  <li>
                    <span>วันที่วางขาย :</span>
                    <a href="#">13 ธันวาคม 2562</a>
                  </li>
                  <li>
                    <span>ความยาว :</span>
                    <a href="#">578 หน้า (≈ 162,101 คำ)</a>
                  </li>
                  <li>
                    <span>หมวดหมู่นิยายวาย :</span>
                    <a href="#" class="in-stock">หมวดหมู่นิยายวาย Boy Love / Yaoi</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="product-detail__bottom">
          <div class="title__container tabs">

            <div class="section__titles category__titles ">
              <div class="section__title detail-btn active" data-id="description">
                <span class="dot"></span>
                <h1 class="primary__title">ทดลองอ่าน</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title detail-btn" data-id="reviews">
                <span class="dot"></span>
                <h1 class="primary__title">รีวิว</h1>
              </div>
            </div>

            <div class="section__titles">
              <div class="section__title detail-btn" data-id="shipping">
                <span class="dot"></span>
                <h1 class="primary__title">วิธีสั่งซื้อหนังสือ</h1>
              </div>
            </div>
          </div>

          <div class="detail__content">
            <div class="content active" id="description">
              <h2> รายละเอียด : ฉลามไม่กินเนื้อ</h2>
              <h2>ฉลามไม่กินเนื้อ</h2>
              <h3>[ แมวน้ำ ]</h3>
              <p>เสียงเพลงคลอชวนฟังยามดึกดื่นพาให้โยกตัวแผ่วเบาตามจังหวะ</p>
              <p>สายตาผมกวาดมองไปทั่วทั้งร้านสบกับบางสายตาที่ตั้งใจส่งมาให้พลางขยับริมฝีปากส่งรอยยิ้มหวานกลับไป</p>
              <p>ทิ้งสายตาไว้สักพักก่อนจะเลื่อนไปที่อื่นคล้ายว่าไม่ได้ตั้งใจ</p>
              <p>ทั้งโต๊ะในตอนนี้มีเพียงผมคนเดียวเท่านั้น เพื่อนคนอื่นที่นัดกันว่าจะมาก็ยังไม่มีใครมาถึง</p>
              <p>ตั้งแต่นั่งมาก็มีหลายคนแวะเวียนมาชนแก้วและพูดคุยด้วย</p>
              <p>บางคนก็ชวนให้ผมไปนั่งกับกลุ่มเพื่อนเขาเพราะคิดว่าผมมาคนเดียว</p>
              <p>ตามจริงก็อยากจะไปอยู่หรอกถ้าเกิดไม่กลัวว่าไอ้พีทชวนเพื่อนชายใจหญิงมันจะตามมาจิกหัวผมทีหลังน่ะ</p>
              <p>แค่คิดก็เจ็บหนังหัวแล้วเนี่ย</p>

            </div>

            <!-- reviews -->
            <div class="content" id="reviews">
              <div class="reviews_chibi">
                <img src="./images/Chibi/IMG_1214.jpeg" alt="chibi"> <span> @Mumu
                </span>
                <br>  
                 <p> เป็นกำลังใจให้นักเขียนและทีมงานนักแสดงทุกคนเลยนะคะ
                  ชอบน้องมาร์คกับพ่อวีมากกกก ไม่ว่าความรักจะเกิดขึ้นแบบไหนรักก็คือรักค่ะ</p>
              </div>

              <div class="reviews_chibi">
                <img src="./images/Chibi/IMG_1215.jpeg" alt="chibi"> <span> @meeeee
                </span>
                &nbsp; &nbsp; <p>ชอบมากครับ อ่านแล้วเข้าใจความรู้สึกคนรอ เห็นค่าของความรักและคนสำคัญมากขึ้น
                  อยากกลับไปหาแฟน กอดไว้แน่นๆ แล้วบอกว่า จะไม่หายไปไหนอีกแล้วนะ</p>
              </div>

              <div class="reviews_chibi">
                <img src="./images/Chibi/IMG_1223.jpeg" alt="chibi"> <span> @meeeee
                </span>
                &nbsp; &nbsp; <p>โอ๊ยยยยย​ น่ารักมาก​ อยากได้แบบพี่ฉลาม​ มีเหลือบ้างไหม</p>
              </div>

              <div class="reviews_chibi">
                <img src="./images/Chibi/IMG_1218.jpeg" alt="chibi"> <span> @Nanyyyy
                </span>
                &nbsp; &nbsp; <p>
                  เรื่องนี้สนุกค่ะ อ่านได้แบบต่อเนื่องไม่มีตอนไหนน่าเบื่อเลย แล้วก้หยิบขึ้นมาวนอ่านได้หลายรอบเลย
                  อ่านไปก็เหมือนคนเป็นไบโพล่า เดี๋ยวหน่วงเด่วยิ้มมีความสุข สักพักโกรธพี่วีสงสารมาสะ สักพักสงสารพี่วี
                  เขียนดีมากๆเลยค่ะ จะติดตามผลงานไปตลอดนะคะ</p>
              </div>
            </div>
            <div class="content" id="shipping">
              <div class="how-to-buy">
                <img src="./images/howto__order.png">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- recomment for you Products -->
      <section class="section latest__products" id="latest">
        <div class="title__container">
          <div class="section__title active" data-id="Latest Products">
            <span class="dot"></span>
            <h1 class="primary__title">แนะนำสำหรับคุณ</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center">
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/นิยายแปล/นางโจร1.jpg" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>นางโจร เล่ม1</h3>
                      <p>ผู้เขียน : Priest (พีต้า)</p>
                      <p>หมวดหมู่ : นิยายรักจีนโบราณ</p>
                      <div class="rating">
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                      </div>
                      <div class="product__price">
                        <h4>280.00฿</h4>
                      </div>
                      <a href="./E-Book.html"><button type="submit" class="product__btn">ซื้อ</button></a>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/นิยายวาย/ยอมอย่างสิงห์.gif" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>ยอมอย่างสิงห์</h3>
                      <p>ผู้เขียน : KARINRUMPA</p>
                      <p>หมวดหมู่ : นิยายวาย Boy Love / Yaoi</p>
                      <div class="rating">
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                      </div>
                      <div class="product__price">
                        <h4>359.00฿</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">ซื้อ</button></a>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/นิยายวาย/นิทานพันดาว.gif" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>นิทานพันดาว</h3>
                      <p>ผู้เขียน : Bacteria</p>
                      <p>หมวดหมู่ : นิยายวาย Boy Love / Yaoi</p>
                      <div class="rating">
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                      </div>
                      <div class="product__price">
                        <h4>343.00฿</h4>
                      </div>
                      <a href="#"><button type="submit" class="product__btn">ซื้อ</button></a>
                    </div>
                  </div>
                </li>
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/นิยายแปล/นักรบพเนจรสุดขอบฟ้าเล่ม1.jpg" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>นักรบพเนจรสุดขอบฟ้า เล่ม1</h3>
                      <p>ผู้เขียน : Priest (พีต้า)</p>
                      <p>หมวดหมู่ : นิยายวาย Boy Love / Yaoi</p>
                      <div class="rating">
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="far fa-star" style="color: rgb(255, 186, 66);"></i>
                      </div>
                      <div class="product__price">
                        <h4>342.00฿</h4>

                      </div>
                      <a href="#"><button type="submit" class="product__btn">ซื้อ</button></a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Latest Products -->
      <section class="section latest__products" id="latest">
        <div class="title__container">
          <div class="section__title filter-btn active">
            <span class="dot"></span>
            <h1 class="primary__title">สิ่งที่คุณสนใจล่าสุด</h1>
          </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200">
          <div class="glide" id="glide_2">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides latest-center">
                <li class="glide__slide">
                  <div class="product">
                    <div class="product__header">
                      <img src="./images/นิยายแปล/นางโจร1.jpg" alt="product">
                    </div>
                    <div class="product__footer">
                      <h3>นางโจร เล่ม1</h3>
                      <p>ผู้เขียน : Priest (พีต้า)</p>
                      <p>หมวดหมู่ : นิยายรักจีนโบราณ</p>
                      <div class="rating">
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                        <i class="fas fa-star" style="color: rgb(255, 186, 66);"></i>
                      </div>
                      <div class="product__price">
                        <h4>280.00฿</h4>
                      </div>
                      <a href="./E-Book.html"><button type="submit" class="product__btn">ซื้อ</button></a>
                    </div>
                  </div>
                </li>
                </ul>
            </div>
          </div>
        </div>
      </section>
      
    </div>
  </main>

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