@extends("backend.master-backend")
@section("NoiDung")

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Danh sách phòng</h1>
<p class="mb-4">Lấy dữ liệu từ database</p>

<!-- Content Row -->
<div class="row">

    <!-- Grow In Utility -->
    <div class="col-lg-6">
        <div class="card position-relative">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tìm kiếm</h6>
            </div>
            <div class="card-body">
                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                    action="{{route('list-room')}}" method="GET">

                    <div class="dropdown mb-4 show">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <input type="submit" class="btn btn-primary" value="search">
                            </div>
                        </div>
                        <br>
                        <input type="checkbox" id="phongcogac" name="phongcogac" value="true"> Phòng có gác &nbsp; &nbsp;
                        <input type="checkbox" id="phongkhongcogac" name="phongkhongcogac" value="true"> Phòng không có gác
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<a href="{{route('create-room')}}" class="btn btn-success pull-right" style="margin-top:5px;">Tạo phòng mới</a><br><br>

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
                        <th>Tên phòng</th>
                        <th>Hình ảnh</th>
                        <th>Gác xếp</th>
                        <th>Sửa | Xóa</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Tên phòng</th>
                        <th>Hình ảnh</th>
                        <th>Gác xếp</th>
                        <th>Sửa | Xóa</th>
                    </tr>
                </tfoot>
                <tbody>
                     @foreach($listroom as $room)
                    <tr>
                        <td>{{ $room->maphong }}</td>
                        <td>{{ $room->tenphong }}</td>
                        <td><img src="{{ asset('upload/rooms/deluxe/' . $room->thumbnailphong) }}" width="150px;"></td>
                        @if ($room->gacxep)
                        <td>Phòng có gác</td>
                        @else
                        <td>Phòng không có gác</td>
                        @endif
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
