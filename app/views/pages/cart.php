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
                        <img src="imgs/register.svg">
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
                        <a href="index.html">
                            <img src="imgs/main.svg">
                            الرئيسية
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="imgs/who.svg">
                            من نحن
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="imgs/warranty.svg">
                            اتصل بنا
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="imgs/help.svg">
                            المساعدة
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="imgs/privacy.svg">
                            سياسة الخصوصية
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="imgs/saudi.svg">
                            YER اليمن
                        </a>
                    </li>
                    <li class="change-language">
                        <a href="#">
                            <span>English</span>
                            <img src="imgs/language.svg">
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
                    <img src="imgs/menubar.svg" alt="icon" width="20">
                </div>
                <nav class="mobile-nav d-none d-none d-lg-none">
                    <ul class="row align-content-center justify-content-space-between">
                        <li>
                            <img src="imgs/register.svg">
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
                            <a href="index.html">
                                <img src="imgs/main.svg">
                                الرئيسية
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="imgs/who.svg">
                                من نحن
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="imgs/warranty.svg">
                                اتصل بنا
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="imgs/help.svg">
                                المساعدة
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="imgs/privacy.svg">
                                سياسة الخصوصية
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="imgs/saudi.svg">
                                YER اليمن
                            </a>
                        </li>
                        <li class="change-language">
                            <a href="#">
                                <span>English</span>
                                <img src="imgs/language.svg">
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="text-align-center">
                    <a href="index.html" class="logo">
                        <img src="imgs/logo.png" alt="">
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
                    <a class="cart-btn" href="pages/cart.html">
                        <img src="imgs/cart.svg">
                        <!-- <span class="cart-quantity" id="cart-quantity">0</span> -->
                    </a>
                </div>  
            </div>  
        </div>
		<section class="cart-section my-2">
			<div class="container">
				<div class="h4 title mb-2">
					<img src="imgs/cart.svg" />
					السلة
					<span class="subtitle">(3 منتجات)</span>
				</div>
				<div class="row justify-content-space-between">
					<div class="col-xs-12 col-sm-12 col-md-7">
						<div class="cart-item px-2 pt-2 mt-1">
							<div class="item-above d-flex">
								<div class="ml-1">
									<img src="imgs/books/book11.jpg" alt="user" width="40" />
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
								<div class="ms-auto flex-col justify-content-space-between">
									<p class="price"><span class="h4">17.99</span>.ر.س</p>
									<div class="qty-block mb-1 d-flex justify-content-flex-end">
										<input
											type="text"
											name="qty"
											maxlength="12"
											value="1"
											title=""
											class="input-text"
										/>
										<div class="qty_inc_dec flex-col">
											<i
												class="fas fa-plus increment link"
												onclick="incrementQty()"
											></i>
											<i
												class="fas fa-minus decrement link"
												onclick="decrementQty()"
											></i>
										</div>
									</div>
								</div>
							</div>
							<div class="item-bottom py-1">
								<span class="link"> <i class="fa fa-close"></i> احذف </span>
							</div>
						</div>
						<div class="cart-item px-2 pt-2 mt-1">
							<div class="item-above d-flex">
								<div class="ml-1">
									<img src="imgs/books/book10.jpg" alt="user" width="40" />
								</div>
								<div class="item-details">
									<span class="h6">فن اللامبالاة (كتاب إلكتروني)</span>
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
								<div class="ms-auto flex-col justify-content-space-between">
									<p class="price"><span class="h4">17.99</span>.ر.س</p>
									<div class="qty-block mb-1 d-flex justify-content-flex-end">
										<input
											type="text"
											name="qty"
											maxlength="12"
											value="1"
											title=""
											class="input-text"
										/>
										<div class="qty_inc_dec flex-col">
											<i
												class="fas fa-plus increment link"
												onclick="incrementQty()"
											></i>
											<i
												class="fas fa-minus decrement link"
												onclick="decrementQty()"
											></i>
										</div>
									</div>
								</div>
							</div>
							<div class="item-bottom py-1">
								<span class="link"> <i class="fa fa-close"></i> احذف </span>
							</div>
						</div>
						<div class="cart-item px-2 pt-2 mt-1">
							<div class="item-above d-flex">
								<div class="ml-1">
									<img src="imgs/books/book9.jpg" alt="user" width="40" />
								</div>
								<div class="item-details">
									<span class="h6">غداً أجمل (كتاب إلكتروني)</span>
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
								<div class="ms-auto flex-col justify-content-space-between">
									<p class="price"><span class="h4">17.99</span>.ر.س</p>
									<div class="qty-block mb-1 d-flex justify-content-flex-end">
										<input
											type="text"
											name="qty"
											maxlength="12"
											value="1"
											title=""
											class="input-text"
										/>
										<div class="qty_inc_dec flex-col">
											<i
												class="fas fa-plus increment link"
												onclick="incrementQty()"
											></i>
											<i
												class="fas fa-minus decrement link"
												onclick="decrementQty()"
											></i>
										</div>
									</div>
								</div>
							</div>
							<div class="item-bottom py-1">
								<span class="link"> <i class="fa fa-close"></i> احذف </span>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 mt-1 mt-md-0">
						<div class="cart-summary flex-col">
							<div class="p-3">
								<div class="d-flex cart-subtotal justify-content-space-between">
									<span class="h6">المجموع</span>
									<span class="h5">
										68.97
										<small>ر.س</small>
									</span>
								</div>
								<div class="d-flex cart-shipping justify-content-space-between">
									<span class="h6">تكاليف الشحن</span>
									<span class="h5" style="color: #25b74c">مجاني</span>
								</div>
								<div class="d-flex cart-total justify-content-space-between">
									<span class="h4" style="color: #f70f06">
										المجموع الكلي
										<small class="include-tax">شامل الضريبة</small>
									</span>
									<span class="h5" style="color: #f70f06">
										68.97
										<small>ر.س</small>
									</span>
								</div>
							</div>
							<div class="p-1">
								<p class="pt-120">
									بالضغط على "إنهاء التسوق" فإنك توافق على
									<a>الشروط والأحكام</a>
									و
									<a>سياسة الخصوصية</a>
								</p>
								<a
									href="pages/stepper.html"
									class="btn danger-btn w-100 mt-2 py-1"
								>
									إنهاء التسوق
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
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
								<img src="imgs/socialMedia/facebook.svg" />
							</a>
							<a href="#" class="social-icon">
								<img src="imgs/socialMedia/twitter.svg" />
							</a>
							<a href="#" class="social-icon">
								<img src="imgs/socialMedia/youtube.svg" />
							</a>
							<a href="#" class="social-icon">
								<img src="imgs/socialMedia/instagram.svg" />
							</a>
							<a href="#" class="social-icon">
								<img src="imgs/socialMedia/linkedin.svg" />
							</a>
							<a href="#" class="social-icon">
								<img src="imgs/socialMedia/snapshat.svg" />
							</a>
							<a href="#" class="social-icon">
								<img src="imgs/socialMedia/music.svg" />
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
						src="imgs/paymentMethods/americanExpress.svg"
						alt=""
						style="background-color: #27ade4"
					/>
					<img src="imgs/paymentMethods/masterCard.svg" alt="" />
					<img src="imgs/paymentMethods/visa.svg" alt="" />
					<img
						src="imgs/paymentMethods/mada.svg"
						alt=""
						style="background-color: #fff; padding-block: 8px"
					/>
					<img
						src="imgs/paymentMethods/qitaf.svg"
						alt=""
						style="background-color: #fff"
					/>
					<img
						src="imgs/paymentMethods/payInShop.svg"
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
	<script
		src="https://kit.fontawesome.com/0258162a56.js"
		crossorigin="anonymous"
	></script>
</html>
