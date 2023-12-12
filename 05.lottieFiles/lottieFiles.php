<!doctype html>
<html lang="ko">
<head>
	<? include("/web/home/widenety/html/WebRes/_inc/head_DefaultSet.php") ?>
	<title>Web Resources > LottieFiles</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./lottieFiles.css">
	<script type="text/javascript" src="./lottieFiles.js"></script>
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
				<div class="contentsCore">
					<div class="lv1 lottieUnit skeleton_loading">
						<h3 class="cTit01"><span class="skeleton">LottieFiles</span></h3>
						<h4 class="cTit02"><span class="skeleton">Official Site</span></h4>
						<a href="https://lottiefiles.com/?nw=true" target="_blank" title="새창열기" class="link01 disib skeleton"><span>https://lottiefiles.com/</span><i class="ri-links-fill"></i></a>
						<div class="sgap"></div>

						<h4 class="cTit02"><span class="skeleton">CDN Library</span></h4>
						<code class="codeView skeleton">
							&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie.min.js"&gt;&lt;/script&gt;
						</code>
						<div class="sgap"></div>

						<h4 class="cTit02"><span class="skeleton">Demo</span></h4>
						<div id="lottie">
							<ul>
								<li><div class="aniSpace skeleton"><div class="aniContainer" id="aniCube_1"></div></div></li>
								<li><div class="aniSpace skeleton"><div class="aniContainer" id="ani404_1"></div></div></li>
								<li><div class="aniSpace skeleton"><div class="aniContainer" id="aniPyramid_1"></div></div></li>
								<li><div class="aniSpace skeleton"><div class="aniContainer" id="aniComputer_1"></div></div></li>
								<li><div class="aniSpace skeleton"><div class="aniContainer" id="ani3Dcube_1"></div></div></li>
								<li><div class="aniSpace skeleton"><div class="aniContainer" id="aniGrouUp_1"></div></div></li>
								<!--
								<li><div class="aniSpace"><div class="aniContainer" id="aniAtom_1"></div></div></li>
								<li><div class="aniSpace"><div class="aniContainer" id="aniWireFrame_1"></div></div></li>
								<li><div class="aniSpace"><div class="aniContainer" id="aniBicycle_1"></div></div></li>
								<li><div class="aniSpace"><div class="aniContainer" id="aniGraph_1"></div></div></li>
								<li><div class="aniSpace"><div class="aniContainer" id="aniPencil_1"></div></div></li>
								<li><div class="aniSpace"><div class="aniContainer" id="aniTrash_1"></div></div></li>
								<li><div class="aniSpace"><div class="aniContainer" id="aniHello_1"></div></div></li>
								<li><div class="aniSpace"><div class="aniContainer" id="aniSearch_1"></div></div></li>
								<li><div class="aniSpace"><div class="aniContainer" id="aniLocation_1"></div></div></li>
								-->
							</ul>
						</div>
						<div class="sgap"></div>

						<h4 class="cTit02">Code</h4>
<pre class="codeView skeleton">
lottie.loadAnimation({
	container : $( "#"+lottieStr, thiss.lottTarget )[0]
	, renderer : "svg"
	, loop : true
	, autoplay : true
	, path : "/WebRes/05.lottieFiles/_ani/" + lottieStr + ".json"
});
</pre>
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