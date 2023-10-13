@extends('frontend.master')
@section('title', 'Tìm kiếm sản phẩm')
@section('main')
	<link rel="stylesheet" href="css/search.css">
	<div id="wrap-inner">
		<div class="products">
			<h3>Tìm kiếm với từ khóa: <span>{{ $keyword }}</span></h3>
			<div style="gap: 15px;" class="product-list row">
				@if($errors->any())
					<h4 class="text-danger">{{$errors->first()}}</h4>
				@endif
				@foreach($prod_search as $item)
				<div style="border-radius: 10px;" class="product-item col-md-3 col-sm-6 col-xs-12">
					<a href="#"><img height="150px" src="{{ asset('lib/storage/app/avatar/'.$item->prod_img) }}" class="img-thumbnail"></a>
					<p><a href="#">{{ $item->prod_name }}</a></p>
					<p class="price">{{ number_format($item->prod_price,0,',','.' )}} VND</p>
					<div class="marsk">
						<a href="{{ asset('homepage/detail/' . $item->prod_id) }}">Xem chi tiết</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@stop
