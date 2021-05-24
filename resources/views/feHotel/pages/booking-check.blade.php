@extends('feHotel.master')

@section('NoiDung')

<div class="page-title gradient-overlay op6" style="background: url({{asset('feHotel/images/breadcrumb.jpg')}}); background-repeat: no-repeat;
    background-size: cover;">
    <div class="container">
        <div class="inner">
            <h1>ĐẶT PHÒNG</h1>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Trang chủ</a></li>
                <li>Danh sách phòng</li>
            </ol>
        </div>
    </div>
</div>

<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="section-title">
                    <h4>ĐƠN HÀNG CỦA BẠN</h4>
                    <p class="section-subtitle">Xin hãy kiểm tra lại đơn hàng trước khi đặt!</p>
                </div>

                <form action="{{route('booking-final-fe')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tên người đặt</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Your Name" value="{{session('fullname')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Your Email Address" value="{{session('email')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" name="phone" placeholder="Your Phone Number" value="0833999693">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ngày đến / ngày về
                                    <a href="#" title="Check-In / Check-Out" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input type="text" class="datepicker form-control" name="bookingdate" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Loại phòng</label>
                                <select name="nameroom" class="form-control" title="Select Room Type" data-header="Select Room Type">
                                    @if(session('nameroom') == 'giuong-don')
                                    <option value="giuong-don" data-subtext="<span class='badge badge-info'>200.000 / đêm</span>" selected>Phòng đơn</option>
                                    <option value="giuong-doi" data-subtext="<span class='badge badge-info'>300.000 / đêm</span>">Phòng đôi</option>
                                    <option value="2-giuong-don" data-subtext="<span class='badge badge-info'>400.000 / đêm</span>">Phòng 2 giường đơn</option>
                                    <option value="2-giuong-doi" data-subtext="<span class='badge badge-info'>500.000 / đêm</span>">Phòng 2 giường đôi</option>
                                    @elseif(session('nameroom') == 'giuong-doi')
                                    <option value="giuong-don" data-subtext="<span class='badge badge-info'>200.000 / đêm</span>">Phòng đơn</option>
                                    <option value="giuong-doi" data-subtext="<span class='badge badge-info'>300.000 / đêm</span>" selected>Phòng đôi</option>
                                    <option value="2-giuong-don" data-subtext="<span class='badge badge-info'>400.000 / đêm</span>">Phòng 2 giường đơn</option>
                                    <option value="2-giuong-doi" data-subtext="<span class='badge badge-info'>500.000 / đêm</span>">Phòng 2 giường đôi</option>
                                    @elseif(session('nameroom') == '2-giuong-don')
                                    <option value="giuong-don" data-subtext="<span class='badge badge-info'>200.000 / đêm</span>">Phòng đơn</option>
                                    <option value="giuong-doi" data-subtext="<span class='badge badge-info'>300.000 / đêm</span>">Phòng đôi</option>
                                    <option value="2-giuong-don" data-subtext="<span class='badge badge-info'>400.000 / đêm</span>" selected>Phòng 2 giường đơn</option>
                                    <option value="2-giuong-doi" data-subtext="<span class='badge badge-info'>500.000 / đêm</span>">Phòng 2 giường đôi</option>
                                    @elseif(session('nameroom') == '2-giuong-doi')
                                    <option value="giuong-don" data-subtext="<span class='badge badge-info'>200.000 / đêm</span>">Phòng đơn</option>
                                    <option value="giuong-doi" data-subtext="<span class='badge badge-info'>300.000 / đêm</span>">Phòng đôi</option>
                                    <option value="2-giuong-don" data-subtext="<span class='badge badge-info'>400.000 / đêm</span>">Phòng 2 giường đơn</option>
                                    <option value="2-giuong-doi" data-subtext="<span class='badge badge-info'>500.000 / đêm</span>" selected>Phòng 2 giường đôi</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Số lượng phòng</label>
                                <select name="numbernight" class="form-control">

                                    @if(session('numbernight') == 1)
                                    <option value="1" selected>1 night</option>
                                    <option value="2">2 nights</option>
                                    <option value="3">3 nights</option>
                                    <option value="4">4 nights</option>
                                    @elseif(session('numbernight') == 2)
                                    <option value="1">1 night</option>
                                    <option value="2" selected>2 nights</option>
                                    <option value="3">3 nights</option>
                                    <option value="4">4 nights</option>
                                    @elseif(session('numbernight') == 3)
                                    <option value="1">1 night</option>
                                    <option value="2">2 nights</option>
                                    <option value="3" selected>3 nights</option>
                                    <option value="4">4 nights</option>
                                    @elseif(session('numbernight') == 4)
                                    <option value="1">1 night</option>
                                    <option value="2">2 nights</option>
                                    <option value="3">3 nights</option>
                                    <option value="4" selected>4 nights</option>
                                    @endif

                                </select>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Guests
                                    <a href="#" title="Guests" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please Select Adults / Children">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <div class="panel-dropdown">
                                    <div class="form-control guestspicker">Guests
                                        <span class="gueststotal"></span>
                                    </div>
                                    <div class="panel-dropdown-content">
                                        <div class="guests-buttons">
                                            <label>Adults
                                                <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="18+ years" data-original-title="Adults">
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
                                            <label>Children
                                                <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Under 18 years" data-original-title="Children">
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
                        </div> -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Your Comments</label>
                                <textarea class="form-control" name="booking-comments" placeholder="Your Comments..."></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p><b>Tổng tiền:</b> {{session('total')}}</p>
                            <p><b>
                            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyLjAwMSA1MTIuMDAxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMDAxIDUxMi4wMDE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNTAzLjgzOSwzOTUuMzc5bC0xOTUuNy0zMzguOTYyQzI5Ny4yNTcsMzcuNTY5LDI3Ny43NjYsMjYuMzE1LDI1NiwyNi4zMTVjLTIxLjc2NSwwLTQxLjI1NywxMS4yNTQtNTIuMTM5LDMwLjEwMg0KCQkJTDguMTYyLDM5NS4zNzhjLTEwLjg4MywxOC44NS0xMC44ODMsNDEuMzU2LDAsNjAuMjA1YzEwLjg4MywxOC44NDksMzAuMzczLDMwLjEwMiw1Mi4xMzksMzAuMTAyaDM5MS4zOTgNCgkJCWMyMS43NjUsMCw0MS4yNTYtMTEuMjU0LDUyLjE0LTMwLjEwMUM1MTQuNzIyLDQzNi43MzQsNTE0LjcyMiw0MTQuMjI4LDUwMy44MzksMzk1LjM3OXogTTQ3Ny44NjEsNDQwLjU4Ng0KCQkJYy01LjQ2MSw5LjQ1OC0xNS4yNDEsMTUuMTA0LTI2LjE2MiwxNS4xMDRINjAuMzAxYy0xMC45MjIsMC0yMC43MDItNS42NDYtMjYuMTYyLTE1LjEwNGMtNS40Ni05LjQ1OC01LjQ2LTIwLjc1LDAtMzAuMjA4DQoJCQlMMjI5Ljg0LDcxLjQxNmM1LjQ2LTkuNDU4LDE1LjI0LTE1LjEwNCwyNi4xNjEtMTUuMTA0YzEwLjkyLDAsMjAuNzAxLDUuNjQ2LDI2LjE2MSwxNS4xMDRsMTk1LjcsMzM4Ljk2Mg0KCQkJQzQ4My4zMjEsNDE5LjgzNiw0ODMuMzIxLDQzMS4xMjgsNDc3Ljg2MSw0NDAuNTg2eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cmVjdCB4PSIyNDEuMDAxIiB5PSIxNzYuMDEiIHdpZHRoPSIyOS45OTYiIGhlaWdodD0iMTQ5Ljk4MiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjU2LDM1NS45OWMtMTEuMDI3LDAtMTkuOTk4LDguOTcxLTE5Ljk5OCwxOS45OThzOC45NzEsMTkuOTk4LDE5Ljk5OCwxOS45OThjMTEuMDI2LDAsMTkuOTk4LTguOTcxLDE5Ljk5OC0xOS45OTgNCgkJCVMyNjcuMDI3LDM1NS45OSwyNTYsMzU1Ljk5eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" width="20px" height="20px"/>
                                Lưu ý: Nếu bạn muốn đăng ký phòng mới, bạn phải tạo đơn hàng mới.
                            </b></p>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn mt50 float-right" value="Đặt phòng ngay!">
                        </div>
                    </div>
                </form>
            </div>

            <!-- <div class="col-lg-3 col-12">
                <div class="sidebar">
                    <div class="contact-details">
                        <div class="section-title">
                            <h4>OFFERS</h4>
                            <p class="section-subtitle">CHECK OUT OUR SPECIAL OFFERS</p>
                        </div>
                        <div class="offer-item sm mb50">
                            <figure class="gradient-overlay-hover link-icon">
                                <a href="offer.html">
                                    <img src="images/offers/offer1.jpg" class="img-fluid" alt="Image">
                                </a>
                            </figure>
                            <div class="ribbon">
                                <span>HOT OFFER</span>
                            </div>
                            <div class="offer-price uppercase">
                                5 nights for €1,875
                            </div>
                            <h3 class="offer-title">
                                <a href="offer.html">All-Inclusive Honeymoon Package</a>
                            </h3>
                        </div>

                        <div class="offer-item sm mb50">
                            <figure class="gradient-overlay-hover link">
                                <a href="offer.html">
                                    <img src="images/offers/offer2.jpg" class="img-fluid" alt="Image">
                                </a>
                            </figure>
                            <div class="ribbon">
                                <span>HOT OFFER</span>
                            </div>
                            <div class="offer-price">
                                8 nights for €2,000
                            </div>
                            <h3 class="offer-title">
                                <a href="offer.html">All-Inclusive Family Package</a>
                            </h3>
                        </div>

                        <div class="offer-item sm mb50">
                            <figure class="gradient-overlay-hover link">
                                <a href="offer.html">
                                    <img src="images/offers/offer3.jpg" class="img-fluid" alt="Image">
                                </a>
                            </figure>
                            <div class="ribbon">
                                <span>HOT OFFER</span>
                            </div>
                            <div class="offer-price">
                                3 nights for €268
                            </div>
                            <h3 class="offer-title">
                                <a href="offer.html">Fly, Stay and Save Over 30%</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</main>

@endsection
