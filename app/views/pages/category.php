
<?php
    include_once __DIR__.'/../includes/head.php';
    include_once __DIR__.'/../includes/nav.php';
?>
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
<?php
    include_once __DIR__.'/../includes/footer.php';
    include_once __DIR__.'/../includes/tail.php';
?>

