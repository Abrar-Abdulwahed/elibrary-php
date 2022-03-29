
<?php
    include_once __DIR__.'/../includes/head.php';
    include_once __DIR__.'/../includes/nav.php';
?>
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
<?php
    include_once __DIR__.'/../includes/footer.php';
    include_once __DIR__.'/../includes/tail.php';
?>
