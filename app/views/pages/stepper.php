<!DOCTYPE html>
<html dir="rtl" lang="ar">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Cart | السلة</title>
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
		<main class="checkout">
			<div class="stepper">
				<div class="step--1 step-active">Step 1</div>
				<div class="step--2">Step 2</div>
				<div class="step--3">Step 3</div>
				<div class="step--4">Finish</div>
			</div>
			<form class="form form-active">
				<div class="form--header-container">
					<h1 class="form--header-title">معلوماتك الشخصية</h1>
				</div>
				<input type="text" placeholder="FullName" />
				<input type="text" placeholder="Email" />
				<input type="text" placeholder="mobile number" />
				<button class="form__btn" id="btn-1">Next</button>
			</form>
			<form class="form">
				<div class="form--header-container">
					<h1 class="form--header-title">منتجاتك</h1>
				</div>

				<div class="cart-item px-2 pt-2 mt-1">
					<div class="item-above d-flex">
						<div class="ml-1">
							<img src="assets/imgs/books/book11.jpg" alt="user" width="40" />
						</div>
						<div class="item-details">
							<span class="h6">
								البداية والنهاية الجزء الأول (كتاب إلكتروني)
							</span>
							<br />
							<span class="subtitle">
								منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير
							</span>
							<div>
								<blockquote class="blockquote my-1">
									<p>
										<b>ملاحظة:</b>
										هذا المنتج رقمي وسيتم توصيله عبر البريد الإلكتروني
									</p>
									<span>
										<a href="#">كيفية الحصول على منتج?</a>
									</span>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="item-bottom py-1">
						<span class="link">
							<i class="fa fa-close"></i>
							احذف
						</span>
					</div>
				</div>

				<button class="form__btn" id="btn-2-prev">Previous</button>
				<button class="form__btn" id="btn-2-next">Next</button>
			</form>
			<form class="form">
				<div class="form--header-container">
					<h1 class="form--header-title">طرق الدفع</h1>
				</div>
				<ul class="d-flex justify-content-space-between px-2">
					<li>
						<img
							src="assets/imgs/paymentMethods/americanExpress.svg"
							alt=""
							width="40"
						/>
					</li>
					<li><img src="assets/imgs/paymentMethods/mada.svg" alt="" width="40" /></li>
					<li><img src="assets/imgs/paymentMethods/visa.svg" alt="" width="40" /></li>
					<li>
						<img src="assets/imgs/paymentMethods/masterCard.svg" alt="" width="40" />
					</li>
					<li>
						<img src="assets/imgs/paymentMethods/payInShop.svg" alt="" width="40" />
					</li>
					<li><img src="assets/imgs/paymentMethods/qitaf.svg" alt="" width="40" /></li>
				</ul>
				<input type="text" placeholder="card number" />
				<input type="text" placeholder="expireDate" />
				<input type="text" placeholder="PIN" />
				<button class="form__btn" id="btn-3">Submit</button>
			</form>

			<div class="form--message"></div>
		</main>
		<footer class="mt-2">
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
								/>
								<i class="fa fa-lock"></i>
							</div>
							<div class="form-control ms-auto w-fit-content mt-1">
								<input type="submit" value="اشتراك" />
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
						<div
							class="social-media d-flex justify-content-space-between md-justify-content-flex-start"
						>
							<a href="#" class="social-icon">
								<img src="assets/imgs/socialMedia/facebook.svg" />
							</a>
							<a href="#" class="social-icon">
								<img src="assets/imgs/socialMedia/twitter.svg" />
							</a>
							<a href="#" class="social-icon">
								<img src="assets/imgs/socialMedia/youtube.svg" />
							</a>
							<a href="#" class="social-icon">
								<img src="assets/imgs/socialMedia/instagram.svg" />
							</a>
							<a href="#" class="social-icon">
								<img src="assets/imgs/socialMedia/linkedin.svg" />
							</a>
							<a href="#" class="social-icon">
								<img src="assets/imgs/socialMedia/snapshat.svg" />
							</a>
							<a href="#" class="social-icon">
								<img src="assets/imgs/socialMedia/music.svg" />
							</a>
						</div>
					</div>
				</div>
			</div>
			<div
				class="row bottom-footer lg-justify-content-space-between align-items-center"
			>
				<div class="payment-method d-inline-block md-mr-3">
					<img
						src="assets/imgs/paymentMethods/americanExpress.svg"
						alt=""
						style="background-color: #27ade4"
					/>
					<img src="assets/imgs/paymentMethods/masterCard.svg" alt="" />
					<img src="assets/imgs/paymentMethods/visa.svg" alt="" />
					<img
						src="assets/imgs/paymentMethods/mada.svg"
						alt=""
						style="background-color: #fff; padding-block: 8px"
					/>
					<img
						src="assets/imgs/paymentMethods/qitaf.svg"
						alt=""
						style="background-color: #fff"
					/>
					<img
						src="assets/imgs/paymentMethods/payInShop.svg"
						alt=""
						style="background-color: #fff"
					/>
				</div>
				<div class="copyright">
					<p class="lg-text-align-end">
						<a href="#">سياسة الخصوصية</a>
						|
						<a href="#">شروط الخدمة</a>
						<br />
						جميع الحقوق محفوظة لمكتبة جرير&copy; 2015 س.ت.1010032264. اونلاين
						س.ت.1010654213
					</p>
				</div>
			</div>
		</footer>
		<script src="js/cart.js"></script>
		<script src="js/modals.js"></script>
		<script src="js/radomAdvertisment.js"></script>
		<script src="js/slider.js"></script>
		<script src="js/search.js"></script>
		<script src="js/changeLang.js"></script>
		<script src="js/menuBar.js"></script>
		<script src="js/counterDown.js"></script>
		<script src="js/formPopup.js"></script>
	</body>
</html>