<?php
    include 'includes/head.php';
    include 'includes/nav.php';
    include 'includes/header.php';
?>
<section class="adBanner-section py-2">
    <div class="container">
        <div class="d-grid g-lg-4 g-sm-2 g-1">
            <div>
                <img
                    src=""
                    id="advert1"
                    alt=""
                    class="advert"
                >
            </div>
            <div>
                <img
                    src=""
                    id="advert2"
                    alt=""
                    class="advert"
                >
            </div>
            <div>
                <img
                    src=""
                    id="advert3"
                    alt=""
                    class="advert"
                >
            </div>
            <div>
                <img
                    src=""
                    id="advert4"
                    alt=""
                    class="advert"
                >
            </div>
            <div>
                <img src="assets/imgs/sliders/slider8.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section class="category-details-sections">
    <div class="container">
        <section class="category-details-row py-2">
            <div class="section-top d-flex align-items-baseline justify-content-space-between">
                <h2 class="h3 mb-1">العروض الحالية</h2>
                <a href="/category">عرض الكل</a>
            </div>
            <div class="section-content d-flex">
                <button class="next-btn">
                    <img src="./assets/imgs/arrowNext.svg" alt="" width="40" class="arrow" onclick="oneStepSlider('scrolled', 'next', 1)" style="margin-top: -20px">
                </button>
                <div class="d-flex scrolled">
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/كبرياء وهوى.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="details">كبرياء وهوى(كتاب إلكتروني)</a>
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                            <p class="offer-left">
                                <img
                                    src="./assets/imgs/notification.svg"
                                    alt="icon"
                                    width="30"
                                    class="pl-1"
                                >
                                متبقي على العرض
                                <b></b>
                                يوم
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/behind strong.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">خلف قوتي ضعف يحبك (كتاب إلكتروني)
                                </a>
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                            <p class="offer-left">
                                <img
                                    src="./assets/imgs/notification.svg"
                                    alt="icon"
                                    width="30"
                                    class="pl-1"
                                >
                                متبقي على العرض
                                <b></b>
                                يوم
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/love book.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">كتالوج الحب (كتاب إلكتروني)</a>
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                            <p class="offer-left">
                                <img
                                    src="./assets/imgs/notification.svg"
                                    alt="icon"
                                    width="30"
                                    class="pl-1"
                                >
                                متبقي على العرض
                                <b></b>
                                يوم
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct js-cart">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/who take me.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">إلى الذي أسرني حبه (كتاب إلكتروني)
                                </a
                                >
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                            <p class="offer-left">
                                <img
                                    src="./assets/imgs/notification.svg"
                                    alt="icon"
                                    width="30"
                                    class="pl-1"
                                >
                                متبقي على العرض
                                <b></b>
                                يوم
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/unexpected marriage.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">زواج غير متوقع (كتاب إلكتروني)</a>
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                            <p class="offer-left">
                                <img
                                    src="./assets/imgs/notification.svg"
                                    alt="icon"
                                    width="30"
                                    class="pl-1"
                                >
                                متبقي على العرض
                                <b></b>
                                يوم
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct js-cart">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button class="prev-btn">
                    <img
                    src="./assets/imgs/arrowNext.svg" alt="arrow" width="40px"
                    style="transform: rotate(180deg); margin-top: -20px" class="arrow" onclick="oneStepSlider('scrolled', 'prev', 1)"      
                    >
                </button>
            </div>
        </section>
        <section class="category-details-row py-2">
            <div class="section-top d-flex align-items-baseline justify-content-space-between">
                <h2 class="h3 mb-1">الكتب الدينية</h2>
                <a href="/category">عرض الكل</a>
            </div>
            <div class="section-content d-flex">
                <button class="next-btn">
                    <img src="./assets/imgs/arrowNext.svg" alt="" width="40" class="arrow" onclick="oneStepSlider('scrolled', 'next', 2)">
                </button>
                <div class="d-flex scrolled">
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/كبرياء وهوى.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">كبرياء وهوى(كتاب إلكتروني)</a>
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/behind strong.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">خلف قوتي ضعف يحبك (كتاب إلكتروني)
                                </a>
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/love book.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">كتالوج الحب (كتاب إلكتروني)</a>
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct js-cart">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/who take me.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">إلى الذي أسرني حبه (كتاب إلكتروني)
                                </a
                                >
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/unexpected marriage.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">زواج غير متوقع (كتاب إلكتروني)</a>
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct js-cart">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button class="prev-btn">
                    <img
                    src="./assets/imgs/arrowNext.svg" alt="arrow" width="40px"
                    style="transform: rotate(180deg); margin-top: -20px" class="arrow" onclick="oneStepSlider('scrolled', 'prev', 2)"      
                    >
                </button>
            </div>
        </section>
        <section class="category-details-row py-2">
            <div class="section-top d-flex align-items-baseline justify-content-space-between">
                <h2 class="h3 mb-1">الكتب التاريخية</h2>
                <a href="/category">عرض الكل</a>
            </div>
            <div class="section-content d-flex">
                <button class="next-btn">
                    <img src="./assets/imgs/arrowNext.svg" alt="" width="40" class="arrow" onclick="oneStepSlider('scrolled', 'next', 2)">
                </button>
                <div class="d-flex scrolled">
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/كبرياء وهوى.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">كبرياء وهوى(كتاب إلكتروني)</a>
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/behind strong.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">خلف قوتي ضعف يحبك (كتاب إلكتروني)
                                </a>
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/love book.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">كتالوج الحب (كتاب إلكتروني)</a>
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct js-cart">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/who take me.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">إلى الذي أسرني حبه (كتاب إلكتروني)
                                </a
                                >
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-item">
                        <a href="/details" class="link">
                            <img src="./assets/imgs/books/unexpected marriage.jpg" alt="book img" width="100%">
                        </a>
                        <div class="card-body px-2 text-align-center">
                            <h5 class="card-type">
                                <img src="./assets/imgs/redBook.svg" alt="">
                                كتاب الكتروني
                            </h5>
                            <p class="card-name">
                                <a href="/details">زواج غير متوقع (كتاب إلكتروني)</a>
                            </p>
                            <p class="price my-1">
                                <span class="h3">17.99</span>
                                .ر.س
                                <br>
                                <span class="include-tax">شامل الضريبة</span>
                            </p>
                        </div>
                        <ul class="card-footer px-2 d-flex justify-content-space-between align-items-center">
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/main.svg">
                                </a>
                            </li>
                            <li>
                                <a class="addProduct js-cart">
                                    <img src="./assets/imgs/addProduct.svg">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="./assets/imgs/exchange.svg">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button class="prev-btn">
                    <img
                    src="./assets/imgs/arrowNext.svg" alt="arrow" width="40px"
                    style="transform: rotate(180deg); margin-top: -20px" class="arrow" onclick="oneStepSlider('scrolled', 'prev', 2)"      
                    >
                </button>
            </div>
        </section>
    </div>
</section>
<?php
    include_once 'includes/footer.php';
    include_once 'includes/tail.php';
?>