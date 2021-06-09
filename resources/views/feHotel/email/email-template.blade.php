<!doctype html>
<html lang="en">
  <head>
    <title>SUNLINE CẢM ƠN BẠN ĐÃ ĐẶT PHÒNG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 m-auto">
                <h3> CẢM ƠN BẠN ĐÃ ĐẶT PHÒNG TẠI SUNLINE </h3>
                <p> Xin hãy lưu lại thông tin đặt phòng của bạn:</p>

                <br/>
                <p>Tên phòng: {{$tenphong}}</p>
                <p>Giá phòng: {{$gialoaiphong}}</p>
                <p>Ngày đến: {{$fromdate}}</p>
                <p>Ngày đi: {{$todate}}</p>
                <br/>
                <br/>

                <p> Sau ngày {{$todate}}, nếu bạn không nhận phòng, chúng tôi sẽ hủy đơn hàng của bạn. </p>
                <p> Xin cảm ơn! </p>
            </div>
        </div>
    </div>
  </body>
</html>
