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
            @if($viewDetailRoom != null)
            <div class="col-lg-9 col-12">
                <div class="section-title">
                    <h4>ĐẶT PHÒNG</h4>
                    <p class="section-subtitle">Hãy đặt phòng ngay hôm nay!</p>
                </div>
                <p class="mb30">Phòng bạn đã chọn</p>
                <div class="row">
                    <div class="col-lg-4">
                        <figure class="gradient-overlay-hover link-icon">
                            <a href="{{route('room-fe', $viewDetailRoom->maphong)}}"><img src="{{asset('upload/rooms/single/single1.jpg')}}" class="img-fluid" alt="Image"></a>
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-info">
                            <h3 class="room-title">
                                <a href="{{route('room-fe', $viewDetailRoom->maphong)}}">{{$viewDetailRoom->tenphong}}</a>
                            </h3>
                            <p>{{$viewDetailRoom->mota}}</p>
                            <div class="room-services">
                                <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                                <span>Beds: 1 King</span>
                                <span>Max Guests: 2</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="room-price">
                            <span class="price">{{$viewDetailRoom->gialoaiphong}} VND / night</span>
                            <a href="{{route('room-fe', $viewDetailRoom->maphong)}}" class="btn btn-sm">XEM CHI TIẾT</a>
                        </div>
                    </div>
                </div>
                <p class="mb30">Hãy điền đầy đủ thông tin của bạn</p>
                <form action="{{route('booking-check-fe')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="tenphong" value="{{$viewDetailRoom->tenphong}}">
                    <input type="hidden" name="maphong" value="{{$viewDetailRoom->maphong}}">
                    <input type="hidden" name="urlloaiphong" value="{{$viewDetailRoom->urlloaiphong}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tên người đặt</label>
                                @if($user != null)
                                <input type="text" class="form-control" name="fullname" placeholder="Tên của bạn" value="{{$user->username}}">
                                @else
                                <input type="text" class="form-control" name="fullname" placeholder="Tên của bạn" value="">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                @if($user != null)
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
                                @else
                                <input type="email" class="form-control" name="email" placeholder="Email" value="">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                @if($user != null)
                                <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" value="{{$user->phone}}">
                                @else
                                <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" value="">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CHECK-IN/OUT
                                    <a href="#" title="Check-In / Check-Out" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input type="text" class="datepicker form-control" name="bookingdate" readonly="readonly">
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Loại phòng</label>
                                <select name="nameroom" class="form-control" title="Select Room Type" data-header="Select Room Type">
                                    <option value="giuong-don" data-subtext="<span class='badge badge-info'>200.000 / đêm</span>">Phòng đơn</option>
                                    <option value="giuong-doi" data-subtext="<span class='badge badge-info'>300.000 / đêm</span>">Phòng đôi</option>
                                    <option value="2-giuong-don" data-subtext="<span class='badge badge-info'>400.000 / đêm</span>">Phòng 2 giường đơn</option>
                                    <option value="2-giuong-doi" data-subtext="<span class='badge badge-info'>500.000 / đêm</span>">Phòng 2 giường đôi</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Số lượng phòng</label>
                                <select name="numbernight" class="form-control">
                                    <option value="1">1 night</option>
                                    <option value="2">2 nights</option>
                                    <option value="3">3 nights</option>
                                    <option value="4">4 nights</option>
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
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label>Bình luận</label>
                                <textarea class="form-control" name="booking-comments" placeholder="Bình luận của bạn..."></textarea>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <input type="submit" class="btn mt50 float-right" value="Đặt phòng ngay!">
                        </div>
                    </div>
                </form>
            </div>
            @else
            <div class="col-lg-9 col-12">
                <h4>Bạn chưa chọn phòng.</h4><br>
                <p><b>Hướng dẫn</b></p>
                <ul>
                    <li>Vui lòng tạo tài khoản
                    <li>Chọn phòng bạn muốn và bấm nút đặt phòng
                    <li>Bổ sung thêm thông tin cá nhân để đặt phòng và nhận email
                </ul>
                <p><b>Xin cảm ơn</b></p>
            </div>
            @endif

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
