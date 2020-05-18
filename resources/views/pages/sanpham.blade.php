@extends('master')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="index.html">Home</a>
        <span class="breadcrumb-item active">Sản phẩm</span>
    </div>
</div>
@endsection
@section('main-content')
<section class="static about-sec">
    <div class="container">
        <h2>Sản phẩm mới</h2>
        <div class="recomended-sec">
            <div class="row">
                @foreach($sach as $sach)
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="/upload/sach/{{$sach->image}}" alt="img">
                        <h3>{{$sach->name}}</h3>
                        <h6><span class="price">{{$sach->unit_price}}</span> / <a href="#">Mua ngay</a></h6>
                        <div class="hover">
                            <a href="product-single.html">
                        <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <h2>Sách ngoại ngữ</h2>
        <div class="recent-book-sec">
            <div class="row">
                @foreach($sachnn as $nn)
                <div class="col-md-3">
                    <div class="item">
                        <img src="/upload/sach/{{$nn->image}}" alt="img">
                        <h3><a href="#">{{$nn->name}}</a></h3>
                        <h6><span class="price">{{$nn->unit_price}}</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
               @endforeach
            </div>
            <div class="btn-sec">
                <a href="products.html" class="btn gray-btn">load More books</a>
            </div>
        </div>
    </div>
</section>
@endsection