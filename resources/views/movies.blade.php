<!DOCTYPE html>
<html>
<head>
<title>Movie Theatre</title>
<link href="vendor/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="vendor/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="vendor/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
			<div class="menu">
				<ul>
					<li><a class="active" href="/home"><i class="home"></i></a></li>
					<li><a href="/videos"><div class="video"><i class="videos"></i><i class="videos1"></i></div></a></li>
					<li><a href="/reviews"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a href="/contact"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div>
		<div class="main">
		<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="movies.html"><img src="vendor/images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-info">
				<h1>BIG HERO 6</h1>
				<p class="age"><a href="#">All Age</a> Don Hall, Chris Williams</p>
				<p class="review">Rating	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;  8,5/10</p>
				<p class="review reviewgo">Genre	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; Animation, Action, Comedy</p>
				<p class="review">Release &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 7 November 2014</p>
				<p class="special">The special bond that develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada, who team up with a group of friends to form a band of high-tech heroes.</p>
				<a class="video" href="#"><i class="video1"></i>WATCH TRAILER</a>
				<a class="book" href="#"><i class="book1"></i>BOOK TICKET</a>
			</div>
		</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
			<li><img src="vendor/images/r1.jpg" alt=""/></li>
			<li><img src="vendor/images/r2.jpg" alt=""/></li>
			<li><img src="vendor/images/r3.jpg" alt=""/></li>
			<li><img src="vendor/images/r4.jpg" alt=""/></li>
			<li><img src="vendor/images/r5.jpg" alt=""/></li>
			<li><img src="vendor/images/r6.jpg" alt=""/></li>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 4
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="vendor/js/jquery.flexisel.js"></script>	
		</div>
		<div class="video">
			<iframe  src="https://www.youtube.com/embed/2LqzF5WauAw" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="news">
			<div class="col-md-6 news-left-grid">
				<h3>Don’t be late,</h3>
				<h2>Book your ticket now!</h2>
				<h4>Easy, simple & fast.</h4>
				<a href="#"><i class="book"></i>BOOK TICKET</a>
				<p>Get Discount up to <strong>10%</strong> if you are a member!</p>
			</div>
			<div class="col-md-6 news-right-grid">
				<h3>News</h3>
				<div class="news-grid">
					<h5>Big Hero 6</h5>
					<label>Nov 11 2014</label>
					<p>Big Hero 6 adalah film 3D superhero animasi komputer yang diproduksi oleh Walt Disney Animation Studios, berdasarkan dari tim superhero Marvel Comics dengan nama yang sama. Film ini akan disutradarai oleh Don Hall, co-direktur Winnie the Pooh, dan Chris Williams, co-direktur Bolt</p>
				</div>
				<div class="news-grid">
					<h5>The Good Detective</h5>
					<label>Nov 11 2014</label>
					<p>The Good Detective mengambil latar di Incheon, Korea Selatan. Bercerita tentang seorang deketetif Kang Do Chang (Son Hyun Joo) kelahiran Incheon yang sudah memiliki pengalaman 18 tahun sebagai detektif. Dia memecahkan kasus hanya dengan menggunakan pengalaman dan relasi saja. Tanpa menggunakan teknik apapun.</p>
				</div>
				<a class="more" href="#">MORE</a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="more-reviews">
			 <ul id="flexiselDemo2">
			<li><img src="vendor/images/m1.jpg" alt=""/></li>
			<li><img src="vendor/images/m2.jpg" alt=""/></li>
			<li><img src="vendor/images/m3.jpg" alt=""/></li>
			<li><img src="vendor/images/m4.jpg" alt=""/></li>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo2").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="vendor/js/jquery.flexisel.js"></script>	
		</div>	
	<div class="footer">
		<h6>Disclaimer : </h6>
		<p class="claim">Ini web resmi untuk menonton dan membooking film sesuai dengan anda</p>
		<a href="example@mail.com">fahmawandeo@mail.com</a>
		<div class="copyright">
			<p>CEO STARTUP IT</a></p>
		</div>
	</div>	
	</div>
	</div>
	<div class="clearfix"></div>
</body>
</html>