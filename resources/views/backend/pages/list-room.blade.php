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
                        <th>Tên user</th>
                        <th>Hình ảnh</th>
                        <th>Mô tả</th>
                        <th>Sửa | Xóa</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Tên user</th>
                        <th>Hình ảnh</th>
                        <th>Mô tả</th>
                        <th>Sửa | Xóa</th>
                    </tr>
                </tfoot>
                <tbody>
                     @foreach($listroom as $room)
                    <tr>
                        <td>{{ $room->maphong }}</td>
                        <td>{{ $room->tenphong }}</td>
                        <td><img src="{{ asset('upload/rooms/deluxe/' . $room->thumbnailphong) }}" width="150px;"></td>
                        <td>{{ $room->noidung }}</td>
                        <td>
                            <a href="{{route('update', $room->maphong)}}" class="btn btn-primary">Edit</a> ||
                            <a href="{{route('delete', $room->maphong)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $listroom->links() !!}
        </div>
    </div>
</div>

@endsection
