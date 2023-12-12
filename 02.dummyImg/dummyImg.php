<!doctype html>
<html lang="ko">
<head>
	<? include("/web/home/widenety/html/WebRes/_inc/head_DefaultSet.php") ?>
	<title>Web Resources > Dummy Image</title>
	<link rel="stylesheet" type="text/css" href="./dummyImg.css">
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
					<div class="lv1 dImgUnit">
						<h3 class="cTit01"><span class="skeleton">Placeholder</span></h3>
						<a href="#none" onclick="alert('Official 링크 없음');" class="link01 disib skeleton"><span>아래 사용방법 참고</span><i class="ri-links-fill"></i></a>
						<code class="codeView skeleton">&lt;img src="http://via.placeholder.com/350x250/000000/ffffff?text=test"&gt;</code>
						<div class="disib bra0 skeleton">
							<img src="http://via.placeholder.com/600x300/aabbcc/ffffff?text=test" class="img01" width="350" height="250">
						</div>
					</div>
					<div class="lv1 dImgUnit">
						<h3 class="cTit01"><span class="skeleton">Dummyimage</span></h3>
						<a href="https://dummyimage.com/?nw=true" target="_blank" title="새창열기" class="link01 disib skeleton"><span>https://dummyimage.com/</span><i class="ri-links-fill"></i></a>
						<code class="codeView skeleton">&lt;img src="https://dummyimage.com/350x250/000/fff.png&text=test"&gt;</code>
						<div class="disib bra0 skeleton">
							<img src="https://dummyimage.com/600x300/cab/fff.png&text=test" class="img01" width="350" height="250">
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