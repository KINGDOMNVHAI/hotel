<!doctype html>
<html lang="en">
<head>
    <title>{{ $title }}</title>

    @include('feHotel.block.meta')
</head>

<body>
    <div class="loader loader3">
        <div class="loader-inner">
            <div class="spin">
                <span></span>
                <img src="{{asset('feHotel/img/SUNLINE.png')}}" alt="SUNLINE">
                <P>SUNLINE</P>
            </div>
        </div>
    </div>
    
    <nav id="mobile-menu"></nav>
    <div class="wrapper">

        @include('feHotel.block.navbar')


        @yield('NoiDung')

        <footer>
            <div class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <!-- <img src="{{asset('feHotel/img/SUNLINE.png')}}" alt="SUNLINE", $width ="20px", $height="20px" > -->
                                <div class="inner">
                                    <p>Chào mừng bạn đến với Sunline</p>
                                    <a href="https://www.tripadvisor.com/" target="_blank">
                                        <div class="tripadvisor-banner">
                                            <span class="review">Recommended</span>
                                            <img src="{{asset('feHotel/images/icons/tripadvisor.png')}}" alt="Image" $width ="200px", $height="200px">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-widget">
                                <div class="inner">
                                    <ul class="latest-posts">
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNhaTroSunLine&tabs=timeline&width=300&height=50&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="290" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>Những link hữu ích</h3>
                                <div class="inner">
                                    <ul class="useful-links">
                                        <li>
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="gallery.html">Đăng ký phòng</a>
                                        </li>
                                        <li>
                                            <a href="location.html">Danh sách dịch vụ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>Thông tin liên hệ</h3>
                                <div class="inner">
                                    <ul class="contact-details">
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            39 Khu phố 1A phường Đông Hưng Thuận, quận 12, Thành phố Hồ Chí Minh
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            Phone 1: 0939703309
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            Phone 2: 0903658538
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            Phone 3: 0906850669
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            Email:
                                            <a href="https://preview.eagle-themes.com/cdn-cgi/l/email-protection#1a73747c755a69736e7f34797577">
                                                <span>sarangthunguyen@gmail.com</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="section-title aligncenter">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                        <p class="section-subtitle">
                            <a href="https://www.instagram.com/pagesunline/" target="_blank">Thông tin về chúng tôi trong Instagram SUNLINE</a>
                        </p>
                    </div>
                    <div class="section-title aligncenter">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                        <p class="section-subtitle">
                            <a href="https://www.facebook.com/NhaTroSunLine" target="_blank">Thông tin về chúng tôi trong Facebook SUNLINE</a>
                        </p>
                    </div> -->
                </div>
            </div>

            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyrights">&copy; 2021 Phòng trọ Sunline. Thiết kế bởi
                                <a href="{{route('home')}}" target="_blank">Nguyễn Thư</a>.
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-media">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div id="contact-notification" class="notification fixed"></div>

    <div class="back-to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    @include('feHotel.block.footer')
</body>
</html>
