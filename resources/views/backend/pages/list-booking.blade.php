@extends("backend.master-backend")
@section("NoiDung")

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Danh sách đơn đặt phòng</h1>
<p class="mb-4"></p>

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
                        <th>Loại phòng</th>
                        <th>Giá</th>
                        <th>Từ ngày</th>
                        <th>Đến ngày</th>
                        <!-- <th>Edit | Delete</th> -->
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Tên khách hàng</th>
                        <th>Loại phòng</th>
                        <th>Giá</th>
                        <th>Từ ngày</th>
                        <th>Đến ngày</th>
                    </tr>
                </tfoot>
                <tbody>
                     @foreach($listbooking as $booking)
                    <tr>
                        <td>{{ $booking->idbooking }}</td>
                        <td>{{ $booking->fullname }}</td>
                        <td>{{ $booking->tenloaiphong }}</td>
                        <td>{{ $booking->gialoaiphong }}</td>
                        <td>{{ $booking->fromdate }}</td>
                        <td>{{ $booking->todate }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{$listbooking->links()}}
        </div>
    </div>
</div>

@endsection
