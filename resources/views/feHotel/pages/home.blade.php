@extends('feHotel.master')

@section('NoiDung')
<div class="slider">
    <section class="video np parallax gradient-overlay op6" data-src="{{asset('feHotel/images/video.jpg')}}" data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
        <div class="inner gradient-overlay">
            <div class="container1" >
                <iframe  width="850" height="415" src="https://www.youtube.com/embed/vMpA6cRjlN0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
        
    <div class="horizontal-booking-form">
        <div class="container">
            <div class="inner box-shadow-007" style="margin:auto">
                <!-- <div id="booking-notification" class="notification"></div> -->
                    <!-- <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Tên khách hàng
                                    <a href="#" title="Tên của bạn" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Hãy điền tên của bạn vào ô trống. Điền đầy đủ họ và tên của bạn">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input class="form-control" name="booking-name" type="text" data-trigger="hover" placeholder="Tên của bạn">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Email
                                    <a href="#" title="Email của bạn" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Hãy điền email của bạn vào ô trống. Email của bạn bao gồm kí tự chữ, dấu chấm, số và địa chỉ email ( @gmail.com; @yahoo.com ). Nhưng không bao gồm kí tự đặc biệt ">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input class="form-control" name="booking-email" type="email" placeholder="Email của bạn">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Kiểu phòng
                                    <a href="#" title="Kiểu phòng" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Chọn kiểu phòng mà bạn muốn đăng ký. Gía của mỗi kiểu phòng khác nhau">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <select class="form-control" name="booking-roomtype" title="Chọn kiểu phòng" data-header="Kiểu phòng">
                                    <option value="Single">Phòng có gác</option>
                                    <option value="Double">Phòng không có gác</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Ngày đến và ngày đi
                                    <a href="#" title="Ngày đến - ngày đi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Bạn hãy chọn ngày đến - ngày đi khi bạn đăng kí phòng">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input type="text" class="datepicker form-control" name="booking-date" placeholder="Đến & Đi" readonly="readonly">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Số lượng người
                                    <a href="#" title="Số lượng khách hàng" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Chọn số lượng khác hàng bao gồm người lớn và trẻ em">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <div class="panel-dropdown">
                                    <div class="form-control guestspicker">Số lượng khách hàng
                                        <span class="gueststotal"></span>
                                    </div>
                                    <div class="panel-dropdown-content">
                                        <div class="guests-buttons">
                                            <label>Người lớn
                                                <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Từ 18 tuổi trở lên" data-original-title="Người lớn">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                            </label>
                                            <div class="guests-button">
                                                <div class="minus"></div>
                                                <input type="text" name="booking-adults" class="booking-guests" value="0">
                                                <div class="plus"></div>
                                            </div>
                                        </div>
                                        <div class="guests-buttons">
                                            <label>Trẻ em
                                                <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Dưới 18 tuổi" data-original-title="Trẻ em">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                            </label>
                                            <div class="guests-button">
                                                <div class="minus"></div>
                                                <input type="text" name="booking-children" class="booking-guests" value="0">
                                                <div class="plus"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <button type="submit" class="btn btn-book">Đặt phòng</button>
                            <div class="advanced-form-link">
                                <a href="booking-form.html">Biểu mẫu đặt phòng</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <form>
                        <input type="text" name="keyword" placeholder="Tìm kiếm..."  aria-label="Search" aria-describedby="basic-addon2">
                        <input type="submit" class="btn btn-primary" value="search">
                    </from> -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                    action="{{route('search-room-fe')}}" method="GET">
                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyLjAwMSA1MTIuMDAxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMDAxIDUxMi4wMDE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNTAzLjgzOSwzOTUuMzc5bC0xOTUuNy0zMzguOTYyQzI5Ny4yNTcsMzcuNTY5LDI3Ny43NjYsMjYuMzE1LDI1NiwyNi4zMTVjLTIxLjc2NSwwLTQxLjI1NywxMS4yNTQtNTIuMTM5LDMwLjEwMg0KCQkJTDguMTYyLDM5NS4zNzhjLTEwLjg4MywxOC44NS0xMC44ODMsNDEuMzU2LDAsNjAuMjA1YzEwLjg4MywxOC44NDksMzAuMzczLDMwLjEwMiw1Mi4xMzksMzAuMTAyaDM5MS4zOTgNCgkJCWMyMS43NjUsMCw0MS4yNTYtMTEuMjU0LDUyLjE0LTMwLjEwMUM1MTQuNzIyLDQzNi43MzQsNTE0LjcyMiw0MTQuMjI4LDUwMy44MzksMzk1LjM3OXogTTQ3Ny44NjEsNDQwLjU4Ng0KCQkJYy01LjQ2MSw5LjQ1OC0xNS4yNDEsMTUuMTA0LTI2LjE2MiwxNS4xMDRINjAuMzAxYy0xMC45MjIsMC0yMC43MDItNS42NDYtMjYuMTYyLTE1LjEwNGMtNS40Ni05LjQ1OC01LjQ2LTIwLjc1LDAtMzAuMjA4DQoJCQlMMjI5Ljg0LDcxLjQxNmM1LjQ2LTkuNDU4LDE1LjI0LTE1LjEwNCwyNi4xNjEtMTUuMTA0YzEwLjkyLDAsMjAuNzAxLDUuNjQ2LDI2LjE2MSwxNS4xMDRsMTk1LjcsMzM4Ljk2Mg0KCQkJQzQ4My4zMjEsNDE5LjgzNiw0ODMuMzIxLDQzMS4xMjgsNDc3Ljg2MSw0NDAuNTg2eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cmVjdCB4PSIyNDEuMDAxIiB5PSIxNzYuMDEiIHdpZHRoPSIyOS45OTYiIGhlaWdodD0iMTQ5Ljk4MiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjU2LDM1NS45OWMtMTEuMDI3LDAtMTkuOTk4LDguOTcxLTE5Ljk5OCwxOS45OThzOC45NzEsMTkuOTk4LDE5Ljk5OCwxOS45OThjMTEuMDI2LDAsMTkuOTk4LTguOTcxLDE5Ljk5OC0xOS45OTgNCgkJCVMyNjcuMDI3LDM1NS45OSwyNTYsMzU1Ljk5eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" width="20px" height="20px"/>
                        Lưu ý: Bạn có thể nhập một trong hai " Tên phòng " hoặc " Loại phòng "
                    @csrf
                    <div class="input-group">
                    <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Tên phòng..."
                            aria-label="Search" aria-describedby="basic-addon2">
                    <input type="text" name="loaiphong" class="form-control bg-light border-0 small" placeholder="Loại phòng..."
                            aria-label="Search" aria-describedby="basic-addon2">
                            
                        <input type="submit" class="btn btn-primary" value="search">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <section class="about mt100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title">
                    <h4 class="text-uppercase">Hotel Himara. since 1992</h4>
                    <p class="section-subtitle">Dịch vụ phòng trọ chất lượng cao</p>
                </div>
                <div class="info-branding">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem
                        assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi
                        consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda.</p>
                    <div class="providers">
                        <span>Recommended on:</span>

                        <div class="item">
                            <a href="#">
                                <img src="{{asset('feHotel/images/providers/provider-1.png')}}" alt="Image">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#">
                                <img src="{{asset('feHotel/images/providers/provider-2.png')}}" alt="Image">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#">
                                <img src="{{asset('feHotel/images/providers/provider-3.png')}}" alt="Image">
                            </a>
                        </div>

                        <div class="item">
                            <a href="#">
                                <img src="{{asset('feHotel/images/providers/provider-4.png')}}" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="brand-info">
                    <div class="inner">
                        <div class="content">
                            <img src="{{asset('feHotel/images/logo-big-transparent.svg')}}" width="100" alt="Image">
                            <div class="stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <h5 class="title">LUXURY HOTEL</h5>
                            <p class="mt20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="services">
    <div class="container">
        <div class="section-title">
            <h4 class="text-uppercase">Phòng trọ Sunline. since 2000</h4>
            <p class="section-subtitle">Dịch vụ phòng trọ chất lượng cao</p>
        </div>
        <div class="row">
            <div class="col-lg-7 col-12">
                <div data-slider-id="services" class="services-owl owl-carousel">
                    <figure class="gradient-overlay">
                        <img src="{{asset('feHotel/images/rooms/family/family.jpg')}}" class="img-fluid" alt="Image">
                        <figcaption>
                            <h4>Phòng</h4>
                        </figcaption>
                    </figure>
                    <figure class="gradient-overlay">
                        <img src="{{asset('feHotel/images/service/suaongnuoc1.jpeg')}}" class="img-fluid" alt="Image">
                        <figcaption>
                            <h4>Dịch vụ</h4>
                        </figcaption>
                    </figure>
                    <figure class="gradient-overlay">
                        <img src="{{asset('feHotel/images/infor/kinh-nghiem-quan-ly-nha-tro.jpg')}}" class="img-fluid" alt="Image">
                        <figcaption>
                            <h4>Thông tin</h4>
                        </figcaption>
                    </figure>
                    <figure class="gradient-overlay">
                        <img src="{{asset('feHotel/images/infor/discount.jpg')}}" class="img-fluid" alt="Image">
                        <figcaption>
                            <h4>Sự kiện</h4>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-lg-5 col-12">
                <div class="owl-thumbs" data-slider-id="services">
                    <div class="owl-thumb-item">
                        <span class="media-left">
                            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNDgwIDQ4MCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDgwIDQ4MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0zNTkuNTg0LDQ2OS40NzJsLTE2LTQ4Yy0xLjA4OC0zLjI2Ni00LjE0Mi01LjQ2OS03LjU4NC01LjQ3MkgxNDRjLTMuNDQyLDAuMDAzLTYuNDk2LDIuMjA2LTcuNTg0LDUuNDcybC0xNiw0OA0KCQkJYy0xLjM5Niw0LjE5MiwwLjg3LDguNzIyLDUuMDYyLDEwLjExOGMwLjgxMywwLjI3MSwxLjY2NSwwLjQwOSwyLjUyMiwwLjQxaDIyNGM0LjQxOC0wLjAwMyw3Ljk5Ny0zLjU4OCw3Ljk5NC04LjAwNg0KCQkJQzM1OS45OTMsNDcxLjEzNywzNTkuODU1LDQ3MC4yODUsMzU5LjU4NCw0NjkuNDcyeiBNMTM5LjEwNCw0NjRsMTAuNjY0LTMyaDE4MC40NjRsMTAuNjY0LDMySDEzOS4xMDR6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0zMDQsMjU2Yy0xMy4yNTUsMC0yNCwxMC43NDUtMjQsMjRzMTAuNzQ1LDI0LDI0LDI0czI0LTEwLjc0NSwyNC0yNFMzMTcuMjU1LDI1NiwzMDQsMjU2eiBNMzA0LDI4OGMtNC40MTgsMC04LTMuNTgyLTgtOA0KCQkJczMuNTgyLTgsOC04czgsMy41ODIsOCw4UzMwOC40MTgsMjg4LDMwNCwyODh6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNzIsMTYwaC02NGMtNC40MTgsMC04LDMuNTgyLTgsOHYzMmMwLDQuNDE4LDMuNTgyLDgsOCw4aDY0YzQuNDE4LDAsOC0zLjU4Miw4LTh2LTMyQzI4MCwxNjMuNTgyLDI3Ni40MTgsMTYwLDI3MiwxNjB6DQoJCQkgTTI2NCwxOTJoLTQ4di0xNmg0OFYxOTJ6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00NzIsMEg4QzMuNTgyLDAsMCwzLjU4MiwwLDh2Mzg0YzAsNC40MTgsMy41ODIsOCw4LDhoNDY0YzQuNDE4LDAsOC0zLjU4Miw4LThWOEM0ODAsMy41ODIsNDc2LjQxOCwwLDQ3MiwweiBNMTYsMTc2aDI0DQoJCQl2MTZIMTZWMTc2eiBNODAsMzg0SDE2VjIwOGgzMmM0LjQxOCwwLDgtMy41ODIsOC04di0zMmMwLTQuNDE4LTMuNTgyLTgtOC04SDE2di0xNmg2NFYzODR6IE04MCwxMjhIMTZ2LTE2aDY0VjEyOHogTTMyOCwyODB2MTA0DQoJCQlIMTUyVjE0NGgxNzZWMjgweiBNMzI4LDEyOEgxNTJ2LTE2aDE3NlYxMjh6IE00NjQsMTkyaC0yNHYtMTZoMjRWMTkyeiBNNDY0LDE2MGgtMzJjLTQuNDE4LDAtOCwzLjU4Mi04LDh2MzJjMCw0LjQxOCwzLjU4Miw4LDgsOA0KCQkJaDMydjE3NmgtNjRWMTQ0aDY0VjE2MHogTTQ2NCwxMjhoLTY0di0xNmg2NFYxMjh6IE00NjQsOTZoLTcyYy00LjQxOCwwLTgsMy41ODItOCw4djI4MGgtNDBWMTA0YzAtNC40MTgtMy41ODItOC04LThIMTQ0DQoJCQljLTQuNDE4LDAtOCwzLjU4Mi04LDh2MjgwSDk2VjEwNGMwLTQuNDE4LTMuNTgyLTgtOC04SDE2VjE2aDQ0OFY5NnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHJlY3QgeD0iNDgiIHk9IjI3MiIgd2lkdGg9IjE2IiBoZWlnaHQ9IjE2Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNTYsMzJoLTMyYy0yMi4wOCwwLjAyNi0zOS45NzQsMTcuOTItNDAsNDBjMCw0LjQxOCwzLjU4Miw4LDgsOGg5NmM0LjQxOCwwLDgtMy41ODIsOC04DQoJCQlDMjk1Ljk3NCw0OS45MiwyNzguMDgsMzIuMDI2LDI1NiwzMnogTTIwMS4zNjgsNjRjMy40MDMtOS41ODIsMTIuNDY0LTE1Ljk4OCwyMi42MzItMTZoMzJjMTAuMTY4LDAuMDEyLDE5LjIyOSw2LjQxOCwyMi42MzIsMTYNCgkJCUgyMDEuMzY4eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" width="50px" height="50px"/>
                        </span>
                        <div class="media-body">
                            <h5>Phòng</h5>
                            <p>Tại Sunline, chúng tôi có những căn phòng tuyệt vời. Những căn phòng này có đầy đủ tiện nghi, giúp bạn lựa chọn 1 nơi tạm trú mỗi khi đi xa nhà</p>
                        </div>
                    </div>
                    <div class="owl-thumb-item">
                        <span class="media-left">
                            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgNjQgNjQiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48ZyBpZD0iQ29uc3VsdC1UYWxrIj48cmVjdCB4PSIxNiIgeT0iMjUiIHdpZHRoPSIyIiBoZWlnaHQ9IjIiLz48cmVjdCB4PSIyNiIgeT0iMjUiIHdpZHRoPSIyIiBoZWlnaHQ9IjIiLz48cGF0aCBkPSJNNjEuMTQyLDM2LjAxbC0zLjkwNy0uNTU4YTE0LDE0LDAsMCwwLS42NTctMS42TDU4Ljk0MiwzMC43YTEsMSwwLDAsMC0uMDkzLTEuMzA3bC00LjI0My00LjI0M0EuOTg5Ljk4OSwwLDAsMCw1NCwyNC44NjdWMTUuMjQxQTgsOCwwLDAsMCw1Nyw5YTcuOTE3LDcuOTE3LDAsMCwwLTQuNTczLTcuMjI0QTEsMSwwLDAsMCw1MSwyLjY4djUuNmwtMiwuNjY3LTItLjY2N1YyLjY4YTEsMSwwLDAsMC0xLjQyNy0uOUE3LjkxNyw3LjkxNywwLDAsMCw0MSw5YTgsOCwwLDAsMCwzLDYuMjQxVjIySDQxYTEsMSwwLDAsMC0uOTkuODU4bC0uNjQ3LDQuNTI5LDEuOTguMjgzTDQxLjg2NywyNGg0LjI2NmwuNTI0LDMuNjdhMSwxLDAsMCwwLC43MS44MTgsMTEuOTM5LDExLjkzOSwwLDAsMSwyLjQuOTg3LDEsMSwwLDAsMCwxLjA4MS0uMDc3bDIuOTYxLTIuMjIsMy4wMTYsMy4wMTZMNTQuNiwzMy4xNTVhMSwxLDAsMCwwLS4wNzcsMS4wODEsMTEuOTM5LDExLjkzOSwwLDAsMSwuOTg3LDIuNCwxLDEsMCwwLDAsLjgxOC43MWwzLjY3LjUyNHY0LjI2NmwtMy42Ny41MjRhMSwxLDAsMCwwLS44MTguNzEsMTEuOTM5LDExLjkzOSwwLDAsMS0uOTg3LDIuNCwxLDEsMCwwLDAsLjA3NywxLjA4MWwyLjIyLDIuOTYxLTMuMDE2LDMuMDE2TDUwLjg0NSw1MC42YTEsMSwwLDAsMC0xLjA4MS0uMDc3LDExLjkzOSwxMS45MzksMCwwLDEtMi40Ljk4NywxLDEsMCwwLDAtLjcxLjgxOEw0Ni4xMzMsNTZINDJWNTEuNzcxYTExLjEsMTEuMSwwLDAsMC0uNDUtMy4xMjEsOS4xMSw5LjExLDAsMSwwLTYuMzk0LTcuMDYyYy0uMDI0LS4wMS0uMDQ3LS4wMjItLjA3MS0uMDMxTDI3LDM4LjMyM1YzNi43ODZBMTEuMDg5LDExLjA4OSwwLDAsMCwzMC40NzksMzRIMzNhMywzLDAsMCwwLDMtM1YyOC44MTZBMywzLDAsMCwwLDM4LDI2VjIzYTMsMywwLDAsMC0yLTIuODE2VjE5QTE0LDE0LDAsMCwwLDgsMTl2MS4xODRBMywzLDAsMCwwLDYsMjN2M2EzLDMsMCwwLDAsMywzaDJjLjA2NCwwLC4xMjYtLjAxLjE4OS0uMDE0QTExLjAyMywxMS4wMjMsMCwwLDAsMTcsMzYuNzg2djEuNTM3TDguOTE1LDQxLjU1N0ExMC45NDksMTAuOTQ5LDAsMCwwLDIsNTEuNzcxVjYxYTEsMSwwLDAsMCwxLDFINDFhMSwxLDAsMCwwLDEtMVY1OGg1YTEsMSwwLDAsMCwuOTktLjg1OGwuNTU4LTMuOTA3YTE0LDE0LDAsMCwwLDEuNi0uNjU3TDUzLjMsNTQuOTQyYTEsMSwwLDAsMCwxLjMwNy0uMDkzbDQuMjQzLTQuMjQzYTEsMSwwLDAsMCwuMDkzLTEuMzA3bC0yLjM2NC0zLjE1MmExNCwxNCwwLDAsMCwuNjU3LTEuNmwzLjkwNy0uNTU4QTEsMSwwLDAsMCw2Miw0M1YzN0ExLDEsMCwwLDAsNjEuMTQyLDM2LjAxWm0tMTEtOC41ODhjLS4wNDctLjAyMy0uMS0uMDM4LS4xNDctLjA2VjE1SDQ4djcuOTNsLS4wMS0uMDcyQTEsMSwwLDAsMCw0NywyMkg0NlYxNC43NGExLDEsMCwwLDAtLjQyOS0uODIxQTYsNiwwLDAsMSw0NSw0LjUyMlY5YTEsMSwwLDAsMCwuNjg0Ljk0OWwzLDFhMSwxLDAsMCwwLC42MzIsMGwzLTFBMSwxLDAsMCwwLDUzLDlWNC41MjJhNiw2LDAsMCwxLS41NzEsOS40QTEsMSwwLDAsMCw1MiwxNC43NFYyNi4wMzNaTTM3LDQwYTcuMDUsNy4wNSwwLDEsMSwzLjMzMyw1Ljk0MSwxMC45MTYsMTAuOTE2LDAsMCwwLTIuNjExLTIuODc3QTYuODM2LDYuODM2LDAsMCwxLDM3LDQwWm0tNC04SDMxLjc4NmExMC45LDEwLjksMCwwLDAsMS4wMjUtMy4wMTRjLjA2MywwLC4xMjUuMDE0LjE4OS4wMTRoMXYyQTEsMSwwLDAsMSwzMywzMlpNMzEsMjFhMy4wMTUsMy4wMTUsMCwwLDEtMi40LTEuMmwtMS44LTIuNGExLDEsMCwwLDAtLjY3NC0uMzkyLDEuMDExLDEuMDExLDAsMCwwLS43NTEuMjExTDIyLjAxOSwxOS45QTUuMDE4LDUuMDE4LDAsMCwxLDE4LjksMjFIMTNWMjBhOSw5LDAsMCwxLDE4LDBabTUsNWExLDEsMCwwLDEtMSwxSDMzVjIyaDJhMSwxLDAsMCwxLDEsMVpNMjIsN0ExMi4wMTMsMTIuMDEzLDAsMCwxLDM0LDE5djFIMzNhMTEsMTEsMCwwLDAtMjIsMEgxMFYxOUExMi4wMTMsMTIuMDEzLDAsMCwxLDIyLDdaTTksMjdhMSwxLDAsMCwxLTEtMVYyM2ExLDEsMCwwLDEsMS0xaDJ2NVptNCwwVjIzaDUuOWE3LjAyNCw3LjAyNCwwLDAsMCw0LjM3Mi0xLjUzNGwyLjU1MS0yLjA0MUwyNywyMWE1LjAyNSw1LjAyNSwwLDAsMCw0LDJ2NGE4Ljk0Nyw4Ljk0NywwLDAsMS0xLjUyMiw1SDIydjJoNS42NDRBOC45OTEsOC45OTEsMCwwLDEsMTMsMjdabTksMTFhMTAuOTY2LDEwLjk2NiwwLDAsMCwzLS40MjZWMzlhMywzLDAsMCwxLTYsMFYzNy41NzRBMTAuOTY2LDEwLjk2NiwwLDAsMCwyMiwzOFpNNDAsNjBIMzRWNDlIMzJWNjBIMTJWNDlIMTBWNjBINFY1MS43NzFhOC45NTgsOC45NTgsMCwwLDEsNS42NTgtOC4zNTdsNy41NjMtMy4wMjVhNC45NjgsNC45NjgsMCwwLDAsOS41NTgsMGw3LjU2MywzLjAyNUE4Ljk1OCw4Ljk1OCwwLDAsMSw0MCw1MS43NzFaIi8+PHJlY3QgeD0iNDMiIHk9IjI2IiB3aWR0aD0iMiIgaGVpZ2h0PSIyIi8+PHJlY3QgeD0iNDMiIHk9IjUyIiB3aWR0aD0iMiIgaGVpZ2h0PSIyIi8+PHJlY3QgeD0iNTIuMTkyIiB5PSI0OC4xOTIiIHdpZHRoPSIyIiBoZWlnaHQ9IjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xOS4yMDUgNTIuMDIxKSByb3RhdGUoLTQ1KSIvPjxyZWN0IHg9IjU2IiB5PSIzOSIgd2lkdGg9IjIiIGhlaWdodD0iMiIvPjxyZWN0IHg9IjUyLjE5MiIgeT0iMjkuODA4IiB3aWR0aD0iMiIgaGVpZ2h0PSIyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtNi4yMDUgNDYuNjM2KSByb3RhdGUoLTQ1KSIvPjwvZz48L3N2Zz4K" width="50px" height="50px"/>
                        </span>
                        <div class="media-body">
                            <h5>Dịch vụ - Hữu &amp; ích</h5>
                            <p>Khi bạn có những nhu cầu sửa chữa hoặc thay đổi trong phòng của bạn, thì chúng tôi có thể giúp đỡ ở mọi điều kiện mà bạn muốn</p>
                        </div>
                    </div>
                    <div class="owl-thumb-item">
                        <span class="media-left">
                            <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDYwIDYwIiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIGlkPSJQYWdlLTEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PGcgaWQ9IjAxNC0tLU5ld3NwYXBlci1hbmQtQ29mZmVlIiBmaWxsPSJyZ2IoMCwwLDApIiBmaWxsLXJ1bGU9Im5vbnplcm8iPjxwYXRoIGlkPSJTaGFwZSIgZD0ibTI4IDZjMC0xLjEwNDU2OTUtLjg5NTQzMDUtMi0yLTJoLTExYy0xLjEwNDU2OTUgMC0yIC44OTU0MzA1LTIgMnY5YzAgMS4xMDQ1Njk1Ljg5NTQzMDUgMiAyIDJoMTFjMS4xMDQ1Njk1IDAgMi0uODk1NDMwNSAyLTJ6bS0xMyA5di05aDExdjl6Ii8+PHBhdGggaWQ9IlNoYXBlIiBkPSJtMjcgMjRoLTEzYy0uNTUyMjg0NyAwLTEgLjQ0NzcxNTMtMSAxcy40NDc3MTUzIDEgMSAxaDEzYy41NTIyODQ3IDAgMS0uNDQ3NzE1MyAxLTFzLS40NDc3MTUzLTEtMS0xeiIvPjxwYXRoIGlkPSJTaGFwZSIgZD0ibTI3IDE5aC0xM2MtLjU1MjI4NDcgMC0xIC40NDc3MTUzLTEgMXMuNDQ3NzE1MyAxIDEgMWgxM2MuNTUyMjg0NyAwIDEtLjQ0NzcxNTMgMS0xcy0uNDQ3NzE1My0xLTEtMXoiLz48cGF0aCBpZD0iU2hhcGUiIGQ9Im0yNyAyOWgtMTNjLS41NTIyODQ3IDAtMSAuNDQ3NzE1My0xIDFzLjQ0NzcxNTMgMSAxIDFoMTNjLjU1MjI4NDcgMCAxLS40NDc3MTUzIDEtMXMtLjQ0NzcxNTMtMS0xLTF6Ii8+PHBhdGggaWQ9IlNoYXBlIiBkPSJtMjcgMzRoLTEzYy0uNTUyMjg0NyAwLTEgLjQ0NzcxNTMtMSAxcy40NDc3MTUzIDEgMSAxaDEzYy41NTIyODQ3IDAgMS0uNDQ3NzE1MyAxLTFzLS40NDc3MTUzLTEtMS0xeiIvPjxwYXRoIGlkPSJTaGFwZSIgZD0ibTI3IDM5aC0xM2MtLjU1MjI4NDcgMC0xIC40NDc3MTUzLTEgMXMuNDQ3NzE1MyAxIDEgMWgxM2MuNTUyMjg0NyAwIDEtLjQ0NzcxNTMgMS0xcy0uNDQ3NzE1My0xLTEtMXoiLz48cGF0aCBpZD0iU2hhcGUiIGQ9Im0yNiA0M2gtMTFjLTEuMTA0NTY5NSAwLTIgLjg5NTQzMDUtMiAydjljMCAxLjEwNDU2OTUuODk1NDMwNSAyIDIgMmgxMWMxLjEwNDU2OTUgMCAyLS44OTU0MzA1IDItMnYtOWMwLTEuMTA0NTY5NS0uODk1NDMwNS0yLTItMnptLTExIDExdi05aDExdjl6Ii8+PHBhdGggaWQ9IlNoYXBlIiBkPSJtNTEuNSAyOWgtLjV2LTFjMC0xLjEwNDU2OTUtLjg5NTQzMDUtMi0yLTJoLTE3Yy0xLjEwNDU2OTUgMC0yIC44OTU0MzA1LTIgMnYxN2MuMDA0OTU5OSA0LjQxNjIyMTkgMy41ODM3NzgxIDcuOTk1MDQwMSA4IDhoNWMuNjc1MTI3My0uMDAyNDIxMSAxLjM0NzE5ODgtLjA5MDc5ODUgMi0uMjYzdjIuNjIzYy0uMDAyMjAyOCAxLjQ1NzExODQtMS4xODI4ODE2IDIuNjM3Nzk3Mi0yLjY0IDIuNjRoLTMyLjYyMWMuODE1ODIxOS0uOTgzODA0OSAxLjI2MTkwNDQtMi4yMjE5NDAzIDEuMjYxLTMuNXYtNTEuNWMwLS41NTIyODQ3NS40NDc3MTUzLTEgMS0xaDMyYy41NTIyODQ3IDAgMSAuNDQ3NzE1MjUgMSAxdjRjMCAuNTUyMjg0NzUuNDQ3NzE1MyAxIDEgMXMxLS40NDc3MTUyNSAxLTF2LTRjMC0xLjY1Njg1NDI1LTEuMzQzMTQ1OC0zLTMtM2gtMzJjLTEuNjU2ODU0MiAwLTMgMS4zNDMxNDU3NS0zIDN2MjhoLTZjLTEuNjU2ODU0MjUgMC0zIDEuMzQzMTQ1OC0zIDN2MjAuNWMuMDAzMzA2OCAzLjAzNjE5NTMgMi40NjM4MDQ2NSA1LjQ5NjY5MzIgNS41IDUuNWgzNi44NmMyLjU2MTIzMDgtLjAwMzMwNTUgNC42MzY2OTQ1LTIuMDc4NzY5MiA0LjY0LTQuNjR2LTMuNDQ0YzIuMTYwOTUyOC0xLjI1MTM0NjggMy42MTQ1ODktMy40MzkwMTIgMy45MzEtNS45MTZoLjU2OWM0LjY5NDQyMDQgMCA4LjUtMy44MDU1Nzk2IDguNS04LjVzLTMuODA1NTc5Ni04LjUtOC41LTguNXptLTQ5LjUgMjUuNXYtMjAuNWMwLS41NTIyODQ3LjQ0NzcxNTI1LTEgMS0xaDZ2MjEuNWMtLjAwMDAwMDAzIDEuOTMyOTk2Ni0xLjU2NzAwMzQgMy40OTk5OTk5LTMuNSAzLjQ5OTk5OTlzLTMuNDk5OTk5OTctMS41NjcwMDMzLTMuNS0zLjQ5OTk5OTl6bTQ5LTE5LjVoLjVjMS4zODA3MTE5IDAgMi41IDEuMTE5Mjg4MSAyLjUgMi41cy0xLjExOTI4ODEgMi41LTIuNSAyLjVoLS41em0tMi03djNoLTE3di0zem0tNiAyM2gtNWMtMy4zMTIzMzc2LS4wMDMzMDc0LTUuOTk2NjkyNi0yLjY4NzY2MjQtNi02di0xMmgxN3YxMmMtLjAwMzMwNzQgMy4zMTIzMzc2LTIuNjg3NjYyNCA1Ljk5NjY5MjYtNiA2em04LjUtN2gtLjV2LTJoLjVjMi40ODUyODEzLS4wMDAwMDAxIDQuNDk5OTk5OS0yLjAxNDcxODcgNC40OTk5OTk5LTQuNXMtMi4wMTQ3MTg2LTQuNDk5OTk5OS00LjQ5OTk5OTktNC41aC0uNXYtMmguNWMzLjU4OTg1MDkgMCA2LjUgMi45MTAxNDkxIDYuNSA2LjVzLTIuOTEwMTQ5MSA2LjUtNi41IDYuNXoiLz48cGF0aCBpZD0iU2hhcGUiIGQ9Im0zOCA0N2MtLjU0MTI3NzQuMDM0Mjc3OC0xLjA3MTA5MjEtLjE2NjI1MTUtMS40NTQwMjQ5LS41NTAzMzMxcy0uNTgxODc0MS0uOTE0NDk0Ni0uNTQ1OTc1MS0xLjQ1NTY2NjljLS4wMDE2NTY5LS41NTIyODQ3LS40NTA3MTUzLS45OTg2NTY4LTEuMDAzLS45OTY5OTk5LS41NTIyODQ3LjAwMTY1NjgtLjk5ODY1NjguNDUwNzE1Mi0uOTk3IDEuMDAyOTk5OS0uMDMxNTkyOSAxLjA3MDIzODcuMzc5NjgwOCAyLjEwNjExMzggMS4xMzY3ODM1IDIuODYzMjE2NXMxLjc5Mjk3NzggMS4xNjgzNzY0IDIuODYzMjE2NSAxLjEzNjc4MzVjLjU1MjI4NDcgMCAxLS40NDc3MTUzIDEtMXMtLjQ0NzcxNTMtMS0xLTF6Ii8+PHBhdGggaWQ9IlNoYXBlIiBkPSJtMzcgMTdjLS4wMzc0MTEyLTEuMDUzMDMyLS41MTM5MjQtMi4wNDIzMjE5LTEuMzE0LTIuNzI4LS4zODcyODgtLjMxNzA4NzktLjYzMzgwOC0uNzc0MTkyMS0uNjg2LTEuMjcyLjA1MjE5Mi0uNDk3ODA3OS4yOTg3MTItLjk1NDkxMjEuNjg2LTEuMjcyLjI1OTczMjEtLjI0NTQ0MTUuMzY4NzkzLS42MTA4MDQxLjI4NjEwMDUtLjk1ODQ1OTUtLjA4MjY5MjUtLjM0NzY1NTMtLjM0NDU3NTQtLjYyNDc4NjEtLjY4Ny0uNzI3LS4zNDI0MjQ2LS4xMDIyMTM4MS0uNzEzMzY4NC0uMDEzOTgyLS45NzMxMDA1LjIzMTQ1OTUtLjc5OTAyNzcuNjg1NDIxMi0xLjI3NDc4NTcgMS42NzM5MjQ2LTEuMzEyIDIuNzI2LjAzNzQxMTIgMS4wNTMwMzIuNTEzOTI0IDIuMDQyMzIxOSAxLjMxNCAyLjcyOC4zODcyODguMzE3MDg3OS42MzM4MDguNzc0MTkyMS42ODYgMS4yNzItLjA1MjE5MjUuNDk4ODI4NS0uMjk5NTA0Ljk1Njc4Ni0uNjg4IDEuMjc0LS43OTkwMjc3LjY4NTQyMTItMS4yNzQ3ODU3IDEuNjczOTI0Ni0xLjMxMiAyLjcyNi4wMzcyMTQzIDEuMDUyMDc1NC41MTI5NzIzIDIuMDQwNTc4OCAxLjMxMiAyLjcyNi4yNTk3MzIxLjI0NTQ0MTUuNjMwNjc1OS4zMzM2NzMzLjk3MzEwMDUuMjMxNDU5NS4zNDI0MjQ2LS4xMDIyMTM5LjYwNDMwNzUtLjM3OTM0NDcuNjg3LS43MjcuMDgyNjkyNS0uMzQ3NjU1NC0uMDI2MzY4NC0uNzEzMDE4LS4yODYxMDA1LS45NTg0NTk1LS4zODcyODgtLjMxNzA4NzktLjYzMzgwOC0uNzc0MTkyMS0uNjg2LTEuMjcyLjA1MjE5MjUtLjQ5ODgyODUuMjk5NTA0LS45NTY3ODYuNjg4LTEuMjc0Ljc5OTAyNzctLjY4NTQyMTIgMS4yNzQ3ODU3LTEuNjczOTI0NiAxLjMxMi0yLjcyNnoiLz48cGF0aCBpZD0iU2hhcGUiIGQ9Im00MyAxN2MtLjAzNzQxMTItMS4wNTMwMzItLjUxMzkyNC0yLjA0MjMyMTktMS4zMTQtMi43MjgtLjM4NzI4OC0uMzE3MDg3OS0uNjMzODA4LS43NzQxOTIxLS42ODYtMS4yNzIuMDUyMTkyLS40OTc4MDc5LjI5ODcxMi0uOTU0OTEyMS42ODYtMS4yNzIuMjU5NzMyMS0uMjQ1NDQxNS4zNjg3OTMtLjYxMDgwNDEuMjg2MTAwNS0uOTU4NDU5NS0uMDgyNjkyNS0uMzQ3NjU1My0uMzQ0NTc1NC0uNjI0Nzg2MS0uNjg3LS43MjctLjM0MjQyNDYtLjEwMjIxMzgzLS43MTMzNjg0LS4wMTM5ODItLjk3MzEwMDUuMjMxNDU5NS0uNzk5MDI3Ny42ODU0MjEyLTEuMjc0Nzg1NyAxLjY3MzkyNDYtMS4zMTIgMi43MjYuMDM3NDExMiAxLjA1MzAzMi41MTM5MjQgMi4wNDIzMjE5IDEuMzE0IDIuNzI4LjM4NzI4OC4zMTcwODc5LjYzMzgwOC43NzQxOTIxLjY4NiAxLjI3Mi0uMDUyMTkyNS40OTg4Mjg1LS4yOTk1MDQuOTU2Nzg2LS42ODggMS4yNzQtLjc5OTAyNzcuNjg1NDIxMi0xLjI3NDc4NTcgMS42NzM5MjQ2LTEuMzEyIDIuNzI2LjAzNzIxNDMgMS4wNTIwNzU0LjUxMjk3MjMgMi4wNDA1Nzg4IDEuMzEyIDIuNzI2LjQwMTUxMS4zNzk0MTk2IDEuMDM0NTgwNC4zNjE1MTEgMS40MTQtLjA0cy4zNjE1MTEtMS4wMzQ1ODA0LS4wNC0xLjQxNGMtLjM4NzI4OC0uMzE3MDg3OS0uNjMzODA4LS43NzQxOTIxLS42ODYtMS4yNzIuMDUyMTkyNS0uNDk4ODI4NS4yOTk1MDQtLjk1Njc4Ni42ODgtMS4yNzQuNzk5MDI3Ny0uNjg1NDIxMiAxLjI3NDc4NTctMS42NzM5MjQ2IDEuMzEyLTIuNzI2eiIvPjxwYXRoIGlkPSJTaGFwZSIgZD0ibTQ3LjcyNiAxMC4zMTNjLS4xODIxNjk2LS4xOTI4NzI1LS40MzM1MTYxLS4zMDU0NTAxLS42OTg3MTI4LS4zMTI5NTIxLS4yNjUxOTY3LS4wMDc1MDIwNS0uNTIyNTA1NS4wOTA2ODY1LS43MTUyODcyLjI3Mjk1MjEtLjc5OTI3ODguNjg1NjU0My0xLjI3NTA2MTkgMS42NzQ1NzIzLTEuMzEyIDIuNzI3LjAzNzQxMTIgMS4wNTMwMzIuNTEzOTI0IDIuMDQyMzIxOSAxLjMxNCAyLjcyOC4zODcyODguMzE3MDg3OS42MzM4MDguNzc0MTkyMS42ODYgMS4yNzItLjA1MjE5MjUuNDk4ODI4NS0uMjk5NTA0Ljk1Njc4Ni0uNjg4IDEuMjc0LS43OTkwMjc3LjY4NTQyMTItMS4yNzQ3ODU3IDEuNjczOTI0Ni0xLjMxMiAyLjcyNi4wMzcyMTQzIDEuMDUyMDc1NC41MTI5NzIzIDIuMDQwNTc4OCAxLjMxMiAyLjcyNi4yNTk3MzIxLjI0NTQ0MTUuNjMwNjc1OS4zMzM2NzMzLjk3MzEwMDUuMjMxNDU5NS4zNDI0MjQ2LS4xMDIyMTM5LjYwNDMwNzUtLjM3OTM0NDcuNjg3LS43MjcuMDgyNjkyNS0uMzQ3NjU1NC0uMDI2MzY4NC0uNzEzMDE4LS4yODYxMDA1LS45NTg0NTk1LS4zODcyODgtLjMxNzA4NzktLjYzMzgwOC0uNzc0MTkyMS0uNjg2LTEuMjcyLjA1MjE5MjUtLjQ5ODgyODUuMjk5NTA0LS45NTY3ODYuNjg4LTEuMjc0Ljc5OTAyNzctLjY4NTQyMTIgMS4yNzQ3ODU3LTEuNjczOTI0NiAxLjMxMi0yLjcyNi0uMDM3NDExMi0xLjA1MzAzMi0uNTEzOTI0LTIuMDQyMzIxOS0xLjMxNC0yLjcyOC0uMzg3Mjg4LS4zMTcwODc5LS42MzM4MDgtLjc3NDE5MjEtLjY4Ni0xLjI3Mi4wNTIxOTItLjQ5NzgwNzkuMjk4NzEyLS45NTQ5MTIxLjY4Ni0xLjI3Mi4xOTMxNzU5LS4xODIyMDUyLjMwNTk0ODgtLjQzMzc2MjcuMzEzNDUyNS0uNjk5MjA0NS4wMDc1MDM2LS4yNjU0NDE5LS4wOTA4NzgyLS41MjI5Njg0LS4yNzM0NTI1LS43MTU3OTU1eiIvPjwvZz48L2c+PC9zdmc+" width="50px" height="50px"/>
                        </span>
                        <div class="media-body">
                            <h5>Thông tin</h5>
                            <p>Có những thông tin bổ ích mà bạn có thể xem và trong thông tin có cẩ nội quy cho việc bạn sử dụng phòng trọ</p>
                        </div>
                    </div>
                    <div class="owl-thumb-item">
                        <span class="media-left">
                        <img src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PHBhdGggZD0ibTQyMiA2MHYtMzBoLTMwdjMwaC00NS41di0zMGgtMzB2MzBoLTQ1LjV2LTMwaC0zMHYzMGgtNDUuNXYtMzBoLTMwdjMwaC00NS41di0zMGgtMzB2MzBoLTkwdjQyMmg1MTJ2LTQyMnptLTMzMiAzMHYzMGgzMHYtMzBoNDUuNXYzMGgzMHYtMzBoNDUuNXYzMGgzMHYtMzBoNDUuNXYzMGgzMHYtMzBoNDUuNXYzMGgzMHYtMzBoNjB2NjBoLTQ1MnYtNjB6bS02MCAzNjJ2LTI3Mmg0NTJ2MjcyeiIvPjxwYXRoIGQ9Im0yMDAuNDQ4IDI3Ni41NDItMzQuNDQ4LTY5LjgtMzQuNDQ4IDY5LjgwMS03Ny4wMjkgMTEuMTkzIDU1LjczOSA1NC4zMzItMTMuMTU4IDc2LjcxOCA2OC44OTYtMzYuMjIyIDY4Ljg5NiAzNi4yMjEtMTMuMTU4LTc2LjcxOCA1NS43MzktNTQuMzMyem0tNS4zOTUgODcuNDAyLTI5LjA1My0xNS4yNzQtMjkuMDUzIDE1LjI3NCA1LjU0OS0zMi4zNTEtMjMuNTA1LTIyLjkxMSAzMi40ODItNC43MiAxNC41MjctMjkuNDMzIDE0LjUyNiAyOS40MzQgMzIuNDgyIDQuNzItMjMuNTA1IDIyLjkxMXoiLz48cGF0aCBkPSJtNDIyIDIxMWgzMHYzMGgtMzB6Ii8+PHBhdGggZD0ibTQyMiAyNzFoMzB2MzBoLTMweiIvPjxwYXRoIGQ9Im00MjIgMzMxaDMwdjMwaC0zMHoiLz48cGF0aCBkPSJtNDIyIDM5MWgzMHYzMGgtMzB6Ii8+PHBhdGggZD0ibTM2MiAyMTFoMzB2MzBoLTMweiIvPjxwYXRoIGQ9Im0zNjIgMjcxaDMwdjMwaC0zMHoiLz48cGF0aCBkPSJtMzYyIDMzMWgzMHYzMGgtMzB6Ii8+PHBhdGggZD0ibTM2MiAzOTFoMzB2MzBoLTMweiIvPjxwYXRoIGQ9Im0zMDIgMjExaDMwdjMwaC0zMHoiLz48cGF0aCBkPSJtMzAyIDI3MWgzMHYzMGgtMzB6Ii8+PHBhdGggZD0ibTMwMiAzMzFoMzB2MzBoLTMweiIvPjxwYXRoIGQ9Im0zMDIgMzkxaDMwdjMwaC0zMHoiLz48L2c+PC9zdmc+" width="50px" height="50px" />
                        </span>
                        <div class="media-body">
                            <h5>Sự kiện</h5>
                            <p>Sự kiện giảm giá hay tặng voucher tới khách hàng sử dụng phòng trọ tại Sunline</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="rooms gray">
    <div class="container">
        <div class="section-title">
            <h4>OUR ROOMS</h4>
            <p class="section-subtitle">Our favorite rooms</p>
            <a href="rooms-list.html" class="view-all">View all rooms</a>
        </div>
        <div class="row">

            @foreach($listroom as $room)

            @if($room->urlloaigiuong == 'phong-don')

            <div class="col-md-4">
                <div class="room-grid-item">
                    <figure class="gradient-overlay-hover link-icon">
                        <a href="{{route('room-fe', $room->maphong)}}">
                            <img src="{{asset('upload/rooms/single/' . $room->thumbnailphong)}}" class="img-fluid" alt="Image">
                        </a>
                        <div class="room-services">
                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                        </div>
                        <div class="room-price">€89 / night</div>
                    </figure>
                    <div class="room-info">
                        <h2 class="room-title">
                            <a href="{{route('room-fe', $room->maphong)}}">{{ $room->tenphong }}</a>
                        </h2>
                        <p>{{ $room->mota }}</p>
                    </div>
                </div>
            </div>

            @elseif($room->urlloaigiuong == 'phong-doi')

            <div class="col-md-4">
                <div class="room-grid-item">
                    <figure class="gradient-overlay-hover link-icon">
                        <a href="{{route('room-fe', $room->maphong)}}">
                            <img src="{{asset('upload/rooms/double/' . $room->thumbnailphong)}}" class="img-fluid" alt="Image">
                        </a>
                        <div class="room-services">
                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                            <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                        </div>
                        <div class="room-price">€89 / night</div>
                    </figure>
                    <div class="room-info">
                        <h2 class="room-title">
                            <a href="{{route('room-fe', $room->maphong)}}">{{ $room->tenphong }}</a>
                        </h2>
                        <p>{{ $room->mota }}</p>
                    </div>
                </div>
            </div>
            @endif

            @endforeach

        </div>
    </div>
</section>

<section class="restaurant image-bg parallax gradient-overlay op5" data-src="images/restaurant.jpg" data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
    <div class="container">
        <div class="section-title">
            <h4>SUNLINE. Dịch vụ</h4>
            <p class="section-subtitle">Trải nghiệm dịch vụ dành cho khách hàng</p>
            <a href="restaurant.html" class="view-all uppercase">Tất cả dịch vụ</a>
        </div>
        <div class="row">
            <div class="col-lg-7 col-12">
                <div data-slider-id="services" class="services-owl owl-carousel">
                    @foreach($listserviceslider as $service)
                    <figure class="gradient-overlay">
                        <img src="{{asset('feHotel/images/services/' . $service->hinhanh)}}" class="img-fluid" alt="Image">
                        <figcaption>
                            <h4>{{$service->tendichvu}}</h4>
                        </figcaption>
                    </figure>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="owl-thumbs" data-slider-id="services">
                    @foreach($listserviceslider as $service)
                    <div class="owl-thumb-item">
                        <span class="media-left">
                            {!! $service->trangchu !!}
                        </span>
                        <div class="media-body">
                            <h5>{{$service->tendichvu}}</h5>
                            <p>{{$service->motadichvu}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section class="gallery">
    <div class="container">
        <div class="section-title">
            <h4>SUNLINE. GALLERY</h4>
            <p class="section-subtitle">Bộ sưu tập ảnh thư viện về phòng trọ SUNLINE</p>
            
        </div>
        <div class="gallery-owl owl-carousel image-gallery">

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/service/phong4.jpg')}}">
                        <img src="{{asset('feHotel/images/service/phong4.jpg')}}" alt="Image" height="280px">
                    </a>
                    <figcaption>Phòng có gác 01</figcaption>
                </figure>
            </div>

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/service/phongkhongcogac.jpg')}}">
                        <img src="{{asset('feHotel/images/service/phongkhongcogac.jpg')}}" alt="Image" height="280px">
                    </a>
                    <figcaption>Phòng không có gác 01</figcaption>
                </figure>
            </div>

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/service/phong2.png')}}">
                        <img src="{{asset('feHotel/images/service/phong2.png')}}" alt="Image" height="280px">
                    </a>
                    <figcaption>Phòng có gác 02</figcaption>
                </figure>
            </div>

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/service/phongkcogac.jpg')}}">
                        <img src="{{asset('feHotel/images/service/phongkcogac.jpg')}}" alt="Image" height="280px">
                    </a>
                    <figcaption>Phòng không có gác 02</figcaption>
                </figure>
            </div>

            <div class="gallery-item">
                <figure class="gradient-overlay image-icon">
                    <a href="{{asset('feHotel/images/service/phongtam.jpg')}}">
                        <img src="{{asset('feHotel/images/service/phongtam.jpg')}}" alt="Image" height="280px">
                    </a>
                    <figcaption>Phòng tắm</figcaption>
                </figure>
            </div>

        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <div class="section-title">
            <h4 class="title">Bản tin</h4>
            <p class="section-subtitle">Một số thông tin bạn có thể xem</p>
            <a href="blog.html" class="view-all">Tất cả thông tin</a>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="news-grid-item">
                    <figure class="gradient-overlay-hover link-icon">
                        <a href="blog-post.html">
                            <img src="{{asset('feHotel/images/services/anhcovid.jpg')}}" width="350" height="350">
                        </a>
                    </figure>
                    <div class="news-info">
                        <h4 class="title">
                            <a href="blog-post.html">Cách phòng chống virus Corona mới nhất của Bộ Y tế</a>
                        </h4>
                        <p>Dịch viêm đường hô hấp cấp do Covid-19 gây ra các triệu chứng sốt, ho, viêm phổi cấp, suy hô hấp cấp, thậm chí tử vong đến nay vẫn đang gây căng thẳng trên toàn cầu. Có hay không cách điều trị Covid-19? Biện pháp phòng chống Covid-19 hiện nay là gì? Ngay khi...</p>
                        <div class="post-meta">
                            <span class="author">
                                FFFFFF
                            </span>
                            <span class="date">
                                <i class="fa fa-clock-o"></i>
                                01.03.2019</span>
                            <span class="comments">
                                <a href="#">
                                    <i class="fa fa-commenting-o"></i> 1 Comment</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="news-grid-item">
                    <figure class="gradient-overlay-hover link-icon">
                        <a href="blog-post.html">
                            <img src="{{asset('feHotel/images/services/noiquynhatro.jpg')}}" width="370" height="350">
                        </a>
                    </figure>
                    <div class="news-info">
                        <h4 class="title">
                            <a href="blog-post.html">Những nội quy phòng trọ bạn phải “nằm lòng” khi thuê nhà</a>
                        </h4>
                        <p>Khu nhà trọ an ninh, trật tự, yên tĩnh, môi trường sống tốt, thoải mái, không ô nhiễm. Là niềm mơ ước của rất nhiều người khi đi thuê nhà trọ. Và điều này chỉ có thể được tạo ra khi có những nội quy, và quy định nghiêm ngặt từ chủ trọ. Việc này giúp họ dễ quản lý hơn,...</p>
                        <div class="post-meta">
                            <span class="author">
                                <a href="#"><img src="{{asset('feHotel/images/users/admin.jpg')}}" width="16" alt="Image">
                                    JANE</a>
                            </span>
                            <span class="date">
                                <i class="fa fa-clock-o"></i>
                                09.06.2017</span>
                            <span class="comments">
                                <a href="#">
                                    <i class="fa fa-commenting-o"></i>
                                    5 Comments</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="col-md-4">
                <div class="news-grid-item">
                    <figure class="gradient-overlay-hover link-icon">
                        <a href="blog-post.html" height="30">
                            <img src="{{asset('feHotel/images/services/dondep.jpg')}}" width="350" height="350">
                        </a>
                    </figure>
                    <div class="news-info">
                        <h4 class="title">
                            <a href="blog-post.html">Tuyệt chiêu dọn dẹp nhà cửa siêu nhanh ngày cuối tuần</a>
                        </h4>
                        <p>Bạn quá bận rộn với công việc và không có nhiều thời gian dọn dẹp nhà cửa? Bạn muốn giữ cho không gian nhà ở của mình luôn sạch sẽ mà không mất quá nhiều thời gian, công sức? Vậy thì đừng bỏ lỡ các cách giữ nhà cửa sạch sẽ, gọn gàng trong bài viết này nhé!...</p>
                        <div class="post-meta">
                            <span class="author">
                                <a href="#"><img src="{{asset('feHotel/images/users/admin.jpg')}}" width="16" alt="Image">
                                    JANE</a>
                            </span>
                            <span class="date">
                                <i class="fa fa-clock-o"></i>
                                11.09.2018</span>
                            <span class="comments">
                                <a href="#">
                                    <i class="fa fa-commenting-o"></i>
                                    3 Comments</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="events">
    <div class="container">
        <div class="section-title">
            <h4>Sự kiện sắp đến</h4>
            <p class="section-subtitle">Dưới đây là sự kiện ở bên chúng tôi</p>
            <!-- <a href="events.html" class="view-all">Tất cả sự kiện</a> -->
        </div>
        <div class="events-owl owl-carousel">

            <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">01</div>
                    <div class="month">04.2021</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Giảm 10%</a>
                    </h6>
                    <p>Chào tháng tư xinh đẹp, chúng tôi giảm 10% cho những bạn mướn phòng...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">Chi tiết nhiều hơn</a>
                </div>
            </div>

            <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">30</div>
                    <div class="month">01.2021</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Tặng quà năm mới</a>
                    </h6>
                    <p>Vào dịp năm mới, khi bạn là khách hàng đặt phòng tại chúng tôi, thì bạn sẽ nhận được...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">Chi tiết nhiều hơn</a>
                </div>
            </div>

            <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">01</div>
                    <div class="month">01.2021</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Happy birthday!!! gửi bạn voucher 50k</a>
                    </h6>
                    <p>Vào ngày sinh nhật vào trong tháng 01, bạn sẽ nhận được 1...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">Chi tiết nhiều hơn</a>
                </div>
            </div>

            <!-- <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">16</div>
                    <div class="month">August</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Wedding Party</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                </div>
            </div>

            <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">10</div>
                    <div class="month">September</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Pool Party</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                </div>
            </div> -->

            <!-- <div class="event-item">
                <div class="date">
                    <span class="event-calendar"></span>
                    <div class="day">28</div>
                    <div class="month">November</div>
                </div>
                <div class="details">
                    <h6 class="title">
                        <a href="event-details.html">Latin Dance Party</a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                </div>
                <div class="align-center">
                    <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                </div>
            </div> -->
        </div>
    </div>
</section>

<section class="testimonials gray">
    <div class="container">
        <div class="section-title">
            <h4>OUR GUESTS FEEDBACK</h4>
            <p class="section-subtitle">Những feedback của khách hàng nói về chúng tôi</p>
        </div>
        <div class="owl-carousel testimonials-owl">

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img"> 
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/anh1.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Nguyễn Minh</h4>
                        <div class="location">Thanh Hóa, Việt Nam</div>
                    </div>
                    <div class="rating">
                        <i class="fa fa-star voted" aria-hidden="true"></i>
                        <i class="fa fa-star voted" aria-hidden="true"></i>
                        <i class="fa fa-star voted" aria-hidden="true"></i>
                        <i class="fa fa-star voted" aria-hidden="true"></i>
                        <i class="fa fa-star voted" aria-hidden="true"></i>
                    </div>
                    <p>Dịch vụ và phòng trọ của bạn thật tuyệt vời, chúng tôi đánh giá cho bạn 5 sao, hy vọng tôi có dịp để trở lại đây và tiếp tục đăng ký tại phòng chỗ bạn. Rất vui vì tôi đã chọn một chỗ ở tiện nghi</p>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img">
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/anh2.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Gia Hân</h4>
                        <div class="location">Cà Mau, Việt Nam</div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>Tuy phòng bị chút rò rỉ về nước, nhưng sau đó quản lý đã sửa giúp tớ. Tớ cũng cảm thấy phòng của các bạn thật thoải mái, tớ sẽ giới thiệu cho các bạn của tớ tới sử dụng phòng của bạn.</p>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img">
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/anh3.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Nguyễn Phillips</h4>
                        <div class="location">Thái Lan</div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>WOW!!!!!! Tôi là khách du lịch và thăm Thành phố Hồ Chí Minh trong hai tháng, tôi đã tìm đến và đăng ký phòng của bạn, tôi đã sử dụng nó và thật hấp dẫn... tôi sẽ quay lại chỗ của bạn.</p>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img">
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/anh4.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Lê Hoàng</h4>
                        <div class="location">Daklak, Việt nam</div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>Phòng đẹp và sạch sẽ, đầy đủ tiện nghi, rất thích nơi này vì quản lý tân cực kì dễ thương. Sẽ còn tiếp tục quay lại đây nhiều lần nữa. Điều bất ngờ mình nhận được 1 voucher 50k vào ngày sinh nhật</p>
                </div>
            </div>

            <div class="item">
                <div class="testimonial-item">
                    <div class="author-img">
                        <img alt="Image" class="img-fluid" src="{{asset('feHotel/images/users/anh5.jpg')}}">
                    </div>
                    <div class="author">
                        <h4 class="name">Hải</h4>
                        <div class="location">Nha Trang, Việt nam</div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p>Địa điểm thuận lợi để di chuyển tới các quận khác. Phòng trọ ở trong ngõ nên không bị ồn ào khi nghỉ ngơi, nhưng mặt ngõ vẫn rất rộng đủ để taxi vào ra đưa đón.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="contact-v2 gray">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-title">
                    <h4>GET IN TOUCH</h4>
                    <p class="section-subtitle">Get in touch</p>
                </div>
                <ul class="contact-details">
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Lorem ipsum dolor, 25, Himara
                    </li>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        Phone: +1 888 123 4567
                    </li>
                    <li>
                        <i class="fa fa-fax"></i>
                        Fax: +1 888 123 4567
                    </li>
                    <li>
                        <i class="fa fa-globe"></i>
                        Web: www.hotelhimara.com
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        Email:
                        <a href="https://preview.eagle-themes.com/cdn-cgi/l/email-protection#89e0e7efe6c9fae0fdeca7eae6e4"><span class="__cf_email__" data-cfemail="85e6eaebf1e4e6f1c5edeaf1e0e9edece8e4f7e4abe6eae8">[email&#160;protected]</span></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="section-title">
                    <h4>CONTACT US</h4>
                    <p class="section-subtitle">Say hello</p>
                </div>
                <form id="contact-form" name="contact-form">
                    <div class="form-group">
                        <input class="form-control" name="name" placeholder="Your Name" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                    </div>
                    <button class="btn" type="submit">
                        <i class="fa fa-location-arrow"></i>Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section> -->

<section class="instgram">
    <div class="section-title aligncenter">
        <p class="section-subtitle">
            <a href="https://www.instagram.com/pagesunline/" target="_blank">Thông tin về chúng tôi trong Instagram SUNLINE</a>
        </p>
    </div>
    <div class="section-title aligncenter">
        <p class="section-subtitle">
            <a href="https://www.facebook.com/NhaTroSunLine" target="_blank">Thông tin về chúng tôi trong Facebook SUNLINE</a>
        </p>
    </div>
    <div id="instafeed-gallery" class="owl-carousel instagram-owl"></div>
</section>

<style>
.fb-livechat, .fb-widget{display: none}
.ctrlq.fb-button, .ctrlq.fb-close{position: fixed; right: 24px; cursor: pointer}
.ctrlq.fb-button{
    z-index: 999;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #db7b7b;
    width: 60px;
    height: 60px;
    text-align: center;
    bottom: 200px;
    border: 0;
    outline: 0;
    border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; -ms-border-radius: 60px; -o-border-radius: 60px; box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16); -webkit-transition: box-shadow .2s ease; background-size: 80%; transition: all .2s ease-in-out}.ctrlq.fb-button:focus, .ctrlq.fb-button:hover{transform: scale(1.1); box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)}.fb-widget{background: #fff; z-index: 1000; position: fixed; width: 360px; height: 435px; overflow: hidden; opacity: 0; bottom: 0; right: 24px; border-radius: 6px; -o-border-radius: 6px; -webkit-border-radius: 6px; box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)}.fb-credit{text-align: center; margin-top: 8px}.fb-credit a{transition: none; color: #bec2c9; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-decoration: none; border: 0; font-weight: 400}.ctrlq.fb-overlay{z-index: 0; position: fixed; height: 100vh; width: 100vw; -webkit-transition: opacity .4s, visibility .4s; transition: opacity .4s, visibility .4s; top: 0; left: 0; background: rgba(0, 0, 0, .05); display: none}.ctrlq.fb-close{z-index: 4; padding: 0 6px; background: #db7b7b; font-weight: 700; font-size: 11px; color: #fff; margin: 8px; border-radius: 3px}.ctrlq.fb-close::after{content: "X"; font-family: sans-serif}.bubble{width: 20px; height: 20px; background: #c00; color: #fff; position: absolute; z-index: 999999999; text-align: center; vertical-align: middle; top: -2px; left: -5px; border-radius: 50%;}.bubble-msg{width: 120px; left: -140px; top: 5px; position: relative; background: rgba(59, 89, 152, .8); color: #fff; padding: 5px 8px; border-radius: 8px; text-align: center; font-size: 13px;}</style><div class="fb-livechat"> <div class="ctrlq fb-overlay"></div><div class="fb-widget"> <div class="ctrlq fb-close"></div><div class="fb-page" data-href="https://www.facebook.com/NhaTroSunLine" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> </div><div class="fb-credit"> <a href="https://www.facebook.com/NhaTroSunLine" target="_blank" >Powered by SUNLINE</a> </div><div id="fb-root"></div></div><a href="https://m.me/NhaTroSunLine" title="Hello, bạn có thể để lại tin nhắn cho chúng tôi" class="ctrlq fb-button"> <div class="bubble">1</div><div class="bubble-msg">Bạn muốn được hỗ trợ về thông tin?</div></a></div><script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><script>jQuery(document).ready(function($){function detectmob(){if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ){return true;}else{return false;}}var t={delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")}; setTimeout(function(){$("div.fb-livechat").fadeIn()}, 8 * t.delay); if(!detectmob()){$(".ctrlq").on("click", function(e){e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({bottom: 0, opacity: 0}, 2 * t.delay, function(){$(this).hide("slow"), t.button.show()})) : t.button.fadeOut("medium", function(){t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)})})}});
    </script>
@endsection
