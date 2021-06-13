@extends("backend.master-backend")
@section("NoiDung")

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Room</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Room</h6>
    </div>
    <div class="card-body">
        <h2>Edit Room</h2>
        <form class="form-horizontal" action="{{route('edit', $room->maphong)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$room->tenphong}}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="content">Content:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="content" name="content" rows="10" cols="50">{{$room->noidung}}</textarea>
                </div>
            </div>
            <input type="hidden" name="thumbnailphong" id="thumbnailphong" value="{{$room->thumbnailphong}}">
            <input type="file" name="thumbnail" id="thumbnail">
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary btn-icon-split" style="padding:10px;" value="Update">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
