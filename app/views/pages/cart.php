<?php
    include_once __DIR__.'/../includes/head.php';
    include_once __DIR__.'/../includes/nav.php';
?>
<section class="cart-section my-2">
	<div class="container">
		<div class="h4 title mb-2">
			<img src="assets/imgs/cart.svg" />
			السلة
			<span class="subtitle">(3 منتجات)</span>
		</div>
		<div class="row justify-content-space-between">
			<div class="col-xs-12 col-sm-12 col-md-7">
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
							<img src="assets/imgs/books/book10.jpg" alt="user" width="40" />
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
							<img src="assets/imgs/books/book9.jpg" alt="user" width="40" />
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
							href="pages/stepper"
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
<?php
    include_once __DIR__.'/../includes/footer.php';
    include_once __DIR__.'/../includes/tail.php';
?>

