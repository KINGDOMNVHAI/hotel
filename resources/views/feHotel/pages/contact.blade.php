@extends('feHotel.master')

@section('NoiDung')

<div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
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
                    <h4>CONTACT US</h4>
                    <p class="section-subtitle">Let’s Talk</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus sit, fugiat at in assumenda corrupti autem iste eveniet eaque vitae beatae tenetur, voluptatem eius. Numquam.</p>

                <form id="contact-form" class="contact-form">
                    <div class="form-group">
                        <input class="form-control" name="name" placeholder="Name" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" placeholder="Email" type="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="phone" placeholder="Phone" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="subject" placeholder="Subject" type="text">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn mt30">SEND YOUR MESSAGE</button>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="sidebar">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15677.98123887057!2d106.700961!3d10.773325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16ce95918cb14834!2sSaigon%20Centre!5e0!3m2!1sen!2s!4v1620463360340!5m2!1sen!2s" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    <div class="contact-details mt75">
                        <div class="contact-info">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-map-marker"></i>Lorem ipsum dolor, 25, Himara</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope"></i><span class="__cf_email__" data-cfemail="61020e0f1500021521090e15040d09080c0013004f020e0c">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-phone"></i>+1 888 123 4567</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fax"></i>+1 888 123 4567</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-globe"></i>www.hotelhimara.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-media mt50">
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
                            <a class="tripadvisor" data-original-title="Tripadvisor" data-toggle="tooltip" href="#">
                                <i class="fa fa-tripadvisor"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
