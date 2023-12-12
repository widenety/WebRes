/*
$(document).ready( function() {
	new ThreeJs( $("#threeJs") );
});
function ThreeJs( $obj ) {
	this.target = null;
	this.init( $obj );
	this.initCast();
}
ThreeJs.prototype.init = function( $obj ) {
	this.target = $obj;
}
ThreeJs.prototype.initCast = function() {
	const thiss = this;
	$(function() {
		thiss.threeJsConfig();
	});
}
ThreeJs.prototype.threeJsConfig = function() {
	const thiss = this;

	// ** Three.js 의 기본이 되는 Base화면 SCENE 생성
	$scene = new THREE.Scene();

	// ** CAMERA
	$cameraMoveLimitX = 1;
	$cameraMoveLimitY = 1;
	$camera = new THREE.PerspectiveCamera( 45, window.innerWidth/window.innerHeight, 0.1, 500 );
	$camera.position.set( 0, 50, 50 );		// ** 화면로딩시 초기 카메라의 위치를 셋팅.
	$camera.lookAt( $scene.position );

	// ** RENDERER
	$renderer = new THREE.WebGLRenderer({ antialias:true });
	$renderer.setClearColor(0xEEEEEE);
	$renderer.setSize( thiss.target.width(), thiss.target.height() );
	$renderer.shadowMap.enabled = true;					// **** 개발완료후 제거필요.

	// ** AXIS
	var axesHelper = new THREE.AxesHelper( 40 );
	$scene.add( axesHelper );							// **** 개발완료후 제거필요.

	// ** PLANE
	var planeGeometry = new THREE.PlaneGeometry( 30, 30, 1, 1 );		// width, height, widthSegments, heightSegments
	var planeMaterial = new THREE.MeshPhongMaterial({ color:0xAABBCC, opacity:0.7, transparent:true });
	var plane = new THREE.Mesh( planeGeometry, planeMaterial );
	plane.receiveShadow = true;							// **** 개발완료후 제거필요.
	plane.rotation.x = -0.5 * Math.PI;
	$scene.add( plane );								// **** 개발완료후 제거필요.

	// ** GRID
	var gridHelper = new THREE.GridHelper( 20, 20 );	// **** 개발완료후 제거필요. size, divisions
	$scene.add( gridHelper );							// **** 개발완료후 제거필요.

	// ** LIGHT
	var spotLight1 = new THREE.SpotLight(0xFF0000);		// ** 정중앙 기준 좌측 광원.
	var spotLight2 = new THREE.SpotLight(0xFF0000);		// ** 정중앙 기준 우측 광원.
	spotLight1.position.set( -20, 30, 20 );
	spotLight2.position.set( 20, 30, 20 );
	spotLight1.castShadow,
	spotLight2.castShadow = true;
	spotLight1.shadow.mapSize.width,
	spotLight2.shadow.mapSize.width = 100;
	spotLight1.shadow.mapSize.height,
	spotLight2.shadow.mapSize.height = 100;
	$scene.add( spotLight1, spotLight2 );

	// ** Geometry Merge : http://blog.302chanwoo.com/2016/07/merge-geometry/
	$mergedGeo = new THREE.Geometry();					// ** 하나로 병합할 Geometry 생성
	$meshes = new Array();

	// ** BoxGeometry 생성.
	$geometry = new THREE.BoxGeometry( .02, 3, 3 );		// ** width, height, depth
	$materials = new THREE.MeshPhongMaterial({ color:0xFF0000, opacity:1, transparent:true });

	// ** Mesh 생성
	$mesh = new THREE.Mesh( $geometry, $materials );
	$mesh.castShadow = true;							// ** Mesh 그림자 생성

	$mesh.position.set( 0, 0, 10 );						// ** x, y, z 좌표
	$mesh.updateMatrix();								// ** Merge전 반드시 matrix 업데이트.
	$mergedGeo.merge( $mesh.geometry, $mesh.matrix )	// ** Merge 실행.
	$meshes.push( $mesh );
	$scene.add( $mesh );

	// ** Canvas 배치 및 구성요소 배치.
	thiss.target.append( $renderer.domElement );
}
*/

$(function() {
	draw.init();
});
var draw = {
	init : function() {
		$wrapCanvas = $("#threeJs");
		this.setPageLoad();
	}
	, setPageLoad : function() {
		$(document).ready( function() {
			draw.setBase();
		});
	}
	, setBase : function() {
		// ** Three.js 의 기본이 되는 Base화면 SCENE 생성
		$scene = new THREE.Scene();

		// ** CAMERA
		$camera = new THREE.PerspectiveCamera( 45, $wrapCanvas.outerWidth()/$wrapCanvas.outerHeight(), 0.1, 500 );
		$camera.position.set( 0, 20, 40 );		// ** 화면로딩시 초기 카메라의 위치를 셋팅.
		$camera.lookAt( $scene.position );
		$camera.rotation.x += ( Math.PI / 180 ) * 5;

		// ** RENDERER
		$renderer = new THREE.WebGLRenderer({ antialias:true });
		$renderer.setClearColor(0xEEEEEE);
		$renderer.setSize( $wrapCanvas.outerWidth(), $wrapCanvas.outerHeight() );
		$renderer.shadowMap.enabled = true;					// **** 개발완료후 제거필요.

		// ** AXIS
		var axesHelper = new THREE.AxesHelper( 80 );
		$scene.add( axesHelper );							// **** 개발완료후 제거필요.

		// ** PLANE
		var planeGeometry = new THREE.PlaneGeometry( 30, 30, 1, 1 );		// width, height, widthSegments, heightSegments
		var planeMaterial = new THREE.MeshPhongMaterial({ color:0xAABBCC, opacity:1, transparent:false });
		var plane = new THREE.Mesh( planeGeometry, planeMaterial );
		plane.receiveShadow = true;							// **** 개발완료후 제거필요.
		plane.rotation.x = -0.5 * Math.PI;
		$scene.add( plane );								// **** 개발완료후 제거필요.

		// ** GRID
		var gridHelper = new THREE.GridHelper( 30, 10 );	// **** 개발완료후 제거필요. size, divisions
		$scene.add( gridHelper );							// **** 개발완료후 제거필요.

		// ** LIGHT
		var spotLight1 = new THREE.SpotLight(0xFFFFFF);		// ** 정중앙 기준 좌측 광원.
		var spotLight2 = new THREE.SpotLight(0xFFFFFF);		// ** 정중앙 기준 우측 광원.
		spotLight1.position.set( -40, 60, 30 );
		spotLight2.position.set( 40, 60, 30 );
		spotLight1.castShadow,
		spotLight2.castShadow = true;
		spotLight1.shadow.mapSize.width,
		spotLight2.shadow.mapSize.width = 500;
		spotLight1.shadow.mapSize.height,
		spotLight2.shadow.mapSize.height = 500;
		$scene.add( spotLight1, spotLight2 );

		// ** Geometry Merge : http://blog.302chanwoo.com/2016/07/merge-geometry/
		$mergedGeo = new THREE.Geometry();					// ** 하나로 병합할 Geometry 생성

		// ** 아이템 Pannel Mesh 셋팅/출력.
		// ** BoxGeometry 생성.
		$geometry = new THREE.BoxGeometry( .2, 10, 10 );		// ** depth, width, height

		// ** 이미지 Texturing 이미지 맵핑.
		$loader = new THREE.TextureLoader();
		$materials = [
			new THREE.MeshBasicMaterial({ map:$loader.load( "http://widenety.mireene.com/temp/sangji_Three.js/img/img2.jpg" ), transparent:true, opacity:1 })
			, new THREE.MeshBasicMaterial({ map:$loader.load( "http://widenety.mireene.com/temp/sangji_Three.js/img/img2.jpg" ), transparent:true, opacity:1 })
		];

		// ** Pannel 아이템 Mesh 생성.
		$mesh = new THREE.Mesh( $geometry, $materials );
		$mesh.castShadow = true;							// ** Mesh 그림자 생성
		$mesh.position.set( 0, 5, 0 );						// ** x, y, z 좌표
		$mesh.updateMatrix();								// ** Merge전 반드시 matrix 업데이트.
		$mergedGeo.merge( $mesh.geometry, $mesh.matrix )	// ** Merge 실행.
		$mesh.rotation.y = ( Math.PI / 180 ) * 90;			// ** Pannel 아이템 Y축 기준 회전 // ** 6시 방향기준 반시계방향 10 Deg. 360도를 단위개수별로 분포시킬 기준값 산출.

		// ** SCENE에 mesh 추가
		$scene.add( $mesh );

		// ** Canvas 배치 및 구성요소 배치.
		$wrapCanvas.append( $renderer.domElement );

		// ** Animate 구동
		draw.animate();
	}
	, animate : function() {
		function roleAnimation() {
			// **
			TWEEN.update();								// ** 사용된 TWEEN 애니메이션 전체 업데이트.
			requestAnimationFrame( roleAnimation );		// ** 프레임 반복

			// ** 렌더링
			$renderer.render( $scene, $camera );
		};
		roleAnimation();
	}
}