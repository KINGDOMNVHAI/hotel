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
                    <h4>ĐƠN ĐẶT PHÒNG CỦA BẠN</h4>
                    <p class="section-subtitle">Xin bạn vui lòng kiểm tra lại ở bước cuôi của đơn đặt phòng trước khi đặt!</p>
                </div>

                <form action="{{route('booking-final-fe')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="gialoaiphong" value="{{$viewDetailRoom->gialoaiphong}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tên người đặt</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Họ và tên của bạn" value="{{session('fullname')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{session('email')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" name="phone" placeholder="Số điện thoại" value="0833999693">
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Ngày đến / ngày về
                                    <a href="#" title="Check-In / Check-Out" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                </label>
                                <input type="hidden" id="bookingdate" value="{{session('bookingdate')}}">
                                <input type="hidden" id="fromdate" value="{{session('fromdate')}}">
                                <input type="hidden" id="todate" value="{{session('todate')}}">
                                <input type="text" class="datepicker form-control" id="bdate" name="bookingdate" readonly="readonly" value="{{session('bookingdate')}}">
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
                        </div> -->
                        <div class="col-md-12">
                            <h4>Phòng bạn đã chọn</h4>
                        </div>

                        
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
                        <input type="hidden" name="tenphong" value="{{$viewDetailRoom->tenphong}}">
                        <input type="hidden" name="urlloaiphong" value="{{$viewDetailRoom->urlloaiphong}}">
                        <input type="hidden" name="maphong" value="{{$viewDetailRoom->maphong}}">
                        <div class="col-md-12">
                            <p><b>Ngày đến:</b> {{session('fromdate')}}</p>
                            <p><b>Ngày trả:</b> {{session('todate')}}</p>
                            <p><b>Tổng tiền:</b> {{session('total')}}</p>
                            <p><b><i class="fa fa-info-circle"></i>
                                Lưu ý: Tiền phòng của bạn sẽ được trả vào từng tháng. Sau mỗi tháng, bạn chỉ cần đóng theo phương thức thanh toán: Tiền mặt hoặc chuyển khoản, thì bạn sẽ được tiếp tục mướn phòng theo thời điểm ban đầu bạn đã chọn. 
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

<script>
var date = document.getElementById("bookingdate").value;
var from = document.getElementById("fromdate").value;
var to = document.getElementById("todate").value;
console.log(date);
console.log(from);
console.log(to);

function setDateRangePicker() {
    ('.datepicker').daterangepicker({
      locale: {
        format: 'DD-MM-YYYY',
      },
      "startDate": from,
      "endDate": to,
    }, function(start, end, label) {});
}
setDateRangePicker();
</script>

@endsection
