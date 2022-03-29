<!DOCTYPE html>
<html dir="rtl" lang="ar">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/all.min.css">
		<base href="../" />
	</head>
	<body>
		<nav class="main-nav d-lg-block" id="main-nav">
            <div class="container">
                <ul class="row align-content-center justify-content-space-between">
                    <li>
                        <img src="assets/imgs/register.svg">
                        <b>
                            <span onclick="openModal('signup-login-modal', 'loginForm')">
                                ادخل لحسابك
                            </span>
                            أو
                            <span onclick="openModal('signup-login-modal', 'signupForm')">
                                سجل الآن
                            </span>
                        </b>
                    </li>
                    <li>
                        <a href="/home">
                            <img src="assets/imgs/main.svg">
                            الرئيسية
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/imgs/who.svg">
                            من نحن
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/imgs/warranty.svg">
                            اتصل بنا
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/imgs/help.svg">
                            المساعدة
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/imgs/privacy.svg">
                            سياسة الخصوصية
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/imgs/saudi.svg">
                            YER اليمن
                        </a>
                    </li>
                    <li class="change-language">
                        <a href="#">
                            <span>English</span>
                            <img src="assets/imgs/language.svg">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="signup-login-modal" class="modal">
            <div id="signup-login-modal-content" class="modal-content col-xs-9 col-sm-8 col-md-6 col-lg-4"></div>
        </div>
        <div id="top-header" class="top-header py-1 relative">  
            <div class="container d-grid g-10">
                <div class="toggle d-lg-none align-self-center">
                    <img src="assets/imgs/menubar.svg" alt="icon" width="20">
                </div>
                <nav class="mobile-nav d-none d-none d-lg-none">
                    <ul class="row align-content-center justify-content-space-between">
                        <li>
                            <img src="assets/imgs/register.svg">
                            <b>
                                <span onclick="openModal('signup-login-modal', 'loginForm')">
                                    ادخل لحسابك
                                </span>
                                أو
                                <span onclick="openModal('signup-login-modal', 'signupForm')">
                                    سجل الآن
                                </span>
                            </b>
                        </li>
                        <li>
                            <a href="/home">
                                <img src="assets/imgs/main.svg">
                                الرئيسية
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/imgs/who.svg">
                                من نحن
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/imgs/warranty.svg">
                                اتصل بنا
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/imgs/help.svg">
                                المساعدة
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/imgs/privacy.svg">
                                سياسة الخصوصية
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/imgs/saudi.svg">
                                YER اليمن
                            </a>
                        </li>
                        <li class="change-language">
                            <a href="#">
                                <span>English</span>
                                <img src="assets/imgs/language.svg">
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="text-align-center">
                    <a href="/home" class="logo">
                        <img src="assets/imgs/logo.png" alt="">
                    </a>
                </div>
                <form action="" class="d-flex">
                    <label for="header_search"></label>
                    <input
                        onkeyup="search_book()"
                        id="header_search"
                        type="search"
                        name="header_search"
                        placeholder="البحث"
                        class="w-100"
                    >
                    <button type="submit" name="header_search_submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <div class="text-align-center">
                    <a class="cart-btn" href="pages/cart">
                        <img src="assets/imgs/cart.svg">
                        <!-- <span class="cart-quantity" id="cart-quantity">0</span> -->
                    </a>
                </div>  
            </div>  
        </div>
		<div class="category-section">
			<div class="container">
				<ul class="breadcrumb d-flex">
					<li><a href="/home">الرئيسية</a></li>
					<li><a href="#">الكتب العربية</a></li>
					<li><a href="#">كتب إلكترونية</a></li>
					<li>لأنك الله (كتاب إلكتروني)</li>
				</ul>
				<div class="row justify-content-center md-justify-content-space-between">
					<div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-2">
						<div class="category-name">
							<h4><img src="assets/imgs/green-book.svg" alt="icon" width="30">
								كتاب إلكتروني
							</h4>
						</div>
						<div class="filter-box">
							<div class="filter-header p-1">تصفية النتائج</div>
							<div idi="filter-accordion" class="filter-accordion">
								<div class="accordion-item close">
									<div class="accordion-header d-flex justify-content-space-between" id="headingOne">
										<span>علامة تجارية</span>
										<span class="fa fa-plus fs-sm"></span>
									</div>
									<div class="accordion-content">
										Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, velit?
									</div>
								</div>
								<div class="accordion-item open">
									<div class="accordion-header d-flex justify-content-space-between" id="headingOne">
										<span>السعر</span>
										<span class="fa fa-minus fs-sm"></span>
									</div>
									<div class="accordion-content">
										<input type="range" name="filterPrice" id="">
										<div class="range-sides d-flex justify-content-space-between">
											<span class="start">0ر.س</span>
											<span class="end">150ر.س</span>
										</div>
									</div>
								</div>
								<div class="accordion-item close">
									<div class="accordion-header d-flex justify-content-space-between" id="headingOne">
										<span>صيغة الكتاب</span>
										<span class="fa fa-plus fs-sm"></span>
									</div>
									<div class="accordion-content">
										Lorem ipsum dolor sit amet.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-9 col-lg-9">
						<section class="filter-by row justify-content-flex-end align-items-center">
							<span class="mb-1" onclick="sort_by()">الترتيب بحسب : </span>
							<div class="filter-by-options mr-2">
								<div class="select w-100">
									<select class="w-100">
										<option value="" selected="selected" disabled="disabled">الرجاء الاختيار</option>
									  	<option value="2">حسب السعر</option>
									  	<option value="3">حسب الاسم</option>
									</select>
								</div>
							</div>
						</section>
						<section id="category-details-items" class="category-details-items mt-2 mr-2">
							<div class="row justify-content-center md-justify-content-flex-start">
								<div class="card-item">
									<a href="./pages/details" class="link">
										<img src="./assets/imgs/books/كبرياء وهوى.jpg" alt="book img" width="100%">
									</a>
									<div class="card-body px-2 text-align-center">
										<h5 class="card-type">
											<img src="./assets/imgs/redBook.svg" alt="">
											كتاب الكتروني
										</h5>
										<p class="card-name">
											<a href="./pages/details">كبرياء وهوى(كتاب إلكتروني)</a>
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
									<a href="./pages/details" class="link">
										<img src="./assets/imgs/books/behind strong.jpg" alt="book img" width="100%">
									</a>
									<div class="card-body px-2 text-align-center">
										<h5 class="card-type">
											<img src="./assets/imgs/redBook.svg" alt="">
											كتاب الكتروني
										</h5>
										<p class="card-name">
											<a href="./pages/details">خلف قوتي ضعف يحبك (كتاب إلكتروني)
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
									<a href="./pages/details" class="link">
										<img src="./assets/imgs/books/love book.jpg" alt="book img" width="100%">
									</a>
									<div class="card-body px-2 text-align-center">
										<h5 class="card-type">
											<img src="./assets/imgs/redBook.svg" alt="">
											كتاب الكتروني
										</h5>
										<p class="card-name">
											<a href="./pages/details">كتالوج الحب (كتاب إلكتروني)</a>
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
									<a href="./pages/details" class="link">
										<img src="./assets/imgs/books/who take me.jpg" alt="book img" width="100%">
									</a>
									<div class="card-body px-2 text-align-center">
										<h5 class="card-type">
											<img src="./assets/imgs/redBook.svg" alt="">
											كتاب الكتروني
										</h5>
										<p class="card-name">
											<a href="./pages/details">إلى الذي أسرني حبه (كتاب إلكتروني)
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
									<a href="./pages/details" class="link">
										<img src="./assets/imgs/books/unexpected marriage.jpg" alt="book img" width="100%">
									</a>
									<div class="card-body px-2 text-align-center">
										<h5 class="card-type">
											<img src="./assets/imgs/redBook.svg" alt="">
											كتاب الكتروني
										</h5>
										<p class="card-name">
											<a href="./pages/details">زواج غير متوقع (كتاب إلكتروني)</a>
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
									<a href="./pages/details" class="link">
										<img src="./assets/imgs/books/behind strong.jpg" alt="book img" width="100%">
									</a>
									<div class="card-body px-2 text-align-center">
										<h5 class="card-type">
											<img src="./assets/imgs/redBook.svg" alt="">
											كتاب الكتروني
										</h5>
										<p class="card-name">
											<a href="./pages/details">خلف قوتي ضعف يحبك (كتاب إلكتروني)
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
									<a href="./pages/details" class="link">
										<img src="./assets/imgs/books/love book.jpg" alt="book img" width="100%">
									</a>
									<div class="card-body px-2 text-align-center">
										<h5 class="card-type">
											<img src="./assets/imgs/redBook.svg" alt="">
											كتاب الكتروني
										</h5>
										<p class="card-name">
											<a href="./pages/details">كتالوج الحب (كتاب إلكتروني)</a>
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
									<a href="./pages/details" class="link">
										<img src="./assets/imgs/books/who take me.jpg" alt="book img" width="100%">
									</a>
									<div class="card-body px-2 text-align-center">
										<h5 class="card-type">
											<img src="./assets/imgs/redBook.svg" alt="">
											كتاب الكتروني
										</h5>
										<p class="card-name">
											<a href="./pages/details">إلى الذي أسرني حبه (كتاب إلكتروني)
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
							</div>	
						</section>
						<button class="btn blue-btn mr-2 py-1 w-100 text-align-center">
							عرض المزيد
						</button>
					</div>
				</div>
			</div>
		</div>
		<footer class="mt-3">
            <div class="container mb-2">
                <div class="flex-col md-dir-row justify-content-space-between">
                    <div class="col-md-5 col-lg-3 mb-3">
                        <h4 class="subscribe d-md-block">انضم إلى نشرتنا البريدية</h4>
                        <form action="" class="col-flex g-10">
                            <div class="form-control email">
                                <label for="subscribe"></label>
                                <input
                                    id="subscribe"
                                    type="email"
                                    name="subscribe"
                                    placeholder="ادخل بريدك الالكتروني"
                                    class="w-100"
                                >
                                <i class="fa fa-lock"></i>
                            </div>
                            <div class="form-control ms-auto w-fit-content mt-1">
                                <input type="submit" value="اشتراك">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <h4>خدمة العملاء</h4>
                        <ul class="d-md-block">
                            <li>
                                <a href="#">مبيعات الشركات</a>
                            </li>
                            <li>
                                <a href="#">الأسئلة المتكررة</a>
                            </li>
                            <li>
                                <a href="#">دليل التسوق والمطبوعات</a>
                            </li>
                            <li>
                                <a href="#">مواقع المعارض</a>
                            </li>
                            <li>
                                <a href="#">سياسة الضمان</a>
                            </li>
                            <li>
                                <a href="#">سياسة الاسترجاع والاستبدال</a>
                            </li>
                            <li>
                                <a href="#">اتصل بنا</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <h4>خدمات جرير</h4>
                        <ul class="d-md-block">
                            <li>
                                <a href="#">خدمة تقسيط المشتريات</a>
                            </li>
                            <li>
                                <a href="#">خدمات ما بعد البيع</a>
                            </li>
                            <li>
                                <a href="#">خدمات الحماية الشاملة</a>
                            </li>
                            <li>
                                <a href="#">حماية أجهزة آبل</a>
                            </li>
                            <li>
                                <a href="#">بطاقة خصم جرير</a>
                            </li>
                            <li>
                                <a href="#">بطاقة جرير للهدايا</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <h4>روابط سريعة</h4>
                        <ul class="d-md-block">
                            <li>
                                <a href="#">إصدارات جرير</a>
                            </li>
                            <li>
                                <a href="#">قارئ جرير</a>
                            </li>
                            <li>
                                <a href="#">شركاء برامج المكافآت</a>
                            </li>
                            <li>
                                <a href="#">خدمات شركات الاتصالات</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <h4>عن جرير</h4>
                        <ul class="d-md-block">
                            <li>
                                <a href="#">من نحن</a>
                            </li>
                            <li>
                                <a href="#">الحوكمة</a>
                            </li>
                            <li>
                                <a href="#">علاقات المستثمرين</a>
                            </li>
                            <li>
                                <a href="#">الاستدامة</a>
                            </li>
                            <li>
                                <a href="#">الأخبار</a>
                            </li>
                            <li>
                                <a href="#">فرص العمل</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <h4>تواصل معنا</h4>
                        <div class="social-media row fjustify-content-space-between md-justify-content-flex-start">
                            <a href="#" class="social-icon">
                                <img src="assets/imgs/socialMedia/facebook.svg">
                            </a>
                            <a href="#" class="social-icon">
                                <img src="assets/imgs/socialMedia/twitter.svg">
                            </a>
                            <a href="#" class="social-icon">
                                <img src="assets/imgs/socialMedia/youtube.svg">
                            </a>
                            <a href="#" class="social-icon">
                                <img src="assets/imgs/socialMedia/instagram.svg">
                            </a>
                            <a href="#" class="social-icon">
                                <img src="assets/imgs/socialMedia/linkedin.svg">
                            </a>
                            <a href="#" class="social-icon">
                                <img src="assets/imgs/socialMedia/snapshat.svg">
                            </a>
                            <a href="#" class="social-icon">
                                <img src="assets/imgs/socialMedia/music.svg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bottom-footer lg-justify-content-space-between align-items-center">
                <div class="payment-method d-inline-block md-mr-3">
                    <img src="assets/imgs/paymentMethods/americanExpress.svg" alt="" style="background-color: #27ade4">
                    <img src="assets/imgs/paymentMethods/masterCard.svg" alt="">
                    <img src="assets/imgs/paymentMethods/visa.svg" alt="">
                    <img src="assets/imgs/paymentMethods/mada.svg" alt="" style="background-color: #fff; padding-block: 8px">
                    <img src="assets/imgs/paymentMethods/qitaf.svg" alt="" style="background-color: #fff">
                    <img src="assets/imgs/paymentMethods/payInShop.svg" alt="" style="background-color: #fff">
                </div>
                <div class="copyright">
                    <p class="lg-text-align-end">
                        <a href="#">سياسة الخصوصية</a>
                        |
                        <a href="#">شروط الخدمة</a>
                        <br>
                        جميع الحقوق محفوظة لمكتبة جرير&copy; 2015 س.ت.1010032264. اونلاين
						س.ت.1010654213
                    </p>
                </div>
            </div>
        </footer>
		<script src="js/cart.js"></script>
		<script src="js/modals.js"></script>
		<script src="js/accordion.js"></script>
		<script src="js/slider.js"></script>
		<script src="js/search.js"></script>
		<script src="js/changeLang.js"></script>
		<script src="js/menuBar.js"></script>
		<script src="js/counterDown.js"></script>
	</body>
</html>
