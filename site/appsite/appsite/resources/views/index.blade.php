@extends("layout.head")
<body>
    <!-- header-top-start -->
    <section id="header-top">
        <div class="container">
            <div class="row">
                <div class="header-top-message">
                    <p>سلام دوست من به وب سایت ما خوش اومدی.</p>
                </div>
                <div class="header-top-social">
                    <ul>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href=""><i class="fab fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- header-top-end -->

    <!-- info -->

    <section id="info">
        <div class="container">
            <div class="row">
                <div class="info-item">
                    <div class="info-item-icon">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="info-item-desc">
                        <p>شنبه تا پنجشنبه 8 صبح تا 18 بعد از ظهر </p>
                        <p class="friday">جمعه ها تعطیل</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-item-icon">
                        <i class="fas fa-map-marked"></i>
                    </div>
                    <div class="info-item-desc">
                        <p>شیراز کوچه 10 سمت راست فرعی اول سمت چپ فرعی دوم درب سوم راست </p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-item-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="info-item-desc phone">
                        <p>شماره : 07138325678</p>
                        <p class="mobile">شماره موبایل: 09171111111</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="slider">
        <div class="overlay">
            <div class="container">
                <div class="slider-desc">
                    <h1>شرکت فنی مهندسی تاپ لرن</h1>
                    <div class="typed">
                        <span id="typed"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="">خانه</a></li>
                    <li><a href="">خدمات ما</a></li>
                    <li><a href="">امکانات</a></li>
                    <li><a href="">تماس با ما</a></li>
                    <li><a href="">درباره ما</a></li>
                </ul>

                <div class="brand-logo">
                    <a href=""><img src="images/logo.svg" alt=""></a>
                </div>
            </nav>
        </div>
    </header>


    <section id="base-story">
        <div class="container">
            <div class="row">
                <div class="base-video">
                    <video poster="images/covervideo.jpg" controls>
                        <source src="video/construction.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="base-story">
                    <div class="story-title">
                        <h3>چه کاری برای شما میکنیم؟</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        </p>
                    </div>
                    <div class="base-story-item">
                        <div>
                            <a href="">
                                <i class="fas fa-hard-hat"></i>
                                <h4>نوسازی</h4>
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <i class="fas fa-tools"></i>
                                <h4>نقشه کشی</h4>
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <i class="fas fa-wrench"></i>
                                <h4>ساختمان سازی</h4>
                            </a>
                        </div>
                        <div>
                            <a href="">
                                <i class="fas fa-pencil-ruler"></i>
                                <h4>خاکبرداری</h4>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="services">
        <div class="overlay">
            <div class="container">
                <div class="section-title">
                    <h1>خدمات ما</h1>
                </div>
                <div class="row">
                    <div class="service">
                        <div class="tab-button">
                            <ul>
                                <li id="tab-one" class="active">نقشه کشی <i class="fas fa-ruler-vertical"></i></li>
                                <li id="tab-two">داربست <i class="fas fa-pencil-ruler"></i></li>
                                <li id="tab-three">نقاشی <i class="fas fa-paint-roller"></i></li>
                                <li id="tab-four">بتن ریزی <i class="fas fa-hard-hat"></i></li>
                                <li id="tab-five">تخریب <i class="fas fa-hammer"></i></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab hide active" id="tab-one-content">
                                <div class="content">
                                    <div class="content-title">
                                        <h3>نقشه کشی ساختمان</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                            است و
                                            برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                            کاربردی
                                            می باشد</p>
                                    </div>

                                    <div class="content-img">
                                        <img src="images/map.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-content-link">
                                    <a href="">بیشتر بدانید!</a>
                                </div>
                            </div>
                            <div class="tab hide" id="tab-two-content">
                                <div class="content">
                                    <div class="content-title">
                                        <h3>داربست</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                            است و
                                            برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                            کاربردی
                                            می باشد</p>
                                    </div>

                                    <div class="content-img">
                                        <img src="images/darbast.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-content-link">
                                    <a href="">بیشتر بدانید!</a>
                                </div>
                            </div>
                            <div class="tab hide" id="tab-three-content">
                                <div class="content">
                                    <div class="content-title">
                                        <h3>نقاشی</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                            است و
                                            برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                            کاربردی
                                            می باشد</p>
                                    </div>

                                    <div class="content-img">
                                        <img src="images/1417.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-content-link">
                                    <a href="">بیشتر بدانید!</a>
                                </div>
                            </div>
                            <div class="tab hide" id="tab-four-content">
                                <div class="content">
                                    <div class="content-title">
                                        <h3>بتن ریزی ساختمان</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                            است و
                                            برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                            کاربردی
                                            می باشد</p>
                                    </div>

                                    <div class="content-img">
                                        <img src="images/betonriz.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-content-link">
                                    <a href="">بیشتر بدانید!</a>
                                </div>
                            </div>
                            <div class="tab hide" id="tab-five-content">
                                <div class="content">
                                    <div class="content-title">
                                        <h3>تخریب</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان
                                            گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                            است و
                                            برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                            کاربردی
                                            می باشد</p>
                                    </div>

                                    <div class="content-img">
                                        <img src="images/takhrib.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-content-link">
                                    <a href="">بیشتر بدانید!</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h1>درباره ما</h1>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                        کاربردی
                        می باشد</p>
                    <button>بیشتر بخوانید</button>
                </div>
                <div class="about-team">
                    <div class="about-team-item">
                        <img src="images/4.jpg" alt="">
                        <div class="about-slide">
                            <ul>
                                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                <li><a href=""><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <h4>ناهید محمدی</h4>
                            <h5>نقشه کش</h5>
                        </div>
                    </div>
                    <div class="about-team-item">
                        <img src="images/5.jpg" alt="">
                        <div class="about-slide">
                            <ul>
                                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                <li><a href=""><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <h4>احمد محمدی</h4>
                            <h5>مهندس فنی</h5>
                        </div>
                    </div>
                    <div class="about-team-item">
                        <img src="images/3.jpg" alt="">
                        <div class="about-slide">
                            <ul>
                                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                <li><a href=""><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <h4>جواد قاسمی</h4>
                            <h5>پیمانکار</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="beautiText">
        <div class="container">
            <div class="row">
                <div class="beautitext">
                    <h1>آن ها به آرزوهای تو میخندند تا زمانی که بتوانی از آرزوهایت پول درآوری </h1>
                    <a href="">اینجا کلیک کنید</a>
                </div>
            </div>
        </div>
    </section>



    <section id="project">
        <div class="container">
            <div class="section-title">
                <h1>پروژه ها</h1>
                <button>اینجا کلیک کنید</button>
            </div>
        </div>
        <div class="container">
            <div class="box">

                <ul id="lightSlider">
                    <li>
                        <div class="box-item">
                            <a href="">
                                <img src="images/project1.jpg" alt="">
                                <h4>لورم ایپسوم</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="box-item">
                            <a href="">
                                <img src="images/project2.jpg" alt="">
                                <h4>لورم ایپسوم</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="box-item">
                            <a href="">
                                <img src="images/project3.jpg" alt="">
                                <h4>لورم ایپسوم</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="box-item">
                            <a href="">
                                <img src="images/project4.jpg" alt="">
                                <h4>لورم ایپسوم</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="box-item">
                            <a href="">
                                <img src="images/project5.jpg" alt="">
                                <h4>لورم ایپسوم</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="box-item">
                            <a href="">
                                <img src="images/project2.jpg" alt="">
                                <h4>لورم ایپسوم</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</p>
                            </a>
                        </div>
                    </li>
                </ul>


            </div>
        </div>
    </section>


    <section id="article">
        <div class="article-overlay">
            <div class="container">
                <div class="section-title">
                    <h1>مقاله ها</h1>
                    <button>اینجا کلیک کنید</button>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="article-post">
                        <div class="post">
                            <a href="" class="post-img">
                                <img src="images/bastan.jpg" alt="">
                                <div class="post-overlay"><i class="fas fa-search"></i></div>
                                <div class="date">
                                    <h2><i class="far fa-calendar-alt"></i> 16 شهرریور 1399</h2>
                                    <h2><i class="fas fa-comment-alt"></i>5 کامنت</h2>
                                </div>
                            </a>
                            <div class="post-desc">
                                <h3><a href="#">سازه های باستانی</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</p>
                            </div>
                        </div>
                        <div class="post">
                            <a href="" class="post-img">
                                <img src="images/modern.jpg" alt="">
                                <div class="post-overlay"><i class="fas fa-search"></i></div>
                                <div class="date">
                                    <h2><i class="far fa-calendar-alt"></i> 16 شهرریور 1399</h2>
                                    <h2><i class="fas fa-comment-alt"></i>5 کامنت</h2>
                                </div>
                            </a>
                            <div class="post-desc">
                                <h3><a href="#">سازه های مدرن</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</p>
                            </div>
                        </div>
                        <div class="post">
                            <a href="" class="post-img">
                                <img src="images/sonat.jpg" alt="">
                                <div class="post-overlay"><i class="fas fa-search"></i></div>
                                <div class="date">
                                    <h2><i class="far fa-calendar-alt"></i> 16 شهرریور 1399</h2>
                                    <h2><i class="fas fa-comment-alt"></i>5 کامنت</h2>
                                </div>
                            </a>
                            <div class="post-desc">
                                <h3><a href="#">سازه های سنتی</a></h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="partner">
        <div class="container">
            <div class="row">
                <ul>
                    <li><a href=""><img src="images/company-1.jpg" alt=""></a></li>
                    <li><a href=""><img src="images/company-2.jpg" alt=""></a></li>
                    <li><a href=""><img src="images/company-3.jpg" alt=""></a></li>
                    <li><a href=""><img src="images/company-4.jpg" alt=""></a></li>
                </ul>
            </div>
        </div>
    </section>



    <footer id="footer">
        <div class="container">
            <div class="footer-about">
                <div class="footer-about-title">
                    <h3>ما کی هستیم</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div>

                <div class="footer-about-contact">
                    <form>
                        <input type="text" placeholder="جستجو کنید">
                        <button>میگردم</button>
                    </form>

                    <div class="footer-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="footer-content">
                <div class="hot-content">

                    <h3>مطالب داغ</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <div class="hot-content-title">
                                    <h5>مطلب اول</h5>
                                    <p>مطلب داغ اول است</p>
                                </div>
                                <img src="images/project1.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="hot-content-title">
                                    <h5>مطلب اول</h5>
                                    <p>مطلب داغ اول است</p>
                                </div>
                                <img src="images/project2.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="hot-content-title">
                                    <h5>مطلب اول</h5>
                                    <p>مطلب داغ اول است</p>
                                </div>
                                <img src="images/project3.jpg" alt="">
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="quick-access">

                    <h3>دسترسی سریع</h3>
                    <ul>
                        <li><a href="#">صفحه نخست</a></li>
                        <li><a href="#">پروژه ها</a></li>
                        <li><a href="#">درباره ما </a></li>
                        <li><a href="#">تماس با ما </a></li>
                    </ul>

                </div>
                <div class="portfolio">

                    <h3>نمونه کارها</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <div class="portfolio-content-title">
                                    <h5>نمونه کار اول</h5>
                                    <p>مطلب داغ اول است</p>
                                </div>
                                <img src="images/project4.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="portfolio-content-title">
                                    <h5>نمونه کار دوم</h5>
                                    <p>مطلب داغ اول است</p>
                                </div>
                                <img src="images/project5.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="portfolio-content-title">
                                    <h5>نمونه کار سوم</h5>
                                    <p>مطلب داغ اول است</p>
                                </div>
                                <img src="images/project1.jpg" alt="">
                            </a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>

        <div class="copy-right">
            <h5>طراحی شده با <i class="fas fa-code"></i> و <i class="fas fa-heartbeat"></i> توسط بچه های تاپلرن</h5>
            <p>تمامی حقوق مادی و معنوی این اثر متعلق به تیم تاپ لرن است و هرگونه کپی برداری پیگرد قانونی دارد.</p>
        </div>

    </footer>

@extends('layout.script')
</body>

</html>
