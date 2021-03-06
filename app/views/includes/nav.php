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
                        <a href="#">
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
                            <a href="#">
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
                    <a class="cart-btn" href="/cart">
                        <img src="assets/imgs/cart.svg">
                        <!-- <span class="cart-quantity" id="cart-quantity">0</span> -->
                    </a>
                </div>  
            </div>  
        </div>