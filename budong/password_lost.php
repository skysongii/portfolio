<html lang="ko" class="is-pc"><head>
<meta charset="utf-8">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>회원정보 찾기 | 매물모아</title>
<link rel="stylesheet" href="https://maemulmoa.co.kr/nariya/app/bs4/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="https://maemulmoa.co.kr/nariya/css/nariya.css" type="text/css">
<link rel="stylesheet" href="https://maemulmoa.co.kr/theme/Simple-A/css/theme.css" type="text/css">
<link rel="stylesheet" href="https://maemulmoa.co.kr/theme/Simple-A/css/font/pc-NexonLv2Gothic.css" type="text/css">
<link rel="stylesheet" href="https://maemulmoa.co.kr/theme/Simple-A/css/color/Navy.css" type="text/css">
<link rel="stylesheet" href="https://maemulmoa.co.kr/skin/member/BS4-Basic/style.css?ver=220620">
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

		<div id="nt_sticky" class="mb-md-3" style="height: auto;">

			<!-- LNB 시작 { -->
			<aside id="nt_lnb" class="d-none d-md-block f-sm font-weight-normal">
				<h3 class="sr-only">상단 네비</h3>
				<div class="nt-container px-xl-0 clearfix pt-3 px-3 px-sm-4 mb-3">
					<!-- LNB Left -->
					
					<!-- LNB Right -->
					<ul class="float-right">
											<li><a href="https://maemulmoa.co.kr/bbs/login.php?url=%2Fbbs%2Fpassword_lost.php" onclick="sidebar('login'); return false;">로그인</a></li>
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
			<div id="nt_sticky_wrap" class="bg-white">
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
							<li class="col p-0 me-li">
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

			<script>
		function sticky_menu (e) {

			e.preventDefault();

			var scroll_n = window.scrollY || document.documentElement.scrollTop;
			var sticky_h = $("#nt_sticky").height();
			var menu_h = $("#nt_sticky_wrap").height();

			if (scroll_n > (sticky_h - menu_h)) {
				$("#nt_sticky_wrap").addClass("me-sticky");
				$("#nt_sticky").css('height', sticky_h + 'px');
			} else {
				$("#nt_sticky").css('height', 'auto');
				$("#nt_sticky_wrap").removeClass("me-sticky");
			}
		}
		$(window).on('load', function () {
			$(window).scroll(sticky_menu);
			$(window).resize(sticky_menu);
		});
		</script>
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
													<li class="text-nowrap">
								<a href="https://maemulmoa.co.kr/bbs/content.php?co_id=map" target="_self" class="f-de d-block px-3 py-2 text-white">
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
								startAt: -1,
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

	<div id="nt_title" class="bg-primary font-weight-normal">
	<div id="nt-title-raster">
				<div class="nt-container px-3 px-sm-4 px-xl-0">
			<div id="nt_title_flex" class="d-flex pb-2 pt-3 py-md-0 flex-column flex-sm-row justify-content-sm-between">
				<div class="page-title en my-auto text-left text-white">
										<h1 class="page-title p-0 m-0">회원정보 찾기</h1>
				</div>
				<div class="d-none d-sm-block my-auto ml-sm-4 text-left">
											<nav aria-label="breadcrumb" class="f-sm">
							<ol class="breadcrumb bg-transparent p-0 m-0 text-white-50">
																															</ol>
						</nav>
									</div>
			</div>
		</div>
			</div>
</div>


		<!-- } 페이지 타이틀 끝 -->

	</div><!-- #nt_header -->

	

	
	<div id="nt_body" class="nt-body" style="min-height: 547.062px;">
						<div class="nt-container  px-xl-0 px-0 px-sm-4">
					
<div id="find_info" class="f-de mb-5">
	<form name="fpasswordlost" action="https://maemulmoa.co.kr/bbs/password_lost2.php" onsubmit="return fpasswordlost_submit(this);" method="post" autocomplete="off">
		<div class="px-3 px-sm-0 py-3">
            <p>
                회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br>
                해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.
            </p>
			<label class="sr-only" for="mb_email">이메일<strong class="sr-only"> 필수</strong></label>
			<div class="input-group my-3">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
				</div>
				<input type="text" name="mb_email" id="mb_email" required="" class="form-control required email" maxlength="100">
				<div class="input-group-append">
					<button type="submit" id="btn_sumbit" class="btn btn-primary">인증메일 보내기</button>
				</div>
			</div>
			<div class="text-center">
				
<script>var g5_captcha_url  = "https://maemulmoa.co.kr/plugin/kcaptcha";</script>
<script src="https://maemulmoa.co.kr/plugin/kcaptcha/kcaptcha.js"></script>
<fieldset id="captcha" class="captcha">
<legend><label for="captcha_key">자동등록방지</label></legend>
<img src="https://maemulmoa.co.kr/plugin/kcaptcha/kcaptcha_image.php?t=1677714329439" alt="" id="captcha_img"><input type="text" name="captcha_key" id="captcha_key" required="" class="captcha_box required" size="6" maxlength="6">
<button type="button" id="captcha_mp3"><span></span>숫자음성듣기</button>
<button type="button" id="captcha_reload"><span></span>새로고침</button>
<span id="captcha_info">자동등록방지 숫자를 순서대로 입력하세요.</span>
</fieldset>			</div>
		</div>
	</form>

    
</div>

<script>    
$(function() {
    $("#reg_zip_find").css("display", "inline-block");
    var pageTypeParam = "pageType=find";

	        });
function fpasswordlost_submit(f)
{
    if (!chk_captcha()) return false;

    return true;
}
</script>
<!-- } 회원정보 찾기 끝 -->					</div><!-- .nt-container -->
		</div><!-- .nt-body -->

			<div class="py-2 py-sm-3 py-md-4" style="background: rgb(242, 243, 245);"></div>
	
			<div class="position-relative mask-show">
			<div class="border-top"></div>		</div>
	
			<footer id="nt_footer" class="position-relative f-sm font-weight-normal bg-light is-footer-mask">
			<div class="nt-container px-0 px-sm-4 px-xl-0">
				<nav class="nt-links clearfix py-3">
					<div class="nt-container px-xl-0">
						<ul class="float-md-left d-none d-md-block">
							<li><a href="https://maemulmoa.co.kr/bbs/content.php?co_id=company">사이트 소개</a></li>
							<li><a href="https://maemulmoa.co.kr/bbs/content.php?co_id=privacy">개인정보처리방침</a></li>
							<li><a href="https://maemulmoa.co.kr/bbs/content.php?co_id=noemail">이메일 무단수집거부</a></li>
							<li><a href="https://maemulmoa.co.kr/bbs/content.php?co_id=disclaimer">책임의 한계와 법적고지</a></li>
						</ul>
						<ul class="float-md-right text-center text-md-left">
							<li><a href="https://maemulmoa.co.kr/bbs/content.php?co_id=provision">이용약관</a></li>
							<li><a href="https://maemulmoa.co.kr/bbs/content.php?co_id=guide">이용안내</a></li>
							<li><a href="https://maemulmoa.co.kr/bbs/qalist.php">문의하기</a></li>
							<li><a href="https://maemulmoa.co.kr/bbs/password_lost.php?device=mobile">모바일버전</a></li>
						</ul>
					</div>
				</nav>

				<div class="nt-container py-4 px-xl-0">
					<ul class="d-flex justify-content-center flex-wrap">
						<li class="px-3">
							<b>회사명</b>
						</li>
						<li class="px-3">
							대표 : 대표자명						</li>
						<li class="px-3">
							OO도 OO시 OO구 OO동 123-45						</li>
						<li class="px-3">
							전화 : 02-123-4567						</li>
						<li class="px-3">
							사업자등록번호 : 123-45-67890						</li>
						<li class="px-3">
							<a href="http://www.ftc.go.kr/info/bizinfo/communicationList.jsp" target="_blank">사업자정보확인</a>
						</li>
						<li class="px-3">
							통신판매업신고 : 제 OO구 - 123호						</li>
						<li class="px-3">
							개인정보관리책임자 : 정보책임자명						</li>
						<li class="px-3">
							이메일 : 정보책임자 E-mail						</li>
					</ul>
				</div>

				<div class="text-center px-3 pb-4">
					<strong>매물모아 <i class="fa fa-copyright"></i></strong>
					<span>All rights reserved.</span>
				</div>

			</div>
		</footer>
	</div><!-- .wrapper -->


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
	<div id="nt_sidebar_body" class="sidebar-content pb-5" style="min-height: 899px;">

		
		<div class="mt-n1">
							<div class="btn-group w-100" role="group" aria-label="Member Menu">
					<a href="https://maemulmoa.co.kr/bbs/login.php?url=%2Fbbs%2Fpassword_lost.php" class="btn btn-primary text-white rounded-0" onclick="sidebar('login'); return false;" role="button">
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
	<input type="hidden" name="url" value="%2Fbbs%2Fpassword_lost.php">

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
                <a href="https://maemulmoa.co.kr/plugin/social/popup.php?provider=naver&amp;url=%2Fbbs%2Fpassword_lost.php" class="sns-icon social_link sns-naver" title="네이버">
            <span class="ico"></span>
            <span class="txt">네이버<i> 로그인</i></span>
        </a>
                        <a href="https://maemulmoa.co.kr/plugin/social/popup.php?provider=kakao&amp;url=%2Fbbs%2Fpassword_lost.php" class="sns-icon social_link sns-kakao" title="카카오">
            <span class="ico"></span>
            <span class="txt">카카오<i> 로그인</i></span>
        </a>
                                <a href="https://maemulmoa.co.kr/plugin/social/popup.php?provider=google&amp;url=%2Fbbs%2Fpassword_lost.php" class="sns-icon social_link sns-google" title="구글">
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
		<li class="me-li">
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