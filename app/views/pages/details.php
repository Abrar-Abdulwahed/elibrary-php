<!DOCTYPE html>
<html dir="rtl" lang="ar">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Details | التفاصيل</title>
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
		<section class="details-section mb-2">
			<div class="container">
				<ul class="breadcrumb d-flex">
					<li><a href="index.html">الرئيسية</a></li>
					<li><a href="#">الكتب العربية</a></li>
					<li><a href="#">كتب إلكترونية</a></li>
					<li>لأنك الله (كتاب إلكتروني)</li>
				</ul>
				<div class="row g-20 justify-content-center align-items-flex-start">
					<div class="col-xs-12 col-sm-5 col-md-3 item-images">
						<img
							src="imgs/books/book1.jpg"
							alt="item"
							onclick="openModal('slideShowModal')"
						/>
						<ul class="other-images d-flex justify-content-center g-10 my-1">
							<li>
								<img src="imgs/books/book3.jpg" alt="item-part" width="20" />
							</li>
							<li>
								<img src="imgs/books/book5.jpg" alt="item-part" width="20" />
							</li>
							<li>
								<img src="imgs/books/book6.jpg" alt="item-part" width="20" />
							</li>
						</ul>
						<div id="slideShowModal" class="modal">
							<div
								id="slideShowModal-content"
								class="modal-content col-xs-9 col-sm-8 col-md-6 col-lg-4"
							>
								<span class="close-btn" onclick="closeModal('slideShowModal')"
									>&times;</span
								>
								<div class="gallery">
									<div class="gallery-container slider">
										<img
											class="gallery-item slider-item"
											src="imgs/books/book3.jpg"
											data-index="3"
										/>
										<img
											class="gallery-item slider-item"
											src="imgs/books/book5.jpg"
											data-index="5"
										/>
										<img
											class="gallery-item slider-item"
											src="imgs/books/book6.jpg"
											data-index="6"
										/>
									</div>
									<a id="arrow-left" onclick="plusSlides(1)">❯</a>
									<a id="arrow-right" onclick="plusSlides(-1)">❮</a>
								</div>
								<ul class="dots d-flex justify-content-center g-10 my-1">
									<li class="indicator" onclick="currentSlide(2)">
										<img
											src="imgs/books/book3.jpg"
											alt="item-part"
											width="20"
										/>
									</li>
									<li class="indicator" onclick="currentSlide(4)">
										<img
											src="imgs/books/book5.jpg"
											alt="item-part"
											width="20"
										/>
									</li>
									<li class="indicator" onclick="currentSlide(5)">
										<img
											src="imgs/books/book6.jpg"
											alt="item-part"
											width="20"
										/>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 item-details">
						<span class="h3">لأنك الله (كتاب إلكتروني)</span>
						<details>
							<div class="price text-align-center w-fit-content">
								<p class="h2">17.99<span>.ر.س</span></p>
								<span class="include-tax">شامل الضريبة</span>
							</div>
							<div class="other-details light" style="text-align: left">
								<span dir="ltr">Each:وحدة البيع</span>
								<br /><span class="number-reviews">
									<ul class="inline-flex justify-content-flex-end">
										<li>
											<img src="imgs/reviews.svg" alt="icon" width="20" />
										</li>
										<li>
											<img src="imgs/reviews.svg" alt="icon" width="20" />
										</li>
										<li>
											<img src="imgs/reviews.svg" alt="icon" width="20" />
										</li>
										<li>
											<img src="imgs/reviews.svg" alt="icon" width="20" />
										</li>
										<li>
											<img src="imgs/reviews.svg" alt="icon" width="20" />
										</li>
									</ul>
									(15 المراجعات)
								</span>
								<p dir="rtl">رقم الصنف <b>JBB410156</b> رقم المنتج <b>4</b></p>
							</div>
						</details>
						<div class="available-format mt-2">
							<span>الصيغ المتوفرة: </span>
							<ul class="flex-col g-10">
								<li
									class="d-flex justify-content-space-between align-items-center"
								>
									<div>
										<input type="radio" name="format" id="e-format" />
										<label for="e-format">كتاب مطبوع</label>
									</div>
									<div class="price text-align-center w-fit-content">
										<p class="h4">17.99<span>.ر.س</span></p>
										<span class="include-tax">شامل الضريبة</span>
									</div>
								</li>
								<li
									class="d-flex justify-content-space-between align-items-center"
								>
									<div class="">
										<input type="radio" name="format" id="p-format" />
										<label for="p-format">كتاب مطبوع</label>
									</div>
									<div class="price text-align-center w-fit-content">
										<p class="h4">17.99<span>.ر.س</span></p>
										<span class="include-tax">شامل الضريبة</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 item-options">
						<div class="part-one">
							<div class="my-2">
								<blockquote class="blockquote my-1">
									<p>
										<b>ملاحظة:</b>
										سيتم إضافة هذا الكتاب الإلكتروني إلى مكتبتك في قارئ جرير
									</p>
									<span>
										<a href="#">اقرأ المزيد</a>
									</span>
								</blockquote>
							</div>
							<div class="d-flex g-10 my-2">
								<select name="product_qty" id="product-qty" class="round-5">
									<option value="1">1</option>
								</select>
								<button class="btn danger-btn f-auto round-5 js-cart">
									<img src="imgs/addProduct.svg" /> أضف إلى السلة
								</button>
							</div>
							<ul class="d-flex option-tool">
								<li>
									<img src="imgs/opacity-lock.svg" />تسوق آمن<img
										src="imgs/question.svg"
										alt="que icon"
									/>
								</li>
								<li>
									<img src="imgs/opacity-garrantee.svg" alt="" />أصلي ومضمون<img
										src="imgs/question.svg"
										alt="que icon"
									/>
								</li>
								<li>
									<img src="imgs/opacity-tranform.svg" alt="" />شحن سريع
									ومجاني<img src="imgs/question.svg" alt="que icon" />
								</li>
							</ul>
							<ul
								class="option-buttons d-flex g-20 justify-content-space-between mt-2 py-1"
							>
								<li><img src="imgs/share.svg" alt="share icon" />مشاركة</li>
								<li><img src="imgs/love.svg" alt="love icon" />المفضلة</li>
								<li>
									<img src="imgs/compare.svg" alt="compare icon" /> مقارنة
								</li>
							</ul>
						</div>
						<div class="part-two">
							<ul
								class="option-buttons d-flex g-20 justify-content-space-between mt-2 py-1"
							>
								<li><img src="imgs/share.svg" alt="share icon" />مشاركة</li>
								<li><img src="imgs/love.svg" alt="love icon" />المفضلة</li>
								<li>
									<img src="imgs/compare.svg" alt="compare icon" /> مقارنة
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row my-2 py-2 px-2 brief">
				<p>
					كتاب يتحدث عن أسماء الله الحسنى وكيف نعيشها في حياتنا حرص المؤلف أن
					يكون الكتاب مناسبا لمن هم متوسطي الثقافة ويكون مناسبا للمحتاج والمريض
					والسليم
				</p>
			</div>
			<div class="container spec py-2">
				<div class="h4 title d-block p-1">المواصفات</div>
				<div class="table">
					<div class="tr">
						<div class="td">رقم الصنف</div>
						<div class="td">JBB410156</div>
					</div>
					<div class="tr">
						<div class="td">رقم المنتج</div>
						<div class="td">4</div>
					</div>
					<div class="tr">
						<div class="td">المؤلف</div>
						<div class="td">علي جابر الفيفي</div>
					</div>
					<div class="tr">
						<div class="td">الناشر</div>
						<div class="td">دار الحضارة للنشر والتوزيع</div>
					</div>
					<div class="tr">
						<div class="td">تاريخ النشر</div>
						<div class="td">2016</div>
					</div>
					<div class="tr">
						<div class="td">صيغة الكتاب</div>
						<div class="td">Ebook</div>
					</div>
					<div class="tr">
						<div class="td">عدد الصفحات</div>
						<div class="td">182</div>
					</div>
					<div class="tr">
						<div class="td">وزن الشحن(كجم)</div>
						<div class="td">0.0100</div>
					</div>
					<div class="tr">
						<div class="td">صيغة الملف</div>
						<div class="td">ePub</div>
					</div>
					<div class="tr">
						<div class="td">اللغة</div>
						<div class="td">عربي</div>
					</div>
				</div>
			</div>
			<div class="container item-reviews py-2">
				<div class="d-flex mb-2 align-items-center">
					<span class="h4 d-block p-1">مراجعات العملاء</span>
					<button class="round-5">
						<img src="imgs/plus.svg" alt="plus" /> اكتب مراجعتك
					</button>
				</div>
				<div class="row">
					<div class="my-1 f-100">
						<div class="review p-1">
							<div class="book-name"><b>Good</b></div>
							<div class="author-name d-flex justify-content-space-between">
								<div>من قبل reem</div>
								<div>20/02/2020</div>
							</div>
						</div>
						<div class="review-reply p-1">good</div>
					</div>
					<div class="my-1 f-100">
						<div class="review p-1">
							<div class="book-name"><b>كتاب رائع</b></div>
							<div class="author-name d-flex justify-content-space-between">
								<div>من قبل خالد أبو جميلة</div>
								<div>20/02/2020</div>
							</div>
						</div>
						<div class="review-reply p-1">جميل جدا</div>
					</div>
					<div class="my-1 f-100">
						<div class="review p-1">
							<div class="book-name"><b>لأنك الله</b></div>
							<div class="author-name d-flex justify-content-space-between">
								<div>من قبل باسل</div>
								<div>20/02/2020</div>
							</div>
						</div>
						<div class="review-reply p-1">جميل جدا ومفيد</div>
					</div>
				</div>
			</div>
			<div class="container item-semilars py-2">
				<div class="h4 title d-block p-1">منتجات مشابهة</div>
				<div class="row g-20">
					<div class="item-semilar p-1">
						<div>
							<a href="pages/details.html" class="link">
								<img src="imgs/books/book9.jpg" alt="" width="100%" />
							</a>
							<h5>
								<img src="imgs/redBook.svg" alt="" />
								الصلاة وحكم تاركها
							</h5>
						</div>
						<p class="price mt-3 mb-1 text-align-center">
							<span class="h3">17.99</span>.ر.س
							<br />
							<span class="include-tax">شامل الضريبة</span>
						</p>
					</div>
					<div class="item-semilar">
						<div>
							<a href="pages/details.html" class="link">
								<img src="imgs/books/book3.jpg" alt="" width="100%" />
							</a>
							<h5>
								<img src="imgs/redBook.svg" alt="" />
								الصلاة وحكم تاركها
							</h5>
						</div>
						<p class="price mt-3 mb-1 text-align-center">
							<span class="h3">17.99</span>.ر.س
							<br />
							<span class="include-tax">شامل الضريبة</span>
						</p>
					</div>
					<div class="item-semilar">
						<div>
							<a href="pages/details.html" class="link">
								<img src="imgs/books/book2.jpg" alt="" width="100%" />
							</a>
							<h5>
								<img src="imgs/redBook.svg" alt="" />
								الصلاة وحكم تاركها
							</h5>
						</div>
						<p class="price mt-3 mb-1 text-align-center">
							<span class="h3">17.99</span>.ر.س
							<br />
							<span class="include-tax">شامل الضريبة</span>
						</p>
					</div>
					<div class="item-semilar">
						<div>
							<a href="pages/details.html" class="link">
								<img src="imgs/books/book10.jpg" alt="" width="100%" />
							</a>
							<h5>
								<img src="imgs/redBook.svg" alt="" />
								الصلاة وحكم تاركها
							</h5>
						</div>
						<p class="price mt-3 mb-1 text-align-center">
							<span class="h3">17.99</span>.ر.س
							<br />
							<span class="include-tax">شامل الضريبة</span>
						</p>
					</div>
					<div class="item-semilar">
						<div>
							<a href="pages/details.html" class="link">
								<img src="imgs/books/book6.jpg" alt="" width="100%" />
							</a>
							<h5>
								<img src="imgs/redBook.svg" alt="" />
								الصلاة وحكم تاركها
							</h5>
						</div>
						<p class="price mt-3 mb-1 text-align-center">
							<span class="h3">17.99</span>.ر.س
							<br />
							<span class="include-tax">شامل الضريبة</span>
						</p>
					</div>
					<div class="item-semilar">
						<div>
							<a href="pages/details.html" class="link">
								<img src="imgs/books/book4.jpg" alt="" width="100%" />
							</a>
							<h5>
								<img src="imgs/redBook.svg" alt="" />
								الصلاة وحكم تاركها
							</h5>
						</div>
						<p class="price mt-3 mb-1 text-align-center">
							<span class="h3">17.99</span>.ر.س
							<br />
							<span class="include-tax">شامل الضريبة</span>
						</p>
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
	</body>
	<!-- <script src="https://kit.fontawesome.com/0258162a56.js" crossorigin="anonymous"></script> -->
</html>
