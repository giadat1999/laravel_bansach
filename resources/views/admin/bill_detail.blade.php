@extends('admin.master')
@section('header')
   Chi tiết hóa đơn
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="admin/bill/detail/{{$bills_detail->id}}">Chi tiết</a></li>
@endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Chi tiết hóa đơn</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Hóa đơn khách hàng</label>
                            <input type="text" class="form-control" value="{{$bills_detail->bill->bill->name}}" readonly>
                        </div>
                        <div class="form-group">    
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Tên sách</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng cộng</th>
                                </tr>
                                </thead>
                                <tbody>  
                                    @foreach($bills as $bills)   
                                     @if($bills->id == $bills_detail->id_bill)                                                                   
                                    <tr>
                                        <td>{{$bills_detail->sach->name}}</td>
                                        <td>{{$bills_detail->sach->unit_price}}</td>
                                        <td>{{$bills_detail->quantity}}</td>
                                        <td>{{$bills_detail->unit_price}}</td>
                                    </tr>  
                                     @endif
                                    @endforeach 

                                </tbody>
                            </table>
                        </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <a href="admin/bill/list" class="btn btn-secondary">Quay lại</a>
                    </div>
            </div>
        </div>
    </div>
@endsection

