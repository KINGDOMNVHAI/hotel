@extends('feHotel.master')

@section('NoiDung')

<div class="page-title gradient-overlay op6" style="background: url({{asset('feHotel/images/breadcrumb.jpg')}}); background-repeat: no-repeat;
    background-size: cover;">
    <div class="container">
        <div class="inner">
            <h1>{{$detailroom->tenphong}}</h1>
            <div class="room-details-price">
                {{$detailroom->gialoaiphong}} VND / NIGHT
            </div>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a href="index.html">Rooms</a>
                </li>
                <li>{{$detailroom->tenphong}}</li>
            </ol>
        </div>
    </div>
</div>

<main class="room">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="room-slider">
                    <div id="room-main-image" class="owl-carousel image-gallery">
                        <div class="item">
                            <figure class="gradient-overlay-hover image-icon">
                                <a href="{{asset('upload/rooms/single/single1.jpg')}}">
                                    <img class="img-fluid" src="{{asset('upload/rooms/single/single1.jpg')}}" alt="Image">
                                </a>
                            </figure>
                        </div>

                        <div class="item">
                            <figure class="gradient-overlay-hover image-icon">
                                <a href="{{asset('upload/rooms/single/single2.jpg')}}">
                                    <img class="img-fluid" src="{{asset('upload/rooms/single/single2.jpg')}}" alt="Image">
                                </a>
                            </figure>
                        </div>

                        <div class="item">
                            <figure class="gradient-overlay-hover image-icon">
                                <a href="{{asset('upload/rooms/single/single3.jpg')}}">
                                    <img class="img-fluid" src="{{asset('upload/rooms/single/single3.jpg')}}" alt="Image">
                                </a>
                            </figure>
                        </div>

                        <div class="item">
                            <figure class="gradient-overlay-hover image-icon">
                                <a href="{{asset('images/rooms/single/single4.jpg')}}.jpg">
                                    <img class="img-fluid" src="{{asset('images/rooms/single/single4.jpg')}}.jpg" alt="Image">
                                </a>
                            </figure>
                        </div>

                        <div class="item">
                            <figure class="gradient-overlay-hover image-icon">
                                <a href="{{asset('upload/rooms/single/single5.jpg')}}">
                                    <img class="img-fluid" src="{{asset('upload/rooms/single/single5.jpg')}}" alt="Image">
                                </a>
                            </figure>
                        </div>

                        <div class="item">
                            <figure class="gradient-overlay-hover image-icon">
                                <a href="{{asset('upload/rooms/single/single6.jpg')}}">
                                    <img class="img-fluid" src="{{asset('upload/rooms/single/single6.jpg')}}" alt="Image">
                                </a>
                            </figure>
                        </div>

                        <div class="item">
                            <figure class="gradient-overlay-hover image-icon">
                                <a href="{{asset('upload/rooms/single/single7.jpg')}}">
                                    <img class="img-fluid" src="{{asset('upload/rooms/single/single7.jpg')}}" alt="Image">
                                </a>
                            </figure>
                        </div>

                        <div class="item">
                            <figure class="gradient-overlay-hover image-icon">
                                <a href="{{asset('upload/rooms/single/single8.jpg')}}">
                                    <img class="img-fluid" src="{{asset('upload/rooms/single/single8.jpg')}}" alt="Image">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div id="room-thumbs" class="room-thumbs owl-carousel">
                        <div class="item"><img class="img-fluid" src="{{asset('upload/rooms/single/single1.jpg')}}" alt="Image"></div>

                        <div class="item"><img class="img-fluid" src="{{asset('upload/rooms/single/single2.jpg')}}" alt="Image"></div>

                        <div class="item"><img class="img-fluid" src="{{asset('upload/rooms/single/single3.jpg')}}" alt="Image"></div>

                        <div class="item"><img class="img-fluid" src="{{asset('upload/rooms/single/single4.jpg')}}" alt="Image"></div>

                        <div class="item"><img class="img-fluid" src="{{asset('upload/rooms/single/single5.jpg')}}" alt="Image"></div>

                        <div class="item"><img class="img-fluid" src="{{asset('upload/rooms/single/single6.jpg')}}" alt="Image"></div>

                        <div class="item"><img class="img-fluid" src="{{asset('upload/rooms/single/single7.jpg')}}" alt="Image"></div>

                        <div class="item"><img class="img-fluid" src="{{asset('upload/rooms/single/single8.jpg')}}" alt="Image"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 offset-sm-8">
                        <form id="booking-form" action="{{route('booking-room-fe')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="maphong" value="{{$detailroom->maphong}}">
                            <input type="submit" class="btn mt50 float-right" value="ĐẶT PHÒNG">
                        </form>
                    </div>
                </div>
                <p>
                    {{$detailroom->noidung}}
                </p>
                <div class="section-title sm">
                    <h4>Dịch vụ phòng</h4>
                    <p class="section-subtitle">Phòng có gác bao gồm:</p>
                </div>
                <div class="room-services-list">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-check"></i>Có gác
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Phòng bếp
                                </li>
                                <li><i class="fa fa-check"></i>Phòng tắm</li>
                                <li><i class="fa fa-check"></i>Free Internet</li>
                                <li>
                                    <i class="fa fa-check"></i>Phương thức thanh toán: Tiền mặt hoặc qua ngân hàng
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-check"></i>Kích thước phòng:
                                    {{$detailroom->kichthuoc}}
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Mô tả:
                                    {{$detailroom->mota}}
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="col-sm-4">
                            <ul class="list-unstyled">
                                <li class="no">
                                    <i class="fa fa-times"></i>Flat Screen Tv
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Full Ac
                                </li>
                                <li class="no">
                                    <i class="fa fa-times"></i>Beach View
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>Room Service
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="similar-rooms">
                    <div class="section-title sm">
                        <h4>Gợi ý phòng</h4>
                        <p class="section-subtitle">Dưới đây là những phòng gợi ý của bạn</p>
                    </div>
                    <div class="row">
                        @foreach($randomRoom as $room)
                            <div class="col-lg-4">
                                <div class="room-grid-item">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href="{{route('room-fe', $room->maphong)}}">
                                            <img src="{{asset('upload/rooms/deluxe/' . $room->thumbnailphong)}}" class="img-fluid" alt="Image">
                                        </a>
                                        <div class="room-services">
                                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                            <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                                        </div>
                                        <div class="room-price">{{$room->gialoaiphong}} VND / night</div>
                                    </figure>
                                    <div class="room-info">
                                        <h2 class="room-title">
                                            <a href="{{route('room-fe', $room->maphong)}}">{{$room->tenphong}}</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-12">
                <div class="sidebar">
                    <aside class="widget noborder">
                        <div class="vertical-booking-form">
                            <div id="booking-notification" class="notification"></div>
                            <h3 class="form-title">ĐẶT PHÒNG NGAY!</h3>
                            <div class="inner">
                                @if (session('messageWarning'))
                                    <div class="alert alert-success">
                                        {{ session('messageWarning') }}
                                    </div>
                                @endif
                                <form action="{{route('booking-room-fe')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="maphong" value="{{$detailroom->maphong}}">
                                    <input type="submit" class="btn mt50 float-right" value="ĐẶT PHÒNG">
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
