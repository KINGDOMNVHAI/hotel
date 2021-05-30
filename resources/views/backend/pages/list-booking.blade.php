@extends("backend.master-backend")
@section("NoiDung")

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Danh sách phòng</h1>
<p class="mb-4">Lấy dữ liệu từ database</p>

<a href="{{route('create-room')}}" class="btn btn-success pull-right">Tạo phòng mới</a><br><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách phòng</h6>
    </div>
    <div class="card-body" id="app">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <!-- <th>Edit | Delete</th> -->
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                    </tr>
                </tfoot>
                <tbody>
                     @foreach($listbooking as $booking)
                    <tr>
                        <td>{{ $booking->idbooking }}</td>
                        <td>{{ $booking->fullname }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->phone }}</td>
                        <!-- <td>{{ $booking->tenphong }}</td>
                        <td><img src="{{ asset('upload/rooms/deluxe/' . $room->thumbnailphong) }}" width="150px;"></td>
                        <td>{{ $room->noidung }}</td>
                        <td>
                            <a href="{{route('update', $room->maphong)}}" class="btn btn-primary">Edit</a> ||
                            <a href="{{route('delete', $room->maphong)}}" class="btn btn-danger">Delete</a>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{$listbooking->links()}}
        </div>
    </div>
</div>

@endsection