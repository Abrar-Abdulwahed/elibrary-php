<?php
    include_once __DIR__.'/../includes/head.php';
    include_once __DIR__.'/../includes/nav.php';
?>
<section class="details-section mb-2">
	<div class="container">
		<ul class="breadcrumb d-flex">
			<li><a href="/home">الرئيسية</a></li>
			<li><a href="#">الكتب العربية</a></li>
			<li><a href="#">كتب إلكترونية</a></li>
			<li>لأنك الله (كتاب إلكتروني)</li>
		</ul>
		<div class="row g-20 justify-content-center align-items-flex-start">
			<div class="col-xs-12 col-sm-5 col-md-3 item-images">
				<img
					src="assets/imgs/books/book1.jpg"
					alt="item"
					onclick="openModal('slideShowModal')"
				/>
				<ul class="other-images d-flex justify-content-center g-10 my-1">
					<li>
						<img src="assets/imgs/books/book3.jpg" alt="item-part" width="20" />
					</li>
					<li>
						<img src="assets/imgs/books/book5.jpg" alt="item-part" width="20" />
					</li>
					<li>
						<img src="assets/imgs/books/book6.jpg" alt="item-part" width="20" />
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
									src="assets/imgs/books/book3.jpg"
									data-index="3"
								/>
								<img
									class="gallery-item slider-item"
									src="assets/imgs/books/book5.jpg"
									data-index="5"
								/>
								<img
									class="gallery-item slider-item"
									src="assets/imgs/books/book6.jpg"
									data-index="6"
								/>
							</div>
							<a id="arrow-left" onclick="plusSlides(1)">❯</a>
							<a id="arrow-right" onclick="plusSlides(-1)">❮</a>
						</div>
						<ul class="dots d-flex justify-content-center g-10 my-1">
							<li class="indicator" onclick="currentSlide(2)">
								<img
									src="assets/imgs/books/book3.jpg"
									alt="item-part"
									width="20"
								/>
							</li>
							<li class="indicator" onclick="currentSlide(4)">
								<img
									src="assets/imgs/books/book5.jpg"
									alt="item-part"
									width="20"
								/>
							</li>
							<li class="indicator" onclick="currentSlide(5)">
								<img
									src="assets/imgs/books/book6.jpg"
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
									<img src="assets/imgs/reviews.svg" alt="icon" width="20" />
								</li>
								<li>
									<img src="assets/imgs/reviews.svg" alt="icon" width="20" />
								</li>
								<li>
									<img src="assets/imgs/reviews.svg" alt="icon" width="20" />
								</li>
								<li>
									<img src="assets/imgs/reviews.svg" alt="icon" width="20" />
								</li>
								<li>
									<img src="assets/imgs/reviews.svg" alt="icon" width="20" />
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
							<img src="assets/imgs/addProduct.svg" /> أضف إلى السلة
						</button>
					</div>
					<ul class="d-flex option-tool">
						<li>
							<img src="assets/imgs/opacity-lock.svg" />تسوق آمن<img
								src="assets/imgs/question.svg"
								alt="que icon"
							/>
						</li>
						<li>
							<img src="assets/imgs/opacity-garrantee.svg" alt="" />أصلي ومضمون<img
								src="assets/imgs/question.svg"
								alt="que icon"
							/>
						</li>
						<li>
							<img src="assets/imgs/opacity-tranform.svg" alt="" />شحن سريع
							ومجاني<img src="assets/imgs/question.svg" alt="que icon" />
						</li>
					</ul>
					<ul
						class="option-buttons d-flex g-20 justify-content-space-between mt-2 py-1"
					>
						<li><img src="assets/imgs/share.svg" alt="share icon" />مشاركة</li>
						<li><img src="assets/imgs/love.svg" alt="love icon" />المفضلة</li>
						<li>
							<img src="assets/imgs/compare.svg" alt="compare icon" /> مقارنة
						</li>
					</ul>
				</div>
				<div class="part-two">
					<ul
						class="option-buttons d-flex g-20 justify-content-space-between mt-2 py-1"
					>
						<li><img src="assets/imgs/share.svg" alt="share icon" />مشاركة</li>
						<li><img src="assets/imgs/love.svg" alt="love icon" />المفضلة</li>
						<li>
							<img src="assets/imgs/compare.svg" alt="compare icon" /> مقارنة
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
				<img src="assets/imgs/plus.svg" alt="plus" /> اكتب مراجعتك
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
					<a href="pages/details" class="link">
						<img src="assets/imgs/books/book9.jpg" alt="" width="100%" />
					</a>
					<h5>
						<img src="assets/imgs/redBook.svg" alt="" />
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
					<a href="pages/details" class="link">
						<img src="assets/imgs/books/book3.jpg" alt="" width="100%" />
					</a>
					<h5>
						<img src="assets/imgs/redBook.svg" alt="" />
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
					<a href="pages/details" class="link">
						<img src="assets/imgs/books/book2.jpg" alt="" width="100%" />
					</a>
					<h5>
						<img src="assets/imgs/redBook.svg" alt="" />
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
					<a href="pages/details" class="link">
						<img src="assets/imgs/books/book10.jpg" alt="" width="100%" />
					</a>
					<h5>
						<img src="assets/imgs/redBook.svg" alt="" />
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
					<a href="pages/details" class="link">
						<img src="assets/imgs/books/book6.jpg" alt="" width="100%" />
					</a>
					<h5>
						<img src="assets/imgs/redBook.svg" alt="" />
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
					<a href="pages/details" class="link">
						<img src="assets/imgs/books/book4.jpg" alt="" width="100%" />
					</a>
					<h5>
						<img src="assets/imgs/redBook.svg" alt="" />
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
<?php
    include_once __DIR__.'/../includes/footer.php';
    include_once __DIR__.'/../includes/tail.php';
?>
