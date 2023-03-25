<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA Compatible" content="ie=edge">
	<title>Mardah</title>

	<style type="text/css">
		*{
			box-sizing: border-box;
			margin: 0; 
		}
		body{
			scroll-behavior: smooth;
			font-family: "Roboto",sans-serif;
			background: #E5E5E5;
			overflow-x:hidden;
		}

		/*navigation*/
		.wrapper{
			margin: 0 auto;
		}
		nav{
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding-top: 10px;
		}
		nav ul{
			display: flex;
		}
		.logo{
			padding-left: 90px;
		}
		.menubar li{
			list-style: none;
			margin-right: 70px;
			transition: transform .3s ease;

		}

		.menubar li a{
			color: #333333;
			font-family: 'Avenir Next';
			font-style: normal;
			font-weight: 500;
			font-size: 16px;
			line-height: 20px;
			font-variant: small-caps;
			font-feature-settings: 'liga' off;
			text-decoration: none;
		}
		.menubar li:hover{
			transform: scale(1.1);
		}
		#btn-register{
			padding: 10px 15px;
			width: 93px;
			height: 40px;
			left: calc(50% - 93px/2 + 533.5px);
			top: calc(50% - 40px/2 - 1966px);

			background: linear-gradient(102.3deg, #647B64 -4.62%, #66AC66 178.22%), linear-gradient(102.3deg, #0BB1E3 -4.62%, #0F2976 178.22%), #0E70AF;
			border-radius: 3px;
			color: #FEFEFE;

		}

		/*body*/
		header{
			display: flex;
			align-items: center;
			justify-content: space-between;
			height: 41vw;
		}
		.hero-content{
			position: absolute;
			width: 495px;
			height: 375px;
			left: 180px;
			top: 200px;
		}
		header h1, .thumbnail h1{
			font-family: 'Avenir Next';
			font-style: normal;
			font-weight: 500;
			font-size: 48px;
			line-height: 116%;
			font-variant: small-caps;
			color: #333333;

		}
		header p{
			font-family: 'Avenir Next';
			font-style: normal;
			font-weight: 400;
			font-size: 18px;
			line-height: 132%;
			letter-spacing: 0.04em;
			color: #4F4F4F;
			margin-top: 20px;
		}
		header a{
			font-family: 'Avenir Next';
			font-style: normal;
			font-weight: 600;
			font-size: 16px;
			line-height: 125.5%;
			letter-spacing: 0.155em;
			text-transform: uppercase;
			color: #FEFEFE;
			padding:20px 50px;
			text-decoration: none;
			background: linear-gradient(102.3deg, #647B64 -4.62%, #66AC66 178.22%);
			box-shadow: 0px 20px 40px rgba(128, 143, 150, 0.19);
			border-radius: 2px;
			margin:120px 0 0 180px;
		}
		.brand img{
			transform: scale(1.4);  /*memperbesar uk gambar*/
			float: right;
			padding-top: 50px;
			opacity: 90%;
			max-width: 100%; height: auto;
		}
		.product-grid {
		  display: grid;
		  grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
		  grid-gap: 30px;
		  margin: 40px;
		}

		.product-item {
		  background-color: #ffffff;
		  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		  padding: 20px;
		  text-align: center;
		  color: #4b6375;
		}

		.product-item img {
		  width: 100%;
		  height: auto;
		  transition: transform .5s ease;
		  margin-bottom: 10px;
		}
		.product-item img:hover{
			transform: scale(1.2);
		}

		.product-item h3 {
		  margin-top: 0;
		}

		.product-item p {
			margin-top: 10px;
		  margin-bottom: 15px;
		}

		.btn {
		  display: inline-block;
		  background-color: #2ba0b7;
		  color: #fff;
		  padding: 10px 20px;
		  border-radius: 5px;
		  text-decoration: none;
		}
		.viewmore{
			display: fixed;
			color: #333333;
			font-family: 'Avenir Next';
			font-style: normal;
			font-weight: 500;
			font-size: 18px;
			opacity: 85%;
			text-decoration: none;
		}
		.thumbnail{
			display: grid;
			grid-template-columns: 700px 1fr;
			grid-gap: 30px;
			margin: 40px;
		}
		.thumbnail img{
			width: 100%;
			height: auto;
		}
		footer{
			display: grid;
			grid-template-columns: 400px 1fr 1fr;
			grid-template-rows: 50px;
			grid-gap: 100px;
			padding: 60px 70px;
			background-color:#647B64;
			color: #FEFEFE; 
		}
		footer img{
			display: inline-grid;
		}
		.contact img{
			width: 50px;
			height: auto;
		}
		.payment img{
			width: 70px;
			height: auto;
		}
		.coprig{
			grid-column: 1/4;
			grid-row: 2;
			margin-top: 30px;
		}
		.thumbnail h1{
			margin: auto;
			font-size: 40px;
		}
	</style>
</head>
<body>

	<div class="nav-container">
		<div class="wrapper">
			<nav>
				<div class="logo">
					<img src="images/logo.svg">
					<img src="images/brand.svg">
				</div>

				<ul class="menubar">
					<li>
						<a href="#produk">PRODUCTS</a>
					</li>

					<li>
						<a href="#">SHOP</a>
					</li>

					<li>
						<a href="#abtus">ABOUT US</a>
					</li>

					<li>
						<a href="https://www.instagram.com/ajengkalistaa/" target='_blank' title="Kunjungi Instagram Admin" id="btn-register">Register</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>

	<div class="header-container">
		<div class="wrapper">
			<header>
				<div class="hero-content">
					<h1>Mardah.</h1>
					<h1>Inspiring Beauty!</h1>
					<p>Halal Green Beauty. Discover the gorgeous shine with us. #FeelTheBeauty</p>
				</div>
				<a href="#" style="margin-top: 225px;">
					Get Started!
				</a>

				<div class="brand">
					<img src="images/3.png">
				</div>
			</header>
			
			<div class="product-grid" id="produk">
			  <div class="product-item">
			    <img src="images/pr.png" alt="Produk 1">
			    <h3>Renew You Anti Aging Night Cream</h3>
			    <p><del>Rp114.000</del><b>  Rp91.200</b></p>
			    <p>Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    <a href="#" class="btn">Beli Sekarang</a>
			  </div>
			  <div class="product-item">
			    <img src="images/pr2.png" alt="Produk 2">
			    <h3>Renew You Anti Aging Eye Cream</h3>
			    <p><b>Rp92.000</b></p>
			    <p>Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    <a href="#" class="btn">Beli Sekarang</a>
			  </div>
			  <div class="product-item">
			    <img src="images/pr3.png" alt="Produk 3">
			    <h3>Perfect Bright Tone Up Micellar Water</h3>
			    <p><del>Rp42.500</del><b>  Rp31.500</b></p>
			    <p>Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    <a href="#" class="btn">Beli Sekarang</a>
			  </div>
			  <div class="product-item">
			    <img src="images/pr4.png" alt="Produk 4">
			    <h3>Nature Daily Hydramild Toner Essence</h3>
			    <p><del>Rp22.500</del><b>  Rp18.000</b></p>
			    <p>Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    <a href="#" class="btn">Beli Sekarang</a>
			  </div>
			  <div class="product-item">
			    <img src="images/pr5.png" alt="Produk 5">
			    <h3>Nature Daily Capsule Mask</h3>
			    <p><del>Rp18.500</del><b>  Rp12.000</b></p>
			    <p>Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    <a href="#" class="btn">Beli Sekarang</a>
			  </div>
			  <div class="product-item">
			    <img src="images/pr6.png" alt="Produk 6">
			    <h3>Hydra Rose Micro Gel Serum</h3>
			    <p><del>Rp142.500</del><b>  Rp112.000</b></p>
			    <p>Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    <a href="#" class="btn">Beli Sekarang</a>
			  </div>
			  <div class="product-item">
			    <img src="images/pr7.png" alt="Produk 7">
			    <h3>Nature Daily Hydramild Toner Essence</h3>
			    <p><del>Rp22.500</del><b>  Rp18.000</b></p>
			    <p>Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    <a href="#" class="btn">Beli Sekarang</a>
			  </div>
			  <div class="product-item">
			    <img src="images/pr8.png" alt="Produk 8">
			    <h3>Crystal Secret Micellar Cleansing Gel</h3>
			    <p><del>Rp44.500</del><b>  Rp38.000</b></p>
			    <p>Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			    <a href="#" class="btn">Beli Sekarang</a>
			  </div>

			  <!-- Tambahkan lebih banyak elemen .product-item sesuai kebutuhan -->
			</div>
			  <center><a href="#" class="viewmore">LIHAT SELENGKAPNYA >></a></center>

		</div>

		<div class="thumbnail">
			<img src="images/produk.png" alt="Produk Mardah">
			<h1>HALAL GREEN BEAUTY</h1>
		</div>

		<footer>
			<div class="abt">
				<h2>ABOUT MARDAH</h2><br>
				<p>Wardah is a beauty brand that cares and understands the wish of every women to always feel calm and comfortable with their look.</p>
			</div>
				<div class="contact" id="abtus">
					<h2>CONTACT US</h2><br>
					<a href="#"><img src="images/operator.png"></a>
					<a href="https://www.instagram.com/ajengkalistaa/"><img src="images/instagram.png"></a>
					<a href="#"><img src="images/twiter.png"></a>
					<a href="#"><img src="images/facebook.png"></a>
				</div>

				<div class="payment">
					<h2>PAYMENT</h2><br>
					<img src="images/bank.png">
					<img src="images/linkaja.png"><br>
					<img src="images/gopay.png">
					<img src="images/ovo.png">
					<img src="images/dana.png">

				</div>
				<div class="coprig">
					<small>&copy; 2023 Mardah. Hak cipta dilindungi undang-undang.</small>
				</div>
		</footer>
	</div>
</body>
</html>