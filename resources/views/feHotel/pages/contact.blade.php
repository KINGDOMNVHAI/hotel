@extends('feHotel.master')

@section('NoiDung')

<div class="page-title gradient-overlay op6" style="background: url({{asset('feHotel/images/breadcrumb.jpg')}}); background-repeat: no-repeat;
    background-size: cover;">
    <div class="container">
        <div class="inner">
            <h1>CONTACT</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Contact</li>
            </ol>
        </div>
    </div>
</div>

<main class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="section-title">
                    <h4>LIÊN HỆ VỚI CHÚNG TÔI</h4>
                    <p class="section-subtitle">Let’s Talk</p>
                </div>
                <p>Khi bạn có những thắc mắc hay những câu hỏi cần giải đáp, xin hãy vui lòng điền thông tin trong form bên dưới và gửi về chúng tôi.</p>

                <form id="contact-form" class="contact-form">
                    <div class="form-group">
                        <input class="form-control" name="name" placeholder="Họ và tên của khách hàng" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" placeholder="Email" type="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="phone" placeholder="Số điện thoại" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="subject" placeholder="Chủ đề" type="text">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Lời nhắn"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn mt30">GỬI TIN</button>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="sidebar">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4908198709045!2d106.63731821474958!3d10.850224092271485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175298e37ccef75%3A0xcb7c6ca04fd247f4!2zMzkgxJDDtG5nIEjGsG5nIFRodeG6rW4gMjEgVOG7lSA4IEtQMSwgxJDDtG5nIEjGsG5nIFRodeG6rW4sIFF14bqtbiAxMiwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1621526239082!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    <div class="contact-details mt75">
                        <div class="contact-info">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-map-marker"></i>39 Đông Hưng Thuận 21 Tổ 8 KP1, Đông Hưng Thuận, Quận 12, Thành phố Hồ Chí Minh</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope"></i>sarangthunguyen@gmail.com</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-phone"></i>Số điện thoại 01: 0939703309</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-phone"></i>Số điện thoại 02: 0903658538</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-phone"></i>Số điện thoại 03: 0906850669</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-globe"></i>www.phongtrosunline.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-media mt50">
                            <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="https://www.facebook.com/NhaTroSunLine">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="https://www.youtube.com/watch?v=vMpA6cRjlN0">
                                <i class="fa fa-youtube"></i>
                            </a>
                            <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="https://www.instagram.com/pagesunline/">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
