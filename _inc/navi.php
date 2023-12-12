<nav class="nav" id="nav">
	<div class="navHead">
		<a href="/WebRes/" class="navHeadTit">
			<span class="t1">Widenety Style</span>
			<span class="t2">Web Resources Preview</span>
		</a>
		<div class="navHeadCtrl">
			<button type="button" id="mNaviCloser"><i class="ri-close-line"></i><span class="blind">Mobile Navogator Closer</span></button>
		</div>
	</div>
	<ul class="navCore skeleton_loading">
		<li class="<?= ( $pageName == "fontsCdns.php" ) ? "on" : ""; ?>"><a href="/WebRes/01.fontsCdns/fontsCdns.php" class="skeleton"><span>Fonts Cdns</span></a></li>
		<li class="<?= ( $pageName == "dummyImg.php" ) ? "on" : ""; ?>"><a href="/WebRes/02.dummyImg/dummyImg.php" class="skeleton"><span>Dummy Image</span></a></li>
		<li class="<?= ( $pageName == "dummyTxt.php" ) ? "on" : ""; ?>"><a href="/WebRes/03.dummyTxt/dummyTxt.php" class="skeleton"><span>Dummy Text</span></a></li>
		<li class="<?= ( $pageName == "carousel.php" ) ? "on" : ""; ?>"><a href="/WebRes/04.carousel/carousel.php" class="skeleton"><span>Carousel</span></a></li>
		<li class="<?= ( $pageName == "lottieFiles.php" ) ? "on" : ""; ?>"><a href="/WebRes/05.lottieFiles/lottieFiles.php" class="skeleton"><span>LottieFiles</span></a></li>
		<li class="<?= ( $pageName == "gsap.php" ) ? "on" : ""; ?>"><a href="/WebRes/06.gsap/gsap.php" class="skeleton"><span>GSAP</span></a></li>
		<li class="<?= ( $pageName == "threeJs.php" ) ? "on" : ""; ?>"><a href="/WebRes/07.threeJs/threeJs.php" class="skeleton"><span>Three.js</span></a></li>
		<li class="<?= ( $pageName == "privacyPolicy.php" ) ? "on" : ""; ?>"><a href="/WebRes/privacyPolicy/privacyPolicy.php" class="skeleton"><span>Privacy Policy</span></a></li>
	</ul>
</nav>
<div class="navOverlay"></div>