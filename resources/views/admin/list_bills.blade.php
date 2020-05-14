@extends('admin.master')
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection
@section('header')
    Danh sách hóa đơn
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">Hóa đơn</li>
@endsection
@section('main-content')
    {{--    Bang liet ke cac san pham--}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tất cả hóa đơn</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">@if(Session::has('thongbao')){{Session::get('thongbao')}}@endif</div>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Khách hàng</th>
                    <th>Ngày đặt</th>
                    <th>Tổng cộng</th>
                    <th>Thanh toán</th>
                    <th>Ghi chú</th>
                    <th>Tình trạng</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bills as $bills)
                    <tr>
                        <td>{{$bills->bill->name}}</td>
                        <td>{{$bills->date_order}}</td>
                        <td>{{number_format($bills->total)}}</td>
                        <td>{{$bills->payment}}</td>
                        <td>{{$bills->note}}</td>
                        <td>
                            @if($bills->tinhtrang == '0')
                              {{'Hủy'}}
                            @else @if($bills->tinhtrang == '1')
                              {{'Đang giao'}}
                            @else @if($bills->tinhtrang == '2')
                              {{'Đang chờ lấy hàng'}}
                              @else @if($bills->tinhtrang == '3')
                              {{'Đã giao'}}
                            @endif
                            @endif
                            @endif
                            @endif
                        </td>
                        <td>
                            <a href="admin/bill/edit/{{$bills->id}}" class="btn btn-primary">Sửa</a>
                            <a href="admin/bill/detail/{{$bills->id}}" class="btn btn-info">Chi tiết</a>
                            <a href="admin/bill/delete/{{$bills->id}}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
@section('script')
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function () {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection