<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8"/>
	<meta content="IE-edge" http-equiv="X-UA-Compatible"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<title>Disini Jual Kopi.</title>
	<link rel="stylesheet" href="{{url('public')}}/css/home.css">
	<link href="{{url('public')}}/img/favicon.png" rel="shortcut icon"/>
	<script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>
<body>
	<section class="main">
		<div class="logo">
			<img src="{{url('public')}}/img/favicon.png" style="width: 20px;height: 20px;">
			<a href="{{url('/')}}"><font>KO</font>PI</a>
		</div>
		<div class="side-box">
			<div class="search">
				<i class="fas fa-search"></i>
				<input placeholder="Search" type="text"/>
			</div>	
		</div>
    	<div class="m-img">
    		<img alt="" src="{{url('public')}}/img/paket.jpg" style="width: 70%;height: 250px;" />    
    	</div>
		<div class="m-text">
			<h1>Ba<font>ris</font>ta</h1>
			<h2>Pack<font>age</font></h2>
			<a class="m-btn" href="#">Lihat Detail</a>
		</div>
		<div class="social">
			<a href="{{ url('beranda') }}"><i class="fas fa-user"></i></a>
			<a href="{{url('beranda')}}"><i class="fas fa-user-tie"></i>Admin</a>
		</div>
	</section>

	<section class="product">
		<div class="p-heading">
			<h3>Alat <font>Kopi </font><i class="fas fa-arrow-circle-right"></i></h3>
		</div>
		<div class="product-container">
			@foreach($list_produk as $produk)
			<div class="p-box">
				<img alt="1" src="{{url('public')}}/img/{{$loop->iteration}}.jpg" />
				<p>{{$produk->nama}}</p>
				<a class="price" href="#">Rp. {{$produk->harga}}</a>
				<a class="buy-btn" href="#">Preview</a>
			</div>
			@endforeach
		</div>
	</section>

	<section class="our-brand">
	<div class="brand-text">
		<h3>Bali Kintamani</h3>
		<h4>Kopi dari Petani <font>Terbaik</font> </h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus similique, veniam libero fuga, error natus ipsum excepturi quae est suscipit facilis dicta ipsam rerum assumenda, debitis odit? Perferendis commodi quas animi, iusto voluptatem laudantium assumenda deleniti rem praesentium doloribus cupiditate error unde aut corrupti dolorum at veniam dolore eum. Voluptatibus!</p>
	</div>
	<div class="brand-img"><img src="{{url('public')}}/img/brand.jpg" /></div>
	</section>

	<section class="subcribe-container">
		<h3>Berlangganan Kopi?</h3>
		<div class="subcribe-input">
			<input placeholder="Example@gmail.com" type="email" />
			<a class="subcribe-btn" href="#">Send</a>
		</div>
	</section>
	<footer>
		<h3>Kategori</h3>
		<ul class="footer-menu">
			<li><a href="#">Espresso Maker</a></li>
			<li><a href="#">Whole Bean</a></li>
			<li><a href="#">Manual Brew</a></li>
			<li><a href="#">Accessories</a></li>
		</ul>
	</footer>
<a class="copyright" href="#">&#169; Copyright 2020. Shop by Kopi Bang</a>
</body>
</html>