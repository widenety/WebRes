<!doctype html>
<html lang="ko">
<head>
	<? include("/web/home/widenety/html/WebRes/_inc/head_DefaultSet.php") ?>
	<title>Web Resources > Carousel</title>

	<!-- 01. Owl Carousel -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
	<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

	<!-- 02. Swiper -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@10.3.0/swiper-bundle.min.css">
	<script src="https://cdn.jsdelivr.net/npm/swiper@10.3.0/swiper-bundle.min.js"></script>

	<!-- 03. bxSlider -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bxslider@4.2.14/dist/jquery.bxslider.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bxslider@4.2.14/dist/jquery.bxslider.min.js"></script>

	<!-- 04. Slick -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<link rel="stylesheet" type="text/css" href="./carousel.css">
	<script type="text/javascript" src="./carousel.js"></script>
</head>
<body>
	<div id="wrap">
		<div id="headerWr">
			<? include("/web/home/widenety/html/WebRes/_inc/header.php") ?>
			<? include("/web/home/widenety/html/WebRes/_inc/gnavi.php") ?>
		</div>
		<div id="contentsWr">
			<? include("/web/home/widenety/html/WebRes/_inc/visual.php") ?>
			<? include("/web/home/widenety/html/WebRes/_inc/navi.php") ?>
			<article class="contents">
				<div class="contentsCore skeleton_loading">
					<div class="lv1 crsUnit"><!-- 01. Owl Carousel -->
						<h3 class="cTit01"><span class="skeleton">01. Owl Carousel</span></h3>
						<h4 class="cTit02"><span class="skeleton">Official</span></h4>
						<a href="https://owlcarousel2.github.io/OwlCarousel2/?nw=true" target="_blank" title="새창열기" class="link01 disib skeleton"><span>https://owlcarousel2.github.io/OwlCarousel2/</span><i class="ri-links-fill"></i></a>
						<div class="sgap"></div>

						<h4 class="cTit02"><span class="skeleton">Porfolio</span></h4>
						<a href="https://linc.koreatech.ac.kr/linc/Main.do?nw=true" target="_blank" title="새창열기" class="link01 disib skeleton"><span>https://linc.koreatech.ac.kr/linc/Main.do</span><i class="ri-links-fill"></i></a>
						<div class="sgap"></div>

						<h4 class="cTit02"><span class="skeleton">Demo</span></h4>
<pre class="codeView skeleton">
&lt;link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css"&gt;
&lt;script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"&gt;&lt;/script&gt;
</pre>
<pre class="codeView skeleton">
Selector.owlCarousel({
	items : 1
	, loop : true
	, margin : 0
	, nav : true
	, navText : [ "&lt;span class='blind'&gt;이전 장면&lt;/span&gt;", "&lt;span class='blind'&gt;다음 장면&lt;/span&gt;" ]
	, dots : true
	, dotsContainer : thiss.crsDots
	, autoplay : true
	, autoplayTimeout : thiss.crsDelay
	, autoplayHoverPause : false
	, smartSpeed : 1000
	, onInitialized : onInitd
	, onTranslate : onTranse
	, onTranslated : onTransed
	, onResized : onResized
	, responsiveRefreshRate : 0
});
</pre>
						<div id="owl">
							<div class="dataList owl-carousel">
								<div class="item skeleton bra0"><img src="http://via.placeholder.com/600x300/abc/fff?text=Owl Img.01" alt="" width="600" height="300"></div>
								<div class="item skeleton bra0"><img src="http://via.placeholder.com/600x300/bca/fff?text=Owl Img.02" alt="" width="600" height="300"></div>
								<div class="item skeleton bra0"><img src="http://via.placeholder.com/600x300/aab/fff?text=Owl Img.03" alt="" width="600" height="300"></div>
								<div class="item skeleton bra0"><img src="http://via.placeholder.com/600x300/cab/fff?text=Owl Img.04" alt="" width="600" height="300"></div>
							</div>
							<div class="dataCtrl">
								<div class="dataAuto">
									<button type="button" class="btn-stop"><span class="blind">자동정지</span></button>
									<button type="button" class="btn-play"><span class="blind">자동시작</span></button>
								</div>
								<div class="dataDots"></div>
							</div>
						</div>
					</div>
					<div class="lv1 crsUnit"><!-- 02. Swiper -->
						<h3 class="cTit01"><span class="skeleton">02. Swiper</span></h3>
						<h4 class="cTit02"><span class="skeleton">Official</span></h4>
						<a href="https://swiperjs.com/?nw=true" target="_blank" title="새창열기" class="link01 disib skeleton"><span>https://swiperjs.com/</span><i class="ri-links-fill"></i></a>
						<div class="sgap"></div>

						<h4 class="cTit02"><span class="skeleton">Porfolio</span></h4>
						<a href="https://www.kbu.ac.kr/kor/Main.do?nw=true" target="_blank" title="새창열기" class="link01 disib skeleton"><span>https://www.kbu.ac.kr/kor/Main.do</span><i class="ri-links-fill"></i></a>
						<div class="sgap"></div>

						<h4 class="cTit02"><span class="skeleton">Demo</span></h4>
<pre class="codeView skeleton">
&lt;link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@10.3.0/swiper-bundle.min.css"&gt;
&lt;script src="https://cdn.jsdelivr.net/npm/swiper@10.3.0/swiper-bundle.min.js"&gt;&lt;/script&gt;
</pre>
<pre class="codeView skeleton">
Function = new Swiper( Selector, {
	slidesPerView : 1
	, speed : 1000
	, rewind : true
	, spaceBetween : 0
	, direction : "horizontal"
	, loop : true
	, autoplay : {
		delay : 3000
		, disableOnInteraction : false
	}
	, navigation: {
		el : thiss.swpNaviStr
		, nextEl : thiss.swpNextStr
		, prevEl : thiss.swpPrevStr
	}
	, pagination: {
		el : thiss.swpDotsStr
		, clickable : true
		, renderBullet : function ( index, className ) {
			return "&lt;button type='button' class='swiper-dot " + className + "'&gt;&lt;span class='blind txt'&gt;" + ( index + 1 ) + "번째 장면&lt;/span&gt;&lt;span class='blind sel'&gt;선택됨&lt;/span&gt;&lt;/button&gt;";
		}
	}
});
</pre>
						<div id="swp">
							<div class="dataGroup">
								<div class="dataList swiper">
									<div class="swiper-wrapper dataListIn">
										<div class="item swiper-slide skeleton bra0"><img src="http://via.placeholder.com/600x300/abc/fff?text=Swiper Img.01" alt="" width="600" height="300"></div>
										<div class="item swiper-slide skeleton bra0"><img src="http://via.placeholder.com/600x300/bca/fff?text=Swiper Img.02" alt="" width="600" height="300"></div>
										<div class="item swiper-slide skeleton bra0"><img src="http://via.placeholder.com/600x300/aab/fff?text=Swiper Img.03" alt="" width="600" height="300"></div>
										<div class="item swiper-slide skeleton bra0"><img src="http://via.placeholder.com/600x300/cab/fff?text=Swiper Img.04" alt="" width="600" height="300"></div>
									</div>
								</div>
								<div class="dataNavi">
									<button type="button" class="btn-prev"><span class="blind">이전 장면</span></button>
									<button type="button" class="btn-next"><span class="blind">다음 장면</span></button>
								</div>
							</div>
							<div class="dataCtrl">
								<div class="dataAuto">
									<button type="button" class="btn-stop"><span class="blind">자동정지</span></button>
									<button type="button" class="btn-play"><span class="blind">자동시작</span></button>
								</div>
								<div class="dataDots"></div>
							</div>
						</div>
					</div>
					<div class="lv1 crsUnit"><!-- 03. bxSlider -->
						<h3 class="cTit01"><span class="skeleton">03. bxSlider</span></h3>
						<h4 class="cTit02"><span class="skeleton">Official</span></h4>
						<a href="https://bxslider.com/?nw=true" target="_blank" title="새창열기" class="link01 disib skeleton"><span>https://bxslider.com/</span><i class="ri-links-fill"></i></a>
						<div class="sgap"></div>

						<h4 class="cTit02"><span class="skeleton">Default Reference</span></h4>
						<a href="https://bxslider.com/examples/auto-show-start-stop-controls?nw=true" target="_blank" title="새창열기" class="link01 disib skeleton"><span>https://bxslider.com/examples/auto-show-start-stop-controls</span><i class="ri-links-fill"></i></a>
						<div class="sgap"></div>

						<h4 class="cTit02"><span class="skeleton">Demo</span></h4>
<pre class="codeView skeleton">
&lt;link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bxslider@4.2.14/dist/jquery.bxslider.min.css"&gt;
&lt;script src="https://cdn.jsdelivr.net/npm/bxslider@4.2.14/dist/jquery.bxslider.min.js"&gt;&lt;/script&gt;
</pre>
<pre class="codeView skeleton">
Selector.bxSlider({
	auto : true
	, randomStart : false
	, startSlide : 0
	, speed : 1000
	, stopAutoOnClick : false
	, autoControls : true
	, autoControlsSelector : thiss.bxsAutoStr
	, prevText : "이전 장면"
	, nextText : "다음 장면"
	, prevSelector : thiss.bxsPrevStr
	, nextSelector : thiss.bxsNextStr
	, stopText : "자동정지"
	, startText : "자동시작"
	, pause : 3000
	, stopAutoOnClick : true
	, pager : true
	, pagerCustom : thiss.bxsDotsStr
});
</pre>
						<div id="bxs">
							<div class="dataGroup">
								<div class="dataList">
									<div class="item skeleton bra0"><img src="http://via.placeholder.com/600x300/abc/fff?text=Bx Img.01" alt="" width="600" height="300"></div>
									<div class="item skeleton bra0"><img src="http://via.placeholder.com/600x300/bca/fff?text=Bx Img.02" alt="" width="600" height="300"></div>
									<div class="item skeleton bra0"><img src="http://via.placeholder.com/600x300/aab/fff?text=Bx Img.03" alt="" width="600" height="300"></div>
									<div class="item skeleton bra0"><img src="http://via.placeholder.com/600x300/cab/fff?text=Bx Img.04" alt="" width="600" height="300"></div>
								</div>
								<div class="dataNavi">
									<div class="btn-prev"></div>
									<div class="btn-next"></div>
								</div>
							</div>
							<div class="dataCtrl">
								<div class="dataAuto"></div>
								<div class="dataDots">
									<a href="#GoSlide_1" data-slide-index="0" class="roleBtn"><span class="txt blind">1번째 장면</span><span class="sel blind">선택됨</span></a>
									<a href="#GoSlide_2" data-slide-index="1" class="roleBtn"><span class="txt blind">2번째 장면</span><span class="sel blind">선택됨</span></a>
									<a href="#GoSlide_3" data-slide-index="2" class="roleBtn"><span class="txt blind">3번째 장면</span><span class="sel blind">선택됨</span></a>
									<a href="#GoSlide_4" data-slide-index="3" class="roleBtn"><span class="txt blind">4번째 장면</span><span class="sel blind">선택됨</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="lv1 crsUnit"><!-- 04. Slick -->
						<h3 class="cTit01"><span class="skeleton">04. Slick</span></h3>
						<h4 class="cTit02"><span class="skeleton">Official & Default Reference</span></h4>
						<a href="https://kenw>heeler.github.io/slick/?nw=true" target="_blank" title="새창열기" class="link01 disib skeleton"><span>https://kenwheeler.github.io/slick/</span><i class="ri-links-fill"></i></a>
						<div class="sgap"></div>

						<h4 class="cTit02"><span class="skeleton">Demo</span></h4>
<pre class="codeView skeleton">
&lt;link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"&gt;
&lt;script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"&gt;&lt;/script&gt;
</pre>
<pre class="codeView skeleton">
thiss.slcList.slick({
	slidesToShow : 1
	, slidesToScroll : 1
	, autoplay : true
	, autoplaySpeed : 3000
	, arrows : true
	, appendArrows : thiss.slcNaviStr
	, prevArrow : "&lt;button type='button' class='btn-prev'&gt;&lt;span class='blind'&gt;이전 장면&lt;/span&gt;&lt;/button&gt;"
	, nextArrow : "&lt;button type='button' class='btn-next'&gt;&lt;span class='blind'&gt;다음 장면&lt;/span&gt;&lt;/button&gt;"
	, dots : true
	, appendDots : thiss.slcDotsStr
	, rows : 1
	, speed : 1000
});
</pre>
						<div id="slc">
							<div class="dataGroup">
								<div class="dataList">
									<div class="item skeleton bra0"><img src="http://via.placeholder.com/600x300/abc/fff?text=Slick Img.01" alt="" width="600" height="300"></div>
									<div class="item skeleton bra0"><img src="http://via.placeholder.com/600x300/bca/fff?text=Slick Img.02" alt="" width="600" height="300"></div>
									<div class="item skeleton bra0"><img src="http://via.placeholder.com/600x300/aab/fff?text=Slick Img.03" alt="" width="600" height="300"></div>
									<div class="item skeleton bra0"><img src="http://via.placeholder.com/600x300/cab/fff?text=Slick Img.04" alt="" width="600" height="300"></div>
								</div>
								<div class="dataNavi"></div>
							</div>
							<div class="dataCtrl">
								<div class="dataAuto">
									<button type="button" class="btn-stop"><span class="blind">자동정지</span></button>
									<button type="button" class="btn-play"><span class="blind">자동시작</span></button>
								</div>
								<div class="dataDots"></div>
							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
		<div id="footerWr" class="hasLineH top">
			<? include("/web/home/widenety/html/WebRes/_inc/footer.php") ?>
		</div>
	</div>
</body>
</html>