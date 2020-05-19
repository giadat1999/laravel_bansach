@extends('master')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="/">Trang chủ</a>
        <span class="breadcrumb-item active">Giỏ hàng</span>
    </div>
</div>
@endsection
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <table class="table border">
                <thead>
                    <tr>
                        <th>Tên sách</th>
                        <th>Loại sách</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"> <img width="100px" src="upload/sach/5.jpg" alt=""> Tiếng Trung</td>
                        <td>Ngôn ngữ</td>
                        <td>200,000</td>
                        <td>2</td>
                        <td><button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                    </tr>
                    <tr>
                        <td scope="row"> <img width="100px" src="upload/sach/5.jpg" alt=""> Tiếng Trung</td>
                        <td>Ngôn ngữ</td>
                        <td>200,000</td>
                        <td>2</td>
                        <td><button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                    </tr>
                    <tr>
                        <td scope="row"> <img width="100px" src="upload/sach/5.jpg" alt=""> Tiếng Trung</td>
                        <td>Ngôn ngữ</td>
                        <td>200,000</td>
                        <td>2</td>
                        <td><button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="2"><b>Tổng tiền: </b></td>
                        <td colspan="3"><b class="text-danger">366,000 đ</b></td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <!-- Button trigger modal -->
                            <div class="text-center">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#modelId">
                                    Tiến hành thanh toán
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="modelId" tabindex="-1" role="dialog"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Đặt hàng</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-4 col-form-label">Họ tên: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập họ và tên">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="phone"
                                                    class="col-sm-4 col-form-label">Số điện thoại: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="address"
                                                    class="col-sm-4 col-form-label">Địa chỉ: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email"
                                                    class="col-sm-4 col-form-label">Email: </label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email">
                                                </div>
                                            </div>
                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <legend class="col-form-label col-sm-4 pt-0">Giới tính: </legend>
                                                    <div class="col-sm-8">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="gridRadios" id="gridRadios1" value="option1"
                                                                checked>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Nam
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="gridRadios" id="gridRadios2" value="option2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Nữ
                                                            </label>
                                                        </div>
                                                        <div class="form-check disabled">
                                                            <input class="form-check-input" type="radio"
                                                                name="gridRadios" id="gridRadios3" value="option3"
                                                                >
                                                            <label class="form-check-label" for="gridRadios3">
                                                                Khác
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <legend class="col-form-label col-sm-4 pt-0">Hình thức thanh toán: </legend>
                                                    <div class="col-sm-8">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="payment" id="cod" value="option1"
                                                                checked>
                                                            <label class="form-check-label" for="cod">
                                                                COD
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="payment" id="credit" value="option2">
                                                            <label class="form-check-label" for="credit">
                                                                Chuyển khoản
                                                            </label>
                                                        </div>
                                            </fieldset>
                                            
                                            <div class="form-group">
                                              <label for="">Ghi chú</label>
                                              <textarea class="form-control" name="" id="" rows="3"></textarea>
                                            </div>
                                            <div class="form-group text-center">
                                              <button type="submit" class="btn btn-success">Đặt hàng</button>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Hủy</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection