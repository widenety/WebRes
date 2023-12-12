<?
	// PHP 환경설정변수
	$pageName = basename($_SERVER['PHP_SELF']);
	$pageUri = "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
	if ( $pageName == "index.php" ) {
		$pageDesc = "웹 자원 미리보기 포트폴리오";
	} else if ( $pageName == "fontsCdns.php" ) {
		$pageDesc = "웹폰트 미리보기";
	} else if ( $pageName == "dummyImg.php" ) {
		$pageDesc = "더미 이미지 미리보기";
	} else if ( $pageName == "dummyTxt.php" ) {
		$pageDesc = "더미 텍스트 미리보기";
	} else if ( $pageName == "carousel.php" ) {
		$pageDesc = "Carousel 4종 미리보기";
	} else if ( $pageName == "lottieFiles.php" ) {
		$pageDesc = "lottieFiles 웹애니메이션 미리보기";
	} else if ( $pageName == "privacyPolicy.php" ) {
		$pageDesc = "개인정보 취급방침";
	} else {
		$pageDesc = "";
	}
?>
<meta property="og:locale" content="ko_KR">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $pageUri ?>">
<meta property="og:title" content="Widenety Style : 웹 자원 미리보기">
<meta property="og:description" content="<?= $pageDesc ?>">
<meta property="og:site_name" content="Widenety Style : 웹 자원 미리보기 포트폴리오">
<meta property="og:image" content="http://widenety.mireene.com/WebRes/_img/og.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<link rel="shortcut icon" href="/WebRes/_img/favicon.ico">
<link rel="icon" href="/WebRes/_img/favicon.ico">
<link rel="apple-touch-icon" href="/WebRes/_img/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0,user-scalable=no,target-densitydpi=medium-dpi" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="expries" content="0" />
<link rel="dns-prefetch" href="https://cdn.jsdelivr.net/">
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com/">
<link rel="dns-prefetch" href="http://code.jquery.com/">
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
<!-- 01. LAYOUT WEBFONTS -->
<!-- [01]. NotoSansKR		--><link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/widenety/gitTest/_WebFonts/NotoSansKR/notoSansKr_v1.0.css">
<!-- [02]. RALEWAY			--><link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway%3A400%2C300%2C500%2C600%2C700&amp;ver=5.1.16">

<!-- 02. REMIX ICON -->
<!-- https://remixicon.com/	--><link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="/WebRes/_css/layout.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/WebRes/_js/common.js" defer></script>
<!-- <script>history.scrollRestoration = "manual"</script> -->