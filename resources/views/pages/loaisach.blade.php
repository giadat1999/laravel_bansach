@extends('master')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="/">Trang chủ</a>
        <span class="breadcrumb-item active">Sản phẩm theo loại</span>
    </div>
</div>
@endsection
@section('main-content')
<section class="static about-sec">
    <div class="container">
        <div class="recent-book-sec">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>{{$loaisach->name}}</h2>
                </div>
                @foreach($sach as $loai_sach)
                <div class="col-md-3">
                    <div class="item">
                        <img src="/upload/sach/{{$loai_sach->image}}" alt="img">
                        <h3><a href="chitietsanpham/{{$loai_sach->id}}">{{$loai_sach->name}}</a></h3>
                        <h6><span class="price">{{number_format($loai_sach->unit_price).'đ'}}</span> / <a href="#">Mua ngay</a></h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
