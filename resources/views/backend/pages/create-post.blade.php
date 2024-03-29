@extends("backend.master-backend")
@section("NoiDung")

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tạo phòng mới</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tạo phòng mới</h6>
    </div>
    <div class="card-body">
        <h2>Tạo phòng mới</h2>
        <form class="form-horizontal" action="{{route('create-room')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- {{ csrf_field() }} -->
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Tên phòng</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="size">kichthuoc</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="size" placeholder="Enter size" name="size">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="price">gia</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="present">Mô tả:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="present" name="present" rows="10" cols="30"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="content">Nội dung:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="content" name="content" rows="10" cols="50"></textarea>
                </div>
            </div>
            <input type="file" name="thumbnail" id="thumbnail">
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary btn-icon-split" style="padding:10px;" value="Insert">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
