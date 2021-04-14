@extends('feHotel.master')

@section('NoiDung')

<div class="page-title gradient-overlay op6" style="background: url({{asset('feHotel/images/breadcrumb.jpg')}}); background-repeat: no-repeat;
    background-size: cover;">
    <div class="container">
        <div class="inner">
            <h1>ROOMS</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>Rooms</li>
            </ol>
        </div>
    </div>
</div>

<main class="rooms-list-view">
    <div class="container">

        @foreach($listroom as $room)
        <div class="room-list-item">
            <div class="row">
                <div class="col-lg-4">
                    <figure class="gradient-overlay-hover link-icon">
                        <a href="room.html"><img src="{{asset('upload/rooms/single/single1.jpg')}}" class="img-fluid" alt="Image"></a>
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="room-info">
                        <h3 class="room-title">
                            <a href="room.html">{{$room->tenphong}}</a>
                        </h3>
                        <span class="room-rates">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                        </span>
                        <p>{{$room->mota}}</p>
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
                        <span class="price">{{$room->giaphong}} VND / night</span>
                        <a href="{{route('room', $room->maphong)}}" class="btn btn-sm">XEM CHI TIẾT</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <nav class="pagination">
            <ul>
                <li class="prev-pagination">
                    <a href="#">
                        &nbsp;<i class="fa fa-angle-left"></i>
                        Previous &nbsp;</a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>...</li>
                <li>
                    <a href="#">7</a>
                </li>
                <li>
                    <a href="#">8</a>
                </li>
                <li>
                    <a href="#">9</a>
                </li>
                <li class="next_pagination">
                    <a href="#">
                        &nbsp; Next
                        <i class="fa fa-angle-right"></i>
                        &nbsp;
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</main>

@endsection
