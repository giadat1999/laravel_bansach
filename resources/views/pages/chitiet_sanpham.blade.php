@extends('master')
@section('breadcrumb')
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="/">Trang chủ</a>
        <span class="breadcrumb-item active">Chi tiết sản phẩm</span>
    </div>
</div>
@endsection
@section('main-content')
<section class="product-sec">
    <div class="container">
        <h1>{{$chitiet->name}}</h1>
        <div class="row">
            <div class="col-md-6 slider-sec">
                <!-- main slider carousel -->
                <div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="/upload/sach/{{$chitiet->image}}" class="img-fluid" width="2500px">
                        </div>
                    </div>
                    <!-- main slider carousel nav controls -->
                </div>
                <!--/main slider carousel-->
            </div>
            <div class="col-md-6 slider-content">
                <p><b>{{$chitiet->description}}</b></p>
              
                <ul>
                    <li>
                        <span class="name">Giá</span><span class="clm">:</span>
                        <span class="price">{{number_format($chitiet->unit_price).'đ'}}</span>
                    </li>
                    <li>
                        <span class="name">Giá khuyến mãi</span><span class="clm">:</span>
                        <span class="price final">@if($chitiet->promotion_price) {{number_format($chitiet->promotion_price).'đ'}} @else {{number_format($chitiet->unit_price).'VNĐ'}} @endif</span>
                    </li>
                    <li><span class="save-cost">Tiết kiệm {{number_format($tietkiem).'đ'}}</span></li>
                </ul>
                <div class="btn-sec">
                    <button class="btn btn-warning">Thêm giỏ hàng</button>
                    <button class="btn btn-dark">Mua ngay</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="related-books">
    <div class="container">
        <h2>Sản phẩm liên quan</h2>
        <div class="recomended-sec">
            <div class="row">
               @foreach($splq as $lq)
               <div class="col-lg-3 col-md-6">
                <div class="item">
                    <img src="/upload/sach/{{$lq->image}}" alt="img">
                    <h3>{{$lq->name}}</h3>
                    <h6><span class="price">{{number_format($lq->unit_price)}} đ</span>
                    @if($lq->spmoi == 1) <span class="sale"> Mới </span> @endif
                    <div class="hover">
                        <a href="chitietsanpham/{{$lq->id}}"><span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
               @endforeach
        </div>
    </div>
</section>
@endsection