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
                    <h4 style="font-size:30px;">ĐƠN HÀNG CỦA BẠN ĐÃ HOÀN TẤT</h4>
                    <p class="section-subtitle">Rất cảm ơn bạn đã đặt phòng tại SUNLINE! Xin vui lòng kiểm tra email của bạn để nhận thông tin từ chúng tôi.</p>
                </div>
            </div>

            <div class="col-lg-3 col-12"></div>
        </div>
    </div>
</main>

@endsection
