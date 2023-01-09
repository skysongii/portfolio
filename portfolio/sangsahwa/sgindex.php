
<? session_start(); ?>
<? $user_id = $_SESSION['user_id']; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>상사화</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/sgstyles.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>    

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="./index.html">상사火</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">
                            <? if(isset($user_id)) {
                                echo $user_id."님";
                            }; ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">상사화란?</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">상사에게</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">부하에게</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">노이저의 질문과 메이커의 답변</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <p class="typing-title">어서와요. 당신의 스트레스를 해소해줄 노이저예요.</p>
                        <p class="typing-head"></p>
                        
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="typing-main text-white-75 mb-5">회사 생활을 하면서 윗 사람에게, 아랫 사람에게 받았던 스트레스 다들 있으시죠?</p>
                        <p class="typing-main text-white-75 mb-5">이 곳은 철저한 익명을 통해서 뒷담화를 할 수 있는 공간입니다.</p>
                        <p class="typing-main text-white-75 mb-5">당연하게도 우리는 노이저로 활동하며 서로의 개인 정보를 알 수 없습니다. 우리에게 치명적이니까요.</p>
                        
                        <p class="typing-body text-white-75 mb-5"></p>
                        <a class="btn btn-primary btn-xl" href="#about">더 자세한 내용을 다뤄볼까요?</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">우리 플랫폼은 단순합니다.<br>물론 사용하기도 쉽죠</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">상단 우측 카테고리에 있는 상사에게와 하사에게 메뉴를 통해<br>
                        서로가 전하고 싶은 말을 하세요. <br><h2 class="just-free">공짜니까요</h2>.</p>
                        <a class="btn btn-light btn-xl" href="./login.html">바로 시작해요!</a>
                    </div>
                </div>
            </div>
        </section>
     
        
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">noisemaker@naver.com</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

<script>
    
    var typingBool = false; 
    var typingIdx=0; 
    var ty_int_main;
    // 타이핑될 텍스트를 가져온다 
    var typingTxt = $(".typing-title").text(); 
    var typing_main_Txt = $(".typing-main").text(); 
    typingTxt=typingTxt.split(""); // 한글자씩 자른다. 
    
    if(typingBool==false){ 
      // 타이핑이 진행되지 않았다면 
       typingBool=true;     
       var ty_int_head = setInterval(typingHead,100); // 반복동작 
    } 
         
    function typingHead(){ 
      if(typingIdx<typingTxt.length){ 
        // 타이핑될 텍스트 길이만큼 반복 
        $(".typing-head").append(typingTxt[typingIdx]);
        // 한글자씩 이어준다. 
        typingIdx++; 
       } else{ 
         //끝나면 반복종료 
        clearInterval(ty_int_head); 
        typingIdx = 0;
        ty_int_main = setInterval(typingMain,100);
        // typingMain();
       } 
    }  

    /**
     * author   : csh
     * date     : 2022-12-23
     * 타이핑 효과 메인 텍스트
     * */
    function typingMain(){ 
      if(typingIdx<typing_main_Txt.length){ 
        // 타이핑될 텍스트 길이만큼 반복 
        $(".typing-body").append(typing_main_Txt[typingIdx]);
        // 한글자씩 이어준다. 
        typingIdx++; 
       } else{ 
         //끝나면 반복종료 
        clearInterval(tyInt); 
        // typingMain();
       } 
    }  

    </script>
