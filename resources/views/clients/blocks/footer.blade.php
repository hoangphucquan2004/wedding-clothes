<div class="kenne-footer_area bg-smoke_color">
    <div class="footer-top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="newsletter-area">
                        <div class="newsletter-logo">
                            <a href="javascript:void(0)">
                                <img src="{{ asset('assets/client/images/footer/logo/1.png') }}"
                                    alt="Logo">
                            </a>
                        </div>
                        <p class="short-desc">Hãy đánh giá trải nghiệm của bạn với cửa hàng !</p>
                        <div class="newsletter-form_wrap">
                            <form action="?url=danhgia" method="post"
                                class="newsletters-form validate" target="_blank" novalidate>
                                <input type="radio" class="star" id="star-1"
                                    name="rating" value="1">
                                <label for="star-1" class="star-label"></label>
                                <input type="radio" class="star" id="star-2"
                                    name="rating" value="2">
                                <label for="star-2" class="star-label"></label>
                                <input type="radio" class="star" id="star-3"
                                    name="rating" value="3">
                                <label for="star-3" class="star-label"></label>
                                <input type="radio" class="star" id="star-4"
                                    name="rating" value="4">
                                <label for="star-4" class="star-label"></label>
                                <input type="radio" class="star" id="star-5"
                                    name="rating" value="5">
                                <label for="star-5" class="star-label"></label>
                                <span id="status"></span>
                                <div id="mc_embed_signup_scroll">
                                    <div id="mc-form" class="mc-form subscribe-form">
                                        <input name="content" id="mc-email"
                                            class="newsletter-input" type="email"
                                            autocomplete="off"
                                            placeholder="Bản cảm thấy thế nào ?" />
                                        <button class="newsletter-btn" id="mc-submit"><i
                                                class="ion-android-mail"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- <script>
                            let stars = document.getElementsByClassName("star");
                            let starsLabel = document.getElementsByClassName("star-label");
                            let starImgUp = "assets/images/star2.png')}}";
                            let starImgDown = "assets/images/star1.png')}}";
                            let status = {
                                "1s": {
                                    label: "Tệ",
                                    color: "red"
                                },
                                "2s": {
                                    label: "Kém",
                                    color: "orangered"
                                },
                                "3s": {
                                    label: "Bình thường",
                                    color: "yellow"
                                },
                                "4s": {
                                    label: "Bình thường",
                                    color: "blue"
                                },
                                "5s": {
                                    label: "Tốt",
                                    color: "green"
                                }
                            };

                            for (let i = 0; i < stars.length; i++) {
                                stars[i].addEventListener("click", () => {
                                    if (stars[i].checked) {
                                        for (let j = 0; j <= i; j++) {
                                            starsLabel[j].style.backgroundImage = "url(" + starImgUp + ")";
                                            for (let z = 4; z > i; z--) {
                                                starsLabel[z].style.backgroundImage = "url(" + starImgDown + ")";
                                            }
                                        }
                                    }
                                });
                            }
                        </script> -->
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="row footer-widgets_wrap">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widgets_title">
                                <h4>Mua sắm </h4>
                            </div>
                            <div class="footer-widgets">
                                <ul>
                                    <li><a href="javascript:void(0)">Sản phẩm</a></li>
                                    <li><a href="javascript:void(0)">Giỏ hàng của tôi</a></li>
                                    <li><a href="javascript:void(0)">Danh sách yêu thích</a></li>
                                    <li><a href="javascript:void(0)">Giỏ hàng</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widgets_title">
                                <h4>Tài khoản</h4>
                            </div>
                            <div class="footer-widgets">
                                <ul>
                                    <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                    <li><form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button href="{{ route('logout') }}">Đăng xuất</button>
                                    </form></li>
                                    <li><a href="{{ route('register') }}">Đăng ký</a></li>
                                    <li><a href="javascript:void(0)">Trợ giúp</a></li>
                                    <li><a href="javascript:void(0)">Ủng hộ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widgets_title">
                                <h4>Thể loại </h4>
                            </div>
                            <div class="footer-widgets">
                                <ul>
                                    <li><a href="javascript:void(0)">Đàn ông </a></li>
                                    <li><a href="javascript:void(0)">Phụ nữ </a></li>
                                    <li><a href="javascript:void(0)">Quần Jeans</a></li>
                                    <li><a href="javascript:void(0)">Quần Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copyright">
                        <span>Copyright &copy; 2023 <a href="javascript:void(0)">Kenne.</a> All rights
                            reserved.</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment">
                        <img src="{{ asset('assets/client/images/footer/payment/1.png') }}"
                            alt="Kenne's Payment Method">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
