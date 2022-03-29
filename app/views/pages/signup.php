
<div class="signup-form py-1">
	<div class="row justify-content-center">
		<div class="col-xs-12 col-sm-12 col-md-5">
			<h2 class="h3 my-2 text-align-center">إنشاء حساب</h2>
			<form action="" class="flex-col">
				<div class="form-control mt-1">
					<label for="mobileNo"></label>
					<input
						id="mobileNo"
						type="number"
						name="mobileNo"
						placeholder="رقم الجوال"
						class="me-auto"
					/>
					<label for="countryCode"></label>
					<input
						id="countryCode"
						type="text"
						name="countryCode"
						placeholder="رمز البلد"
						class="f-grow-1 mr-1"
					/>
				</div>
				<p class="mt-1">
					سوف نرسل لك
					<b>رمز التحقق عن طريق رسالة نصية</b>
				</p>
				<div class="form-control mt-1">
					<label for="confirmCode"></label>
					<input
						id="confirmCode"
						type="text"
						name="confirmCode"
						placeholder="ادخل رمز التحقق"
					/>
				</div>
				<div class="form-control mt-1">
					<label for="firstName"></label>
					<input
						id="firstName"
						type="text"
						name="firstName"
						placeholder="ادخل الاسم الأول"
					/>
				</div>
				<div class="form-control mt-1">
					<label for="lastName"></label>
					<input
						id="lastName"
						type="text"
						name="lastName"
						placeholder="ادخل اللقب"
					/>
				</div>
				<div class="form-control mt-1">
					<label for="email1"></label>
					<input
						id="email1"
						type="email"
						name="email1"
						placeholder="البريد الالكتروني"
					/>
				</div>
				<div class="form-control mt-1">
					<label for="email2"></label>
					<input
						id="email2"
						type="email"
						name="email2"
						placeholder="تأكيد البريد الالكتروني"
					/>
				</div>
				<div class="form-control mt-1">
					<label for="password"></label>
					<input
						id="password"
						type="password"
						name="password"
						placeholder="كلمةالسر"
					/>
				</div>
				<div class="form-control mt-1">
					<input id="cbx-privacy" type="checkbox" checked />
					<label for="cbx-privacy"></label>
					<span class="pr-1">
						أوافق على
						<a
							href="https://www.jarir.com/terms_and_conditions"
							target="_blank"
						>
							<b>على الشروط والأحكام</b>
						</a>
					</span>
				</div>
				<div class="form-control mt-1">
					<input id="cbx-subscribe" type="checkbox" checked />
					<label class="cbx" for="cbx-subscribe"></label>
					<span class="pr-1"> أوافق للانضمام للنشرة البريدية</span>
				</div>
				<div class="form-control mt-1">
					<input
						type="submit"
						class="w-100 text-align-center"
						value="إنشاء حساب"
					/>
				</div>
			</form>
			<p class="text-align-center my-2">
				لديك حساب؟
				<span id="needLogin2" onclick="login()" class="link"
					>تسجيل الدخول</span
				>
			</p>
		</div>
	</div>
</div>


