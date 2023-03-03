<html lang="ko" class="is-pc"><head>
<meta charset="utf-8">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>매물지도 | 매물모아</title>
<link rel="stylesheet" href="https://maemulmoa.co.kr/nariya/app/bs4/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="https://maemulmoa.co.kr/nariya/css/nariya.css" type="text/css">
<link rel="stylesheet" href="https://maemulmoa.co.kr/theme/Simple-A/css/theme.css" type="text/css">
<link rel="stylesheet" href="https://maemulmoa.co.kr/theme/Simple-A/css/font/pc-NexonLv2Gothic.css" type="text/css">
<link rel="stylesheet" href="https://maemulmoa.co.kr/theme/Simple-A/css/color/Navy.css" type="text/css">
<link rel="stylesheet" href="https://maemulmoa.co.kr/skin/content/BS4-Basic/style.css?ver=220620">
<link rel="stylesheet" href="https://maemulmoa.co.kr/theme/Simple-A/widget/sidebar/widget.css?ver=220620">
<link rel="stylesheet" href="https://maemulmoa.co.kr/theme/Simple-A/skin/social/style.css?ver=220620">
<link rel="stylesheet" href="https://maemulmoa.co.kr/js/font-awesome/css/font-awesome.min.css" type="text/css">
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "https://maemulmoa.co.kr";
var g5_bbs_url   = "https://maemulmoa.co.kr/bbs";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor    = "";
var g5_plugin_url = "https://maemulmoa.co.kr/plugin";
var g5_cookie_domain = "";
</script>
<script src="https://maemulmoa.co.kr/nariya/js/jquery-3.5.1.min.js"></script>
<script src="https://maemulmoa.co.kr/nariya/js/common.js?ver=221017"></script>
<script src="https://maemulmoa.co.kr/js/wrest.js?ver=221017"></script>
<script src="https://maemulmoa.co.kr/js/placeholders.min.js"></script>
<script src="https://maemulmoa.co.kr/nariya/app/bs4/js/bootstrap.bundle.min.js"></script>
<script src="https://maemulmoa.co.kr/nariya/js/nariya.js?ver=221017"></script>
<script src="https://maemulmoa.co.kr/theme/Simple-A/js/theme.js"></script>
<script src="https://maemulmoa.co.kr/nariya/js/sly.min.js?ver=221017"></script>
<script src="https://maemulmoa.co.kr/nariya/js/jquery.form.min.js?ver=221017"></script>
<script src="https://maemulmoa.co.kr/nariya/app/custom-file-input/bs-custom-file-input.min.js?ver=221017"></script>
</head>
<body class="responsive is-round">

<style>
.nt-container { max-width:1300px; }
.nt-container-wide { max-width:1980px; }
.boxed.wrapper, .boxed.wrapper #nt_menu_wrap.me-sticky nav { max-width:1300px; }
.no-responsive .wrapper { min-width:1300px; }

</style>

<div class="wrapper wided min-vh-100">
	<div id="nt_header">

		<!-- 상단 고정 체크 시작 { -->

		<div id="nt_sticky" class="mb-md-3" style="height: 43.69px;">

			<!-- LNB 시작 { -->
			<aside id="nt_lnb" class="d-none d-md-block f-sm font-weight-normal">
				<h3 class="sr-only">상단 네비</h3>
				<div class="nt-container px-xl-0 clearfix pt-3 px-3 px-sm-4 mb-3">
					<!-- LNB Left -->
					
					<!-- LNB Right -->
					<ul class="float-right">
											<li><a href="https://maemulmoa.co.kr/bbs/login.php?url=%2Fbbs%2Fcontent.php%3Fco_id%3Dmap" onclick="sidebar('login'); return false;">로그인</a></li>
						<li><a href="https://maemulmoa.co.kr/bbs/register.php">회원가입</a></li>
						<li><a href="https://maemulmoa.co.kr/bbs/password_lost.php" class="win_password_lost">정보찾기</a></li>
											<li><a href="https://maemulmoa.co.kr/bbs/faq.php">FAQ</a></li>
						<li><a href="https://maemulmoa.co.kr/bbs/qalist.php">1:1문의</a></li>
																</ul>
				</div>
			</aside>
			<!-- } LNB 끝 -->

			<!-- 모바일 헤더 { -->
			<header id="header_mo" class="d-block d-md-none">
				<div class="px-3 px-sm-4">
					<h3 class="clearfix f-mo font-weight-bold en">
						<a href="https://maemulmoa.co.kr">
							<!-- 모바일 로고 -->
							매물모아						</a>

						
					</h3>
				</div>
			</header>
			<!-- } 모바일 헤더 끝 -->

			<!-- 상단고정 시작 { -->
			<div id="nt_sticky_wrap" class="bg-white me-sticky">
				<!-- PC 헤더 시작 { -->
				<header id="header_pc" class="d-none d-md-block">
					<div class="nt-container px-xl-0 py-2 px-3 px-sm-4">
						<div class="d-flex">
							<div class="align-self-center">

								<a href="https://maemulmoa.co.kr">
									<!-- PC 로고 이미지 -->
									<img id="logo_img" src="https://maemulmoa.co.kr/theme/Simple-A/img/logo.png" alt="매물모아" class="d-block header-logo">
								</a>

								<div class="positition-absolute">
									<!-- 로고 영역 밀림 방지용 이미지 -->
									<img src="https://maemulmoa.co.kr/theme/Simple-A/img/blank.gif" width="220" height="0" alt="Blank" class="d-block">
								</div>
							</div>
							<div class="align-self-center w-100 px-3">
								<!-- 상단 메뉴 시작 { -->
								
<style>
	#nt_menu .me-sw { width:150px; }
		.nt-menu .sub-1div {
		left:50% !important;
		margin-left: -75px;
	}
	</style>

<!-- PC 상단 메뉴 -->
<nav id="nt_menu" class="nt-menu d-none d-md-block font-weight-normal">
	<h3 class="sr-only">메인 메뉴</h3>
	<div class="d-flex flex-nowrap">
		<div class="flex-grow-1  me-list">
			<ul class="row m-0 me-ul nav-slide">
							<li class="col p-0 me-li on">
					<a id="me_1" class="d-block" href="https://maemulmoa.co.kr/bbs/content.php?co_id=map" target="_self">
						<span class="me-a text-nowrap f-md en px-4">
							<i class="fa empty" aria-hidden="true"></i>
							매물지도						</span>
					</a>
									</li>
							<li class="col p-0 me-li">
					<a id="me_2" class="d-block" href="https://maemulmoa.co.kr/wooribang/lately_view.php" target="_self">
						<span class="me-a text-nowrap f-md en px-4">
							<i class="fa empty" aria-hidden="true"></i>
							관심목록						</span>
					</a>
									</li>
							<li class="col p-0 me-li">
					<a id="me_3" class="d-block" href="#" target="_self">
						<span class="me-a text-nowrap f-md en px-4">
							<i class="fa empty" aria-hidden="true"></i>
							방내놓기						</span>
					</a>
									</li>
									</ul>
		</div>
	</div>
	<script>
				$(document).ready(function() {
			$('#nt_menu .nav-slide').nariya_menu(); // 주메뉴
					});
	</script>
</nav>

									<!-- } 상단 메뉴 끝 -->
							</div>

						</div>
					</div>
				</header>
				<!-- } PC 헤더 끝 -->

				<!-- 모바일 상단 메뉴 시작 { -->
					
<!-- 모바일 상단 메뉴 -->
<nav id="nt_menu_mobile" class="d-block d-md-none f-de">
	<div class="bg-primary shadow-sm px-3 px-sm-4">
		<div class="na-table d-table w-100">
			<div class="d-table-row">
				<div class="d-table-cell nw-1">
					<a href="javascript:;" onclick="sidebar('menu'); return false;">
						<i class="fa fa-bars fa-md text-white" aria-hidden="true"></i>
						<span class="sr-only">메뉴</span>
					</a>
				</div>
				<div class="d-table-cell">
					<div class="position-relative px-3 px-sm-4" id="mobile_nav" style="overflow: hidden;">
						<ul class="d-flex" style="transform: translateZ(0px); width: 0px;">
													<li class="text-nowrap active">
								<a href="https://maemulmoa.co.kr/bbs/content.php?co_id=map" target="_self" class="f-de d-block px-3 py-2 text-white on">
									<i class="fa empty" aria-hidden="true"></i>
									매물지도								</a>
							</li>
													<li class="text-nowrap">
								<a href="https://maemulmoa.co.kr/wooribang/lately_view.php" target="_self" class="f-de d-block px-3 py-2 text-white">
									<i class="fa empty" aria-hidden="true"></i>
									관심목록								</a>
							</li>
													<li class="text-nowrap">
								<a href="#" target="_self" class="f-de d-block px-3 py-2 text-white">
									<i class="fa empty" aria-hidden="true"></i>
									방내놓기								</a>
							</li>
												</ul>
						<div class="gra gra-left-primary"></div>
						<div class="gra gra-right-primary"></div>
						<script>
						$(document).ready(function() {
							// Mobile Menu
							$('#mobile_nav').sly({
								horizontal: 1,
								itemNav: 'basic', //basic
								smart: 1,
								mouseDragging: 1,
								touchDragging: 1,
								releaseSwing: 1,
								startAt: 0,
								speed: 300,
								elasticBounds: 1,
								dragHandle: 1,
								dynamicHandle: 1
							});
							$(window).resize(function(e) {
								$('#mobile_nav').sly('reload');
							});
						});
						</script>
					</div>
				</div>
							</div>
		</div>
	</div>

	<div class="collapse" id="mobile_sub">
		
			</div>
</nav>
				<!-- } 상단 메뉴 끝 -->
			</div>
		</div>
		<!-- } 상단 고정 체크 끝 -->

		<!-- 페이지 타이틀 시작 { -->
			<style>
	.no-responsive #nt_title_flex { min-height:60px; }
	@media all and (min-width:768px) {
		.responsive #nt_title_flex { min-height:60px; }
	}
	@media all and (max-width:767px) {
		.responsive #nt_title_flex { min-height:60px; }
	}
</style>



		<!-- } 페이지 타이틀 끝 -->

	</div><!-- #nt_header -->

	

	
	<div id="nt_body" class="nt-body">
						<div class="nt-container">
					

<article id="ctt" class="ctt_map">
    <header>
        <h1 class="sound_only">매물지도</h1>
    </header>

	<div id="ctt_con">
		<script>$(document).ready(function () { bsCustomFileInput.init(); });</script>
<!-- 클립 모달 시작 { -->
<div class="modal fade" id="clipModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div id="clipModalSize" class="modal-content">
			<div id="clipView"></div>
		</div>
	</div>
</div>
<!-- } 클립 모달 끝 -->

<!-- 업로드 모달 시작 { -->
<div class="modal fade" id="na_upload" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<form id="na_upload_form" action="https://maemulmoa.co.kr/nariya/bbs/upload.php" method="post" enctype="multipart/form-data">
					<div class="custom-file mb-3">
						<input type="file" name="na_file" class="custom-file-input" id="na_upload_file">
						<label class="custom-file-label" for="na_upload_file" data-browse="File">Select File</label>
					</div>
					<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-upload"></i> Upload File</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
 $(function(){
	$('#na_upload_form').ajaxForm({
		beforeSubmit: function () {
			var chkFile = $("input[name='na_file']").val();

			if(!chkFile) {
				alert("업로드 할 파일을 선택해 주세요.");
				return false;
			}

			var chkExt = chkFile.split('.').pop().toLowerCase();

			if($.inArray(chkExt, ['gif','png','jpg','jpeg']) == -1) {
				alert('이미지 파일(JPG/JPEG/GIF/PNG)만 업로드 할 수 있습니다.');
				return false;
			}
		},
		dataType: 'json',
		success: function(data){
			if(data.success) {

				document.getElementById("wr_content").value += '[' + data.success + ']\n';

				$('#na_upload').modal('hide');

				var fileInput = $("input[name='na_file']");

				if ($.browser.msie) { //IE
					fileInput.replaceWith(fileInput.clone(true));
				} else {
					fileInput.val('');
				}
			} else {
				var chkErr = data.error;
				if(!chkErr) {
					chkErr = '오류가 발생하였습니다.';
				}
				alert(chkErr);
				return false;
			}
		},
		error: function(){
			alert('오류가 발생하였습니다.');
		}                               
	});
});
</script>
<!-- } 업로드 모달 끝 --><style>
    #map_search_btn {width:100%;font-size: 18px;font-weight: bold;background-color: #3B8DE0;border-radius: 5px;margin: 10px 0 20px 0;padding:10px 0;outline:0;border:1px solid #aaa;}
</style>
	<link rel="stylesheet" href="https://maemulmoa.co.kr/anb/dmap/css/map.css?time=1677713274">
	<script src="//dapi.kakao.com/v2/maps/sdk.js?appkey=cb200fd1b99c0df4ff849d039080439c&amp;libraries=services,clusterer"></script><script charset="UTF-8" src="https://t1.daumcdn.net/mapjsapi/js/main/4.4.8/kakao.js"></script><script charset="UTF-8" src="https://t1.daumcdn.net/mapjsapi/js/libs/services/1.0.2/services.js"></script><script charset="UTF-8" src="https://t1.daumcdn.net/mapjsapi/js/libs/clusterer/1.0.9/clusterer.js"></script>
	<script src="https://maemulmoa.co.kr/anb/dmap/js/dmap.js?time=1677713274"></script>
	<script src="https://maemulmoa.co.kr/anb/dmap/js/dmap_property.js?time=1677713274"></script>
	<link rel="stylesheet" href="https://maemulmoa.co.kr/js/noUiSlider/nouislider.css">
	<script src="https://maemulmoa.co.kr/js/noUiSlider/nouislider.js"></script>

	<div class="page-content2"><!-- style="float:left;width: 100%;"-->
		<div id="map-area" class="map-area">
			<div id="map" class="map" style="width: 100%; height: 100%; display: block; font-size: 16px; position: relative; overflow: hidden; background: url(&quot;https://t1.daumcdn.net/mapjsapi/images/bg_tile.png&quot;); opacity: 1;">
				<div class="mapLoading" style="opacity: 0; z-index: 999; display: none;">
					<div class="mapLoading-bg"></div>
					<div class="mapLoading-icon"></div>
				</div>
			<div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%; touch-action: none; cursor: url(&quot;https://t1.daumcdn.net/mapjsapi/images/cursor/openhand.cur.ico&quot;) 7 5, url(&quot;https://t1.daumcdn.net/mapjsapi/images/cursor/openhand.cur.ico&quot;), default;"><div style="position: absolute;"><div style="position: absolute; z-index: 0;"></div><div style="position: absolute; z-index: 1; left: 0px; top: 0px;"><img src="https://map0.daumcdn.net/map_2d/2212ejo/L8/28/48.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: -105px; top: 805px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map1.daumcdn.net/map_2d/2212ejo/L8/28/49.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 151px; top: 805px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map2.daumcdn.net/map_2d/2212ejo/L8/28/50.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 407px; top: 805px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map3.daumcdn.net/map_2d/2212ejo/L8/28/51.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 663px; top: 805px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map0.daumcdn.net/map_2d/2212ejo/L8/28/52.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 919px; top: 805px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map1.daumcdn.net/map_2d/2212ejo/L8/28/53.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 1175px; top: 805px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map2.daumcdn.net/map_2d/2212ejo/L8/28/54.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 1431px; top: 805px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map0.daumcdn.net/map_2d/2212ejo/L8/29/48.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: -105px; top: 549px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map1.daumcdn.net/map_2d/2212ejo/L8/29/49.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 151px; top: 549px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map2.daumcdn.net/map_2d/2212ejo/L8/29/50.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 407px; top: 549px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map3.daumcdn.net/map_2d/2212ejo/L8/29/51.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 663px; top: 549px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map0.daumcdn.net/map_2d/2212ejo/L8/29/52.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 919px; top: 549px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map1.daumcdn.net/map_2d/2212ejo/L8/29/53.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 1175px; top: 549px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map2.daumcdn.net/map_2d/2212ejo/L8/29/54.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 1431px; top: 549px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map0.daumcdn.net/map_2d/2212ejo/L8/30/48.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: -105px; top: 293px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map1.daumcdn.net/map_2d/2212ejo/L8/30/49.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 151px; top: 293px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map2.daumcdn.net/map_2d/2212ejo/L8/30/50.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 407px; top: 293px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map3.daumcdn.net/map_2d/2212ejo/L8/30/51.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 663px; top: 293px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map0.daumcdn.net/map_2d/2212ejo/L8/30/52.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 919px; top: 293px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map1.daumcdn.net/map_2d/2212ejo/L8/30/53.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 1175px; top: 293px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map2.daumcdn.net/map_2d/2212ejo/L8/30/54.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 1431px; top: 293px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map0.daumcdn.net/map_2d/2212ejo/L8/31/48.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: -105px; top: 37px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map1.daumcdn.net/map_2d/2212ejo/L8/31/49.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 151px; top: 37px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map2.daumcdn.net/map_2d/2212ejo/L8/31/50.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 407px; top: 37px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map3.daumcdn.net/map_2d/2212ejo/L8/31/51.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 663px; top: 37px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map0.daumcdn.net/map_2d/2212ejo/L8/31/52.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 919px; top: 37px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map1.daumcdn.net/map_2d/2212ejo/L8/31/53.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 1175px; top: 37px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map2.daumcdn.net/map_2d/2212ejo/L8/31/54.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 1431px; top: 37px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map0.daumcdn.net/map_2d/2212ejo/L8/32/48.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: -105px; top: -219px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map1.daumcdn.net/map_2d/2212ejo/L8/32/49.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 151px; top: -219px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map2.daumcdn.net/map_2d/2212ejo/L8/32/50.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 407px; top: -219px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map3.daumcdn.net/map_2d/2212ejo/L8/32/51.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 663px; top: -219px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map0.daumcdn.net/map_2d/2212ejo/L8/32/52.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 919px; top: -219px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map1.daumcdn.net/map_2d/2212ejo/L8/32/53.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 1175px; top: -219px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"><img src="https://map2.daumcdn.net/map_2d/2212ejo/L8/32/54.png" alt="" role="presentation" draggable="false" style="position: absolute; user-select: none; -webkit-user-drag: none; min-width: 0px; min-height: 0px; max-width: none; max-height: none; left: 1431px; top: -219px; opacity: 1; transition-property: opacity; transition-duration: 0.2s; transition-timing-function: ease; width: 256px; height: 256px;"></div><div style="position: absolute; z-index: 1;"></div><div style="position: absolute; z-index: 1; width: 1017px; height: 896px;"></div><div style="position: absolute; z-index: 1;"><svg version="1.1" style="stroke: none; stroke-dashoffset: 0.5; stroke-linejoin: round; fill: none; transform: translateZ(0px); position: absolute; left: -2034px; top: -1792px; width: 5085px; height: 4480px;" viewBox="0 0 5085 4480"><defs></defs></svg></div><div style="position: absolute; z-index: 1; width: 100%; height: 0px; transform: translateZ(0px);"><div style="position: absolute; z-index: 0; white-space: nowrap; margin: -25px 0px 0px -25px; left: 720px; top: 456px;"><div style="cursor: pointer; width: 50px; height: 50px; border-radius: 50px; background: rgba(246, 162, 98, 0.8); color: rgb(255, 255, 255); text-align: center; font-weight: bold; line-height: 46px;">16</div></div></div></div></div><div style="position: absolute; cursor: default; z-index: 1; margin: 0px 6px; height: 19px; line-height: 14px; left: 0px; bottom: 0px; color: rgb(0, 0, 0);"><div style="color: rgb(0, 0, 0); text-align: center; font-size: 10px; float: left;"><div style="float: left; margin: 2px 3px 0px 4px; height: 6px; transition: width 0.1s ease 0s; border-top: none rgb(0, 0, 0); border-right: 2px solid rgb(0, 0, 0); border-bottom: 2px solid rgb(0, 0, 0); border-left: 2px solid rgb(0, 0, 0); border-image: initial; width: 58px;"></div><div style="float: left; margin: 0px 4px 0px 0px; font-family: AppleSDGothicNeo-Regular, 돋움, dotum, sans-serif; font-weight: bold; color: rgb(0, 0, 0);">2km</div></div><div style="margin: 0px 4px; float: left;"><a target="_blank" href="http://map.kakao.com/" title="Kakao 지도로 보시려면 클릭하세요." style="float: left; width: 32px; height: 10px;"><img src="https://t1.daumcdn.net/mapjsapi/images/m_bi_b.png" alt="Kakao 지도로 이동" style="float: left; width: 32px; height: 10px; border: none;"></a><div style="font: 11px / 11px Arial, Tahoma, Dotum, sans-serif; float: left;"></div></div></div><div style="cursor: auto; position: absolute; z-index: 2; left: 0px; top: 0px;"><div style="width: 106px; height: 32px; box-sizing: content-box; background-color: rgb(255, 255, 255); padding: 2px; border-radius: 3px; box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 2px 0px; position: absolute; left: 904px; top: 3px;"><button draggable="false" title="지도" type="button" style="float: left; cursor: default; width: 43px; height: 32px; user-select: none; -webkit-user-drag: none; border: none; background: url(&quot;https://t1.daumcdn.net/mapjsapi/images/control.png&quot;) -5px -183px / 116px 264px no-repeat; color: rgb(255, 255, 255); font-weight: bold;"></button><button draggable="false" title="스카이뷰" type="button" style="float: left; cursor: pointer; width: 63px; height: 32px; user-select: none; -webkit-user-drag: none; border: none; background: url(&quot;https://t1.daumcdn.net/mapjsapi/images/control.png&quot;) -48px -183px / 116px 264px no-repeat; color: rgb(0, 0, 0); font-weight: normal;"></button></div><div style="width: 32px; border-radius: 3px; box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 2px 0px; position: absolute; left: 982px; top: 42px;"><button draggable="false" title="확대" type="button" style="float: left; cursor: pointer; width: 32px; height: 32px; user-select: none; -webkit-user-drag: none; border-top: none; border-right: none; border-bottom: 1px solid rgb(226, 226, 226); border-left: none; border-image: initial; background: url(&quot;https://t1.daumcdn.net/mapjsapi/images/control.png&quot;) -40px 0px / 116px 264px no-repeat rgb(255, 255, 255); border-radius: 3px 3px 0px 0px;"></button><div style="float: left; background: url(&quot;https://t1.daumcdn.net/mapjsapi/images/bg_zoom_control.png&quot;) repeat; padding: 7px 0px; transition: height 0s ease 0s, margin 0.1s ease 0s;"><div style="cursor: pointer; position: relative; background-size: 116px 264px; transition: height 0.1s ease 0s; margin: 2px 0px; display: block; width: 32px; height: 56px;"><div style="position: absolute; width: 4px; height: 100%; background-color: rgb(51, 150, 255); left: 50%; margin: 0px 0px 0px -2px;"><div style="width: 4px; height: 2px; margin-bottom: -2px; bottom: 0px; position: absolute; background: url(&quot;https://t1.daumcdn.net/mapjsapi/images/control.png&quot;) -50px -127px / 116px 264px;"></div><div style="width: 4px; height: 2px; margin-top: -2px; top: 0px; position: absolute; background: url(&quot;https://t1.daumcdn.net/mapjsapi/images/control.png&quot;) -40px -100px / 116px 264px;"></div></div><div style="position: absolute; background-color: rgb(204, 204, 204); transition: height 0.1s ease 0s; left: 50%; margin: 0px 0px 0px -2px; width: 4px; height: 32px;"></div><div style="cursor: row-resize; position: absolute; width: 20px; height: 10px; margin: -4px 0px 0px -10px; background: url(&quot;https://t1.daumcdn.net/mapjsapi/images/control.png&quot;) -40px -80px / 116px 264px; left: 50%; transition: top 0.1s ease 0s; top: 32px;"></div></div></div><button draggable="false" title="축소" type="button" style="float: left; cursor: pointer; width: 32px; height: 32px; user-select: none; -webkit-user-drag: none; border-top: 1px solid rgb(226, 226, 226); border-right: none; border-bottom: none; border-left: none; border-image: initial; background: url(&quot;https://t1.daumcdn.net/mapjsapi/images/control.png&quot;) -40px -32px / 116px 264px no-repeat rgb(255, 255, 255); border-radius: 0px 0px 3px 3px; margin: 0px;"></button><div style="display: none; position: absolute; margin: 41px 0px 0px -30px; background-size: 116px 264px; width: 30px; height: 56px;"><div style="position: absolute; width: 29px; height: 15px; margin: -6px 0px 0px; background: url(&quot;https://t1.daumcdn.net/mapjsapi/images/control.png&quot;) 0px -100px / 116px 264px; left: 0px; top: 8px;"></div><div style="position: absolute; width: 29px; height: 15px; margin: -6px 0px 0px; background: url(&quot;https://t1.daumcdn.net/mapjsapi/images/control.png&quot;) 0px -120px / 116px 264px; left: 0px; top: 40px;"></div><div style="position: absolute; width: 29px; height: 15px; margin: -6px 0px 0px; background: url(&quot;https://t1.daumcdn.net/mapjsapi/images/control.png&quot;) 0px -140px / 116px 264px; left: 0px; top: 56px;"></div></div></div></div></div>
		</div>
		<div class="map-content List map-page" id="map-content">
			<div class="ListOutWrap">
				<div class="ListInfo Item-info clearfix">
					
					<span class="filter_title">조건 검색</span>
					<i class="filter_icon fa fa-caret-down" aria-hidden="true"></i>
					<span class="icon-text">
						<span> </span>
						<span></span>
						<span id="Rlist_result_title"> 검색결과 </span>
						<strong id="Rlist_result_cnt">16</strong>
						<span>개</span>
					</span>

					<!-- ListInfo -->
									</div>
				<div class="filter_list">

					<div class="container">

						<div class="row">
					    <div class="col-12">
								<p>
								  <label class="sel_deposit_title" for="sel_deposit_txt">보증금</label>
									<span class="sel_deposit_txt"></span>
								  <input type="text" id="sel_deposit" readonly="" style="border:0; color:#f6931f; font-weight:bold;">
								</p>
								<input type="hidden" id="deposit_sel_1" value="0">
								<input type="hidden" id="deposit_sel_2" value="10000000000">
								<div id="deposit-range" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="29.0" aria-valuenow="0.0" aria-valuetext="0원"><div class="noUi-touch-area"></div></div></div><div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="29.0" aria-valuenow="29.0" aria-valuetext="100억원"><div class="noUi-touch-area"></div></div></div></div><div class="noUi-pips noUi-pips-horizontal"><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 0%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="0" style="left: 0%;">0원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 3.44828%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="1" style="left: 3.44828%;">500만</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 6.89655%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="2" style="left: 6.89655%;">1천만</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 10.3448%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="3" style="left: 10.3448%;">2천만</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 13.7931%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="4" style="left: 13.7931%;">3천만</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 17.2414%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="5" style="left: 17.2414%;">4천만</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 20.6897%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="6" style="left: 20.6897%;">5천만</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 24.1379%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="7" style="left: 24.1379%;">6천만</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 27.5862%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="8" style="left: 27.5862%;">7천만</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 31.0345%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="9" style="left: 31.0345%;">8천만</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 34.4828%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="10" style="left: 34.4828%;">9천만</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 37.931%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="11" style="left: 37.931%;">1억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 41.3793%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="12" style="left: 41.3793%;">2억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 44.8276%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="13" style="left: 44.8276%;">3억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 48.2759%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="14" style="left: 48.2759%;">4억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 51.7241%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="15" style="left: 51.7241%;">5억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 55.1724%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="16" style="left: 55.1724%;">6억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 58.6207%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="17" style="left: 58.6207%;">7억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 62.069%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="18" style="left: 62.069%;">8억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 65.5172%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="19" style="left: 65.5172%;">9억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 68.9655%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="20" style="left: 68.9655%;">10억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 72.4138%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="21" style="left: 72.4138%;">20억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 75.8621%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="22" style="left: 75.8621%;">30억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 79.3103%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="23" style="left: 79.3103%;">40억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 82.7586%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="24" style="left: 82.7586%;">50억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 86.2069%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="25" style="left: 86.2069%;">60억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 89.6552%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="26" style="left: 89.6552%;">70억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 93.1034%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="27" style="left: 93.1034%;">80억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 96.5517%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="28" style="left: 96.5517%;">90억원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 100%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="29" style="left: 100%;">100억원</div></div></div>
							</div>
					  </div>
						<div class="row">
							<div class="col-12">
								<p>
								  <label class="sel_monthly_title" for="sel_monthly_txt">월세</label>
									<span class="sel_monthly_txt"></span>
								  <input type="text" id="sel_monthly" readonly="" style="border:0; color:#f6931f; font-weight:bold;">
								</p>
								<input type="hidden" id="monthly_sel_1" value="0">
								<input type="hidden" id="monthly_sel_2" value="5000000">
								<div id="monthly-range" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"></div><div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="15.0" aria-valuenow="0.0" aria-valuetext="0원"><div class="noUi-touch-area"></div></div></div><div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="15.0" aria-valuenow="15.0" aria-valuetext="500만원"><div class="noUi-touch-area"></div></div></div></div><div class="noUi-pips noUi-pips-horizontal"><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 0%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="0" style="left: 0%;">0원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 6.66667%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="1" style="left: 6.66667%;">10만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 13.3333%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="2" style="left: 13.3333%;">20만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 20%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="3" style="left: 20%;">30만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 26.6667%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="4" style="left: 26.6667%;">40만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 33.3333%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="5" style="left: 33.3333%;">50만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 40%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="6" style="left: 40%;">60만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 46.6667%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="7" style="left: 46.6667%;">70만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 53.3333%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="8" style="left: 53.3333%;">80만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 60%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="9" style="left: 60%;">90만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 66.6667%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="10" style="left: 66.6667%;">100만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 73.3333%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="11" style="left: 73.3333%;">150만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 80%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="12" style="left: 80%;">200만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 86.6667%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="13" style="left: 86.6667%;">300만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-sub" style="left: 93.3333%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-sub" data-value="14" style="left: 93.3333%;">400만원</div><div class="noUi-marker noUi-marker-horizontal noUi-marker-large" style="left: 100%;"></div><div class="noUi-value noUi-value-horizontal noUi-value-large" data-value="15" style="left: 100%;">500만원</div></div></div>
							</div>
					  </div>
						<div class="row property_type_box">
					    <div class="col-3">매물 타입</div>
					    <div class="col-9">
								<div class="row">
							    <div class="col-6">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="property_type[]" id="property_type_1" value="oneroom" class="custom-control-input property_type">
											<label class="custom-control-label" for="property_type_1">원룸</label>
										</div>
									</div>
							    <div class="col-6">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="property_type[]" id="property_type_2" value="tworoom" class="custom-control-input property_type">
											<label class="custom-control-label" for="property_type_2">투룸</label>
										</div>
									</div>
							  </div>
								<div class="row">
							    <div class="col-6">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="property_type[]" id="property_type_3" value="threeroom" class="custom-control-input property_type">
											<label class="custom-control-label" for="property_type_3">쓰리룸 이상</label>
										</div>
									</div>
							    <div class="col-6">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="property_type[]" id="property_type_4" value="officetel" class="custom-control-input property_type">
											<label class="custom-control-label" for="property_type_4">오피스텔</label>
										</div>
									</div>
							  </div>

								<div class="row">
							    <div class="col-6">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="property_type[]" id="property_type_5" value="aptvila" class="custom-control-input property_type">
											<label class="custom-control-label" for="property_type_5">아파트,빌라</label>
										</div>
									</div>
									<div class="col-6">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="property_type[]" id="property_type_6" value="profit" class="custom-control-input property_type">
											<label class="custom-control-label" for="property_type_6">수익형 부동산</label>
										</div>
									</div>
							  </div>
							</div>
					  </div>

						<div class="row property_sel_box">
					    <div class="col-3">매물 종류</div>
					    <div class="col-9">
								<div class="row">
									<div class="col-4">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="property_sel[]" id="property_sel_1" value="monthlyrent" class="custom-control-input property_sel">
											<label class="custom-control-label" for="property_sel_1">월세</label>
										</div>
									</div>
									<div class="col-4">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="property_sel[]" id="property_sel_2" value="charter" class="custom-control-input property_sel">
											<label class="custom-control-label" for="property_sel_2">전세</label>
										</div>
									</div>
									<div class="col-4">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="property_sel[]" id="property_sel_3" value="trade" class="custom-control-input property_sel">
											<label class="custom-control-label" for="property_sel_3">매매</label>
										</div>
									</div>
								</div>
                        </div>
					  </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="text-white" id="map_search_btn">검색</button>
                            </div>
                        </div>
					</div>
				</div>
				<div class="ListWrap list-wrap" style="opacity: 1;">
					<noscript></noscript>
					<div class="AreaItem new-rooms clearfix">

						<ul class="Item-tree features">

							<ul class="Item-list items">

								<li class="Item-item" data-position-vale="35.1817094982948,129.075177354898 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=8&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/25/230125010001/thumb-1_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">test</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 1369-9 </span>					</span>					<div class="Item-types types">						<span class="tag">3 </span>						<span class="tag">2 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.182036501106,129.074937058194 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=11&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/25/230125010003/thumb-1_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">6</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 1502-18 </span>					</span>					<div class="Item-types types">						<span class="tag">6 </span>						<span class="tag">6 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.1822582197088,129.075171660948 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=17&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/25/230125010009/thumb-1_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">10</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 1502-12 </span>					</span>					<div class="Item-types types">						<span class="tag">10 </span>						<span class="tag">10 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.1826700125908,129.076287998518 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=10&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/25/230125020001/thumb-1_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">5</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 1356-12 </span>					</span>					<div class="Item-types types">						<span class="tag">5 </span>						<span class="tag">4 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.1814653198192,129.077061901219 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=9&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/25/230125010002/thumb-1_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">4</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 1359-2 </span>					</span>					<div class="Item-types types">						<span class="tag">4 </span>						<span class="tag">3 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.1809627379474,129.072819027629 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=13&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/25/230125010005/thumb-1_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">7</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 1507-11 </span>					</span>					<div class="Item-types types">						<span class="tag">7 </span>						<span class="tag">6 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.1815057583413,129.077520197915 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=14&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/25/230125010006/thumb-1_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">8</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 2063-15 </span>					</span>					<div class="Item-types types">						<span class="tag">8 </span>						<span class="tag">7 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.1805207720585,129.077778853934 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=18&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/25/230125010010/thumb-1_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">11</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 1328-15 </span>					</span>					<div class="Item-types types">						<span class="tag">11 </span>						<span class="tag">11 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.1817574219985,129.077558655207 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=7&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/25/230125040001/thumb-2_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">넓은 오피스텔</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 1341-7 </span>					</span>					<div class="Item-types types">						<span class="tag">1/1 </span>						<span class="tag">12 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.182621940007,129.077267510183 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=12&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/25/230125010004/thumb-1_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">7</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 1492-3 </span>					</span>					<div class="Item-types types">						<span class="tag">7 </span>						<span class="tag">6 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.1811300773035,129.078916016831 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=15&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/25/230125010007/thumb-1_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">9</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 1310-87 </span>					</span>					<div class="Item-types types">						<span class="tag">9 </span>						<span class="tag">8 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.1816318770597,129.079821603036 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=16&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/25/230125010008/thumb-1_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">9</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 1310-29 </span>					</span>					<div class="Item-types types">						<span class="tag">9 </span>						<span class="tag">8 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.1778120025361,129.080800424088 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=6&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/18/230118030001/thumb-3_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">귀한 쓰리룸 월세</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 806-1 </span>					</span>					<div class="Item-types types">						<span class="tag">3/1 </span>						<span class="tag">17 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.1740669999829,129.070237710413 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=4&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/12/230111010001/thumb-6_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">예쁜 원룸</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 부산진구 양정동 406-4 </span>					</span>					<div class="Item-types types">						<span class="tag">1/1 </span>						<span class="tag">20 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.1799113939304,129.081127250395 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=5&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/18/230118020001/thumb-1_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">예쁜 투룸 전세</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 1646-33 </span>					</span>					<div class="Item-types types">						<span class="tag">2/1 </span>						<span class="tag">20 ㎡</span>					</div>					<span class="Item-title">우리방(010-1234-5678) </span>				</div>			</div>		</a>	</li>	<li class="Item-item" data-position-vale="35.1771966414017,129.081726112157 " id="undefined">		<a href="//maemulmoa.co.kr/bbs/board.php?bo_table=property&amp;wr_id=1&amp;view_type=modal " onclick="na_iframe(this.href); return false;">			<div class="Item-preview">				<div class="Item-preview_mask">					<div class="Item-preview_image"></div>					<div class="Item-preview_image" style="background-image:url(https://maemulmoa.co.kr/data/property/2023/01/12/230110010001/thumb-5_400x225.jpg);"></div>					<div class="Item-preview_cover"></div>				</div>			</div>			<div class="Item-detail">				<div class="Item-info">					<div class="Itemlist-header">						<div class="Item-price">							<p>								<span class="Item-name">123123</span>							</p>						</div>						<span class="Item-visited">							<i class="anb-icon"></i>						</span>						<div class="Item-icons">							<span class="Item-favorite">								<i class="anb-icon anb-icon-heart-o icon-size-2xl"></i>							</span>						</div>					</div>					<span class="Item-summary">						<span>부산 연제구 연산동 808-59 </span>					</span>					<div class="Item-types types">						<span class="tag">123 </span>						<span class="tag">123 ㎡</span>					</div>					<span class="Item-title">123(123) </span>				</div>			</div>		</a>	</li></ul>

						</ul>
					</div>
				</div>
			</div>

			<!--리스트페이징S-->
			<div class="ListPagination pagination-wrap">

			</div>
			<!--리스트페이징E-->

			<!--로딩S-->
			<div class="ListLoading" style="opacity: 0; z-index: -1;">
				<div class="ListLoading-bg"></div>
				<div class="ListLoading-icon"></div>
			</div>
			<!--로딩E-->

		</div>
	</div>

	<script>
		$(document).ready(function(){

			initMap("35.179736","129.075101","8","4","11","0","10000000000","0","5000000","","","","","","","","","","","","");

			window.state.bo_table = "property";
			window.state.paging_cnt = "5";
			window.state.list_cnt = "20";
			window.state.siteUrl = "https://maemulmoa.co.kr/anb/dmap";
			window.state.list_target = "modal";
			window.state.Maptype = "none";
			window.state.listcount = "100";

			window.state.deposit_start = "0";
			window.state.deposit_end = "10000000000";
			window.state.monthly_start = "0";
			window.state.monthly_end = "5000000";
			window.state.property_type = "";
			window.state.property_sel = "";

			window.state.map_filed_1 = "";
			window.state.map_filed_2 = "";
			window.state.map_filed_3 = "";
			window.state.map_filed_4 = "";
			window.state.map_filed_5 = "";
			window.state.map_filed_6 = "";
			window.state.map_filed_7 = "";
			window.state.map_filed_8 = "";
			window.state.map_filed_9 = "";
			window.state.map_filed_10 = "";

			load();

		});



	</script>

	</div>
<script>
	$(document).on('click','.ListInfo',function(){
		var check = $('.filter_icon').hasClass('fa-caret-down');
		if(check == true){
			$('.filter_icon').removeClass('fa-caret-down');
			$('.filter_icon').addClass('fa-caret-up');
			$('.filter_list').slideDown();
		}else{
			$('.filter_icon').removeClass('fa-caret-up');
			$('.filter_icon').addClass('fa-caret-down');
			$('.filter_list').slideUp();
		}
	});

</script>
<script>
	var arbitraryValuesSlider = document.getElementById('deposit-range');
	var arbitraryValuesForSlider = [0,5000000,10000000,20000000,30000000,40000000,50000000,60000000,70000000,80000000,90000000,100000000,200000000,300000000,400000000,500000000,600000000,700000000,800000000,900000000,1000000000,2000000000,3000000000,4000000000,5000000000,6000000000,7000000000,8000000000,9000000000,10000000000];
	var arbitraryValuesForSlider_txt = ['0원','500만','1천만','2천만','3천만','4천만','5천만','6천만','7천만','8천만','9천만','1억원','2억원','3억원','4억원','5억원','6억원','7억원','8억원','9억원','10억원','20억원','30억원','40억원','50억원','60억원','70억원','80억원','90억원','100억원'];
	var format = {
	    to: function(value) {
	        return arbitraryValuesForSlider_txt[Math.round(value)];
	    },
	    from: function (value) {
	        return arbitraryValuesForSlider_txt.indexOf(value);
	    }
	};

	var deposit_start = 0;
	var deposit_end = 10000000000;
	var deposit_start_idx = arbitraryValuesForSlider.indexOf(deposit_start);
	var deposit_end_idx = arbitraryValuesForSlider.indexOf(deposit_end);
	noUiSlider.create(arbitraryValuesSlider, {
	    // start values are parsed by 'format'
	    start: [arbitraryValuesForSlider_txt[deposit_start_idx], arbitraryValuesForSlider_txt[deposit_end_idx]],
	    range: { min: 0, max: arbitraryValuesForSlider_txt.length - 1 },
	    step: 1,
	    tooltips: false,
	    format: format,
	    pips: { mode: 'steps', format: format, density: 50 },
	});


	var formatValues = [document.getElementById('deposit_sel_1'), document.getElementById('deposit_sel_2')];

	arbitraryValuesSlider.noUiSlider.on('update', function (values, handle, unencoded) {
		var tmp_handle = Math.round(unencoded[handle]);
		var tmp_value = arbitraryValuesForSlider[tmp_handle];
		$('#sel_deposit').val(values[0]+' ~ '+values[1]);
    // formatValues[handle].value = values[handle] + 'No format: ' + tmp_value;
		formatValues[handle].value = tmp_value;

		// map_data_check();

	});


	var arbitraryValuesSlider2 = document.getElementById('monthly-range');
	var arbitraryValuesForSlider2 = [0,100000,200000,300000,400000,500000,600000,700000,800000,900000,1000000,1500000,2000000,3000000,4000000,5000000];
	var arbitraryValuesForSlider2_txt = ['0원','10만원','20만원','30만원','40만원','50만원','60만원','70만원','80만원','90만원','100만원','150만원','200만원','300만원','400만원','500만원'];

	var format2 = {
	    to: function(value) {
	        return arbitraryValuesForSlider2_txt[Math.round(value)];
	    },
	    from: function (value) {
	        return arbitraryValuesForSlider2_txt.indexOf(value);
	    }
	};

	var monthly_start = 0;
	var monthly_end = 5000000;
	var monthly_start_idx = arbitraryValuesForSlider2.indexOf(monthly_start);
	var monthly_end_idx = arbitraryValuesForSlider2.indexOf(monthly_end);
	noUiSlider.create(arbitraryValuesSlider2, {
	    // start values are parsed by 'format'
			start: [arbitraryValuesForSlider2_txt[monthly_start_idx],arbitraryValuesForSlider2_txt[monthly_end_idx]],
	    range: { min: 0, max: arbitraryValuesForSlider2_txt.length - 1 },
	    step: 1,
	    tooltips: false,
	    format: format2,
	    pips: { mode: 'steps', format: format2, density: 50 },
	});


	var formatValues2 = [document.getElementById('monthly_sel_1'), document.getElementById('monthly_sel_2')];

	arbitraryValuesSlider2.noUiSlider.on('update', function (values, handle, unencoded) {
		var tmp_handle = Math.round(unencoded[handle]);
		var tmp_value = arbitraryValuesForSlider2[tmp_handle];
		$('#sel_monthly').val(values[0]+' ~ '+values[1]);
    // formatValues[handle].value = values[handle] + 'No format: ' + tmp_value;
		formatValues2[handle].value = tmp_value;

		// map_data_check();
	});

	//$(document).on('click','.property_type',function(){
	//	map_data_check();
	//});

	// $(document).on('click','.property_sel',function(){
	// 	map_data_check();
	// });

	//function map_data_check(){
	//	var deposit_start = $('#deposit_sel_1').val();
	//	var deposit_end = $('#deposit_sel_2').val();
    //
	//	var monthly_start = $('#monthly_sel_1').val();
	//	var monthly_end = $('#monthly_sel_2').val();
    //
	//	var send_array = Array();
	//	var send_cnt = 0;
	//	var chkbox = $(".property_type");
    //
	//	for(i=0;i<chkbox.length;i++) {
	//	    if (chkbox[i].checked == true){
	//	        send_array[send_cnt] = chkbox[i].value;
	//	        send_cnt++;
	//	    }
	//	}
    //
	//	var send_array2 = Array();
	//	var send_cnt2 = 0;
	//	var chkbox2 = $(".property_sel");
    //
	//	for(i=0;i<chkbox2.length;i++) {
	//	    if (chkbox2[i].checked == true){
	//	        send_array2[send_cnt2] = chkbox2[i].value;
	//	        send_cnt2++;
	//	    }
	//	}
    //
	//	var map_filed_1 = "";
	//	var map_filed_2 = "";
	//	var map_filed_3 = "";
	//	var map_filed_4 = "";
	//	var map_filed_5 = "";
	//	var map_filed_6 = "";
	//	var map_filed_7 = "";
	//	var map_filed_8 = "";
	//	var map_filed_9 = "";
	//	var map_filed_10 = "";
    //
	//	//initMap("//","//","//","//","//",deposit_start,deposit_end,monthly_start,monthly_end,send_array,send_array2,map_filed_1,map_filed_2,map_filed_3,map_filed_4,map_filed_5,map_filed_6,map_filed_7,map_filed_8,map_filed_9,map_filed_10);
    //
	//	window.state.bo_table = "//";
	//	window.state.paging_cnt = "//";
	//	window.state.list_cnt = "//";
	//	window.state.siteUrl = "//";
	//	window.state.list_target = "//";
	//	window.state.Maptype = "//";
	//	window.state.listcount = "//";
    //
	//	window.state.deposit_start = deposit_start
	//	window.state.deposit_end = deposit_end
	//	window.state.monthly_start = monthly_start
	//	window.state.monthly_end = monthly_end
	//	window.state.property_type = send_array;
	//	window.state.property_sel = send_array2;
    //
	//	window.state.map_filed_1 = map_filed_1;
	//	window.state.map_filed_2 = map_filed_2;
	//	window.state.map_filed_3 = map_filed_3;
	//	window.state.map_filed_4 = map_filed_4;
	//	window.state.map_filed_5 = map_filed_5;
	//	window.state.map_filed_6 = map_filed_6;
	//	window.state.map_filed_7 = map_filed_7;
	//	window.state.map_filed_8 = map_filed_8;
	//	window.state.map_filed_9 = map_filed_9;
	//	window.state.map_filed_10 = map_filed_10;
    //
	//	load();
	//}
</script>
    </article></div>

					</div><!-- .nt-container -->
		</div><!-- .nt-body -->

	
			<div class="position-relative mask-show">
			<div class="border-top"></div>		</div>
	
	<!-- .wrapper -->


<aside id="nt_sidebar" class="bg-light font-weight-normal">

	<!-- Top Head -->
	<div id="nt_sidebar_header" class="sidebar-head na-shadow bg-primary px-3 mb-0">
		<h3 class="clearfix f-mo font-weight-bold en">
			<a href="https://maemulmoa.co.kr" class="text-white">
				매물모아			</a>
			<a href="javascript:;" class="float-right sidebar-close" title="닫기">
				<i class="fa fa-times text-white" aria-hidden="true"></i>
				<span class="sr-only">닫기</span>
			</a>
		</h3>
	</div>

	<!-- sidebar-content : 스크롤바 생성을 위해서 -->
	<div id="nt_sidebar_body" class="sidebar-content pb-5" style="min-height: 913px;">

		
		<div class="mt-n1">
							<div class="btn-group w-100" role="group" aria-label="Member Menu">
					<a href="https://maemulmoa.co.kr/bbs/login.php?url=%2Fbbs%2Fcontent.php%3Fco_id%3Dmap" class="btn btn-primary text-white rounded-0" onclick="sidebar('login'); return false;" role="button">
						로그인
					</a>
					<a href="https://maemulmoa.co.kr/bbs/register.php" class="btn btn-primary text-white win" role="button">
						회원가입
					</a>
					<a href="https://maemulmoa.co.kr/bbs/password_lost.php" class="win_password_lost btn btn-primary text-white rounded-0" role="button">
						정보찾기
					</a>
				</div>
				<!-- Login -->
				<div id="sidebar-login" class="sidebar-item">
					<div class="p-3 bg-white border-bottom">
	<form id="sidebar_login" name="sidebar_login" method="post" action="https://maemulmoa.co.kr/bbs/login_check.php" autocomplete="off">
	<input type="hidden" name="url" value="%2Fbbs%2Fcontent.php%3Fco_id%3Dmap">

		<div class="form-group f-sm">
			<div class="custom-control custom-switch">
			  <input type="checkbox" name="auto_login" class="custom-control-input remember-me" id="sidebar_remember_me">
			  <label class="custom-control-label float-left" for="sidebar_remember_me">자동로그인</label>
			</div>
		</div>

		<div class="form-group">
			<label for="sidebar_mb_id" class="sr-only">아이디<strong class="sr-only"> 필수</strong></label>						
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-user text-muted"></i></span>
				</div>
				<input type="text" name="mb_id" id="sidebar_mb_id" class="form-control required" placeholder="아이디">
			</div>
		</div>
		<div class="form-group">
			<label for="sidebar_mb_password" class="sr-only">비밀번호<strong class="sr-only"> 필수</strong></label>									
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-lock text-muted"></i></span>
				</div>
				<input type="password" name="mb_password" id="sidebar_mb_password" class="form-control required" placeholder="비밀번호">
			</div>
		</div>
		<div class="form-group mb-0">
			<button type="submit" class="btn btn-primary btn-block btn-lg en">
				로그인
			</button>    
		</div>	
	</form>
</div>

<div class="position-relative p-3 pb-5 font-weight-normal">
	
<div id="sidebar_sns_login" class="login-sns sns-wrap-32 sns-wrap-over">
    <h3 class="sr-only">소셜계정으로 로그인</h3>
    <div class="sidebar-sns-wrap">
                <a href="https://maemulmoa.co.kr/plugin/social/popup.php?provider=naver&amp;url=%2Fbbs%2Fcontent.php%3Fco_id%3Dmap" class="sns-icon social_link sns-naver" title="네이버">
            <span class="ico"></span>
            <span class="txt">네이버<i> 로그인</i></span>
        </a>
                        <a href="https://maemulmoa.co.kr/plugin/social/popup.php?provider=kakao&amp;url=%2Fbbs%2Fcontent.php%3Fco_id%3Dmap" class="sns-icon social_link sns-kakao" title="카카오">
            <span class="ico"></span>
            <span class="txt">카카오<i> 로그인</i></span>
        </a>
                                <a href="https://maemulmoa.co.kr/plugin/social/popup.php?provider=google&amp;url=%2Fbbs%2Fcontent.php%3Fco_id%3Dmap" class="sns-icon social_link sns-google" title="구글">
            <span class="ico"></span>
            <span class="txt">구글+<i> 로그인</i></span>
        </a>
                        
                <script>
            jQuery(function($){
                $(".sidebar-sns-wrap").on("click", "a.social_link", function(e){
                    e.preventDefault();

                    var pop_url = $(this).attr("href");
                    var newWin = window.open(
                        pop_url, 
                        "social_sing_on", 
                        "location=0,status=0,scrollbars=1,width=600,height=500"
                    );

                    if(!newWin || newWin.closed || typeof newWin.closed=='undefined')
                         alert('브라우저에서 팝업이 차단되어 있습니다. 팝업 활성화 후 다시 시도해 주세요.');

                    return false;
                });
            });
        </script>
        
    </div>
</div></div>				</div>
					</div>

		<!-- Menu -->
		<div id="sidebar-menu" class="sidebar-item">
			
<div id="nt_sidebar_menu" class="sidebar-list">
	<h5 class="f-de">메뉴</h5>
	<ul class="me-ul border-top f-de">
		<li class="me-li active">
				<a class="me-a" href="https://maemulmoa.co.kr/bbs/content.php?co_id=map" target="_self">
			<i class="fa empty fa-fw" aria-hidden="true"></i>
			매물지도		</a>

			</li>
		<li class="me-li">
				<a class="me-a" href="https://maemulmoa.co.kr/wooribang/lately_view.php" target="_self">
			<i class="fa empty fa-fw" aria-hidden="true"></i>
			관심목록		</a>

			</li>
		<li class="me-li">
				<a class="me-a" href="#" target="_self">
			<i class="fa empty fa-fw" aria-hidden="true"></i>
			방내놓기		</a>

			</li>
			</ul>
</div>

		</div>

		<!-- Noti -->
		<div id="sidebar-noti" class="sidebar-item">
			<div id="sidebar-noti-list"></div>
		</div>

	</div>

	<div id="nt_sidebar_footer"></div>
</aside>

<div id="nt_sidebar_mask" class="sidebar-close" style="display: none;"></div>

<!-- 알림 안내 -->
<div id="nt_sidebar_noti" class="nt-noti-label bg-primary px-3 py-2 d-none">
	<a href="javascript:;" onclick="sidebar('noti')" title="알림">
		<i class="fa fa-bell text-white" aria-hidden="true"></i>
		<span class="sr-only">알림</span>
		<b class="nt-noti-cnt text-white f-de">0</b>
	</a>
</div>

<!-- 상단이동 버튼 -->
<div id="nt_sidebar_move">
	<span class="sidebar-move-top cursor"><i class="fa fa-chevron-up"></i></span>
	<span class="sidebar-move-bottom cursor"><i class="fa fa-chevron-down"></i></span>
</div>

<script>
var sidebar_url = "https://maemulmoa.co.kr/theme/Simple-A/widget/sidebar";
var sidebar_noti_check = 0;
</script>
<script src="https://maemulmoa.co.kr/theme/Simple-A/widget/sidebar/widget.js"></script>
<!-- } 하단 끝 -->

<script>
// 컨텐츠 영역 최소 높이
$(document).ready(function() {
	na_content_height('nt_body', 'nt_header', 'nt_footer');
	$(window).resize(function() {
		na_content_height('nt_body', 'nt_header', 'nt_footer');
	});
});
</script>

<!-- Nariya 나리야빌더 1.2.16 -->






</body></html>