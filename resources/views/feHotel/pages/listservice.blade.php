@extends('feHotel.master')

@section('NoiDung')

<div class="page-title gradient-overlay op6" style="background: url({{asset('feHotel/images/breadcrumb.jpg')}}); background-repeat: no-repeat;
    background-size: cover;">
    <div class="container">
        <div class="inner">
            <h1>DANH SÁCH DỊCH VỤ</h1>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Trang chủ</a></li>
                <li>Danh sách dịch vụ</li>
            </ol>
        </div>
    </div>
</div>

<main class="rooms-list-view">
    <div class="container">
        @foreach($listservice as $service)
        <div class="room-list-item">
            <div class="row">
                <div class="col-lg-4">
                    <figure class="gradient-overlay-hover link-icon">
                        <a href="{{route('service-fe', $service->madichvu)}}"><img src="{{asset('upload/rooms/single/single1.jpg')}}" class="img-fluid" alt="Image"></a>
                    </figure>
                </div>
                <div class="col-lg-8">
                    <div class="room-info">
                        <h3 class="room-title">
                            <a href="{{route('service-fe', $service->madichvu)}}">{{$service->tendichvu}}</a>
                        </h3>
                        <p>{{$service->motadichvu}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>

@endsection
