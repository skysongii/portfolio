<?php
$ROOT_PATH = "/dashboard/gitDev/YS";

include_once $_SERVER["DOCUMENT_ROOT"] .$ROOT_PATH. "/connect.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>빙글빙글 돌아가는 업무일지</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin: 30px 0;
        }

        form {
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="time"],
        input[type="text"],
        input[type="datetime-local"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 10px;
            box-sizing: border-box;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="12" height="6"><path d="M6 6L0 0h12z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center;
        }

        input[type="submit"] {
            display: block;
            margin: 20px auto 0;
            padding: 10px 20px;
            background-color: #4285f4;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3367d6;
        }

        div {
            font-size: 1rem;
            text-align: center;
            color: white;
            background: black;
            border-radius: 1rem;
            padding: 2rem;
            transition: all .5s ease;
            width: 3%;
            height: 5px;
            float: left;
            margin-left: 3%;

        }

        .pressed {
            background: tomato;
            transform: scale(1.2);
        }
    </style>
</head>

<body>

<h1>빙글빙글 돌아가는 업무일지 <p class="h1-clock">00:00:00</p></h1>


<form method="get" onsubmit="alertFunc()">
    <label for="start-time">시작시간: 현재시간 고정</label>
    <input type="text" id="start-time" name="start-time" readonly>


    <label for="end-time">종료시간: 입력해주세요</label>
    <input type="text" id="end-time" name="end-time" onclick="this.value=''" placeholder="ex)0900, 1829" onfocusout="endTimeFunc();">

    <label for="classification">구분:</label>
    <select id="classification" name="classification" onfocusout="selectionFunc();">
        <option value="arrive">출근</option>
        <option value="leave">퇴근</option>
        <option value="work">업무</option>
        <option value="non-work">업무 외 행동</option>
        <option value="non-area">자리비움</option>

        <label for="details">상세 내용:</label>
        <textarea id="details" name="details" rows="10" cols="20" placeholder="업무 상세 내용을 입력해주세요."></textarea><br><br>

        <input type="submit" id="submit-button" value="작업 저장하기"
               style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
    </select>
</form>
<br><br>

<div id="1">1</div>
<div id="2">2</div>
<div id="3">3</div>
<div id="4">4</div>
<div id="5">5</div>
<div id="6">6</div>
<div id="7">7</div>
<div id="8">8</div>
<div id="9">9</div>
<div id="0">0</div>

<script>
    /**
     * @author  : csh
     * @date    : 2023-03-09
     * 실시간 인터벌
     */
    const clock = document.querySelector('.h1-clock');

    function getTime() {
        const time = new Date();
        const hour = time.getHours();
        const minutes = time.getMinutes();
        const seconds = time.getSeconds();
        clock.innerHTML = `${hour < 10 ? `0${hour}` : hour}:${minutes < 10 ? `0${minutes}` : minutes}:${seconds < 10 ? `0${seconds}` : seconds}`
    }

    function init() {
        getTime();
        setInterval(getTime, 1000);
    }

    /**
     * @author  : csh
     * @date    : 2023-03-09
     * 종료시간 입력칸 포커스 아웃시 시간으로 변환
     */
    function endTimeFunc() {
        var end_time = $("#end-time").val();
        var end_time_length = end_time.length;
        var end_time_hour = end_time.substring(0,2);
        var end_time_minute = end_time.substring(2);
        var ampm = "오전";

        var end_time_string;

        end_time_hour = parseInt(end_time_hour);

        if (end_time_hour < 0 || end_time_hour > 25) {
            alert("장난 하지마 이쒸");
            end_time_string = "444444444444444444444444444444444444444";
        }
        else if(end_time_hour >= 12) {
            ampm = "오후";
            if (end_time_hour == 12) {
                end_time_string = `${ampm} ${end_time_hour}:${end_time_minute}`;
            }
            else {
                end_time_hour -= 12;
                end_time_string = `${ampm} ${end_time_hour}:${end_time_minute}`;
            }
            console.log(end_time_string);
        }
        else if(end_time_hour < 13) {
            end_time_string = `${ampm} ${end_time_hour}:${end_time_minute}`;
            console.log(end_time_string);
        }

        $("#end-time").val(end_time_string);
    };

    /**
     * @author  : csh
     * @date    : 2023-03-16
     * 구분선택
     */
    function selectionFunc() {
        var gubun = document.getElementById("classification");
        var value = (gubun.options[gubun.selectedIndex].value);
        // var gubun = $("#classification").val();
        console.log(value);
    }

    /**
     * @author  : csh
     * @date    : 2023-03-16
     * 얼럿창 디자인 및 클릭이벤트
     */
    function alertFunc() {
            // Swal.fire({
            //     icon: 'success',
            //     title: 'Alert가 실행되었습니다.',
            //     text: '이곳은 내용이 나타나는 곳입니다.',
            // });
        swal("제목", "내용", "warning");
    }
    /*********************************************************************************************************************************/


    const now = new Date();
    var now_hour = now.getHours();
    var now_minute = now.getMinutes();
    var now_second = now.getSeconds();
    var now_ampm;

    if (now_hour >= 12 && now_hour < 24) {  // 시 12형식으로 변환
        now_hour = parseInt(now_hour) - 12;
        // console.log(`오후 ${now_hour} + ${typeof(now_hour)}시`);
        // hour_int = parseInt(now_hour);
    }
    ;

    if (now_minute >= 0 && now_minute < 10) {   // 분에 0 붙이기
        now_minute = "0" + now_minute;
    }
    ;

    if (now_hour >= 0 && now_hour < 13) {   // 오전 오후 구분
        now_ampm = "오전";
    } else now_ampm = "오후";

    var now_time = now_ampm + " " + now_hour + ":" + now_minute;    // 오전/오후 hh:mm

    var aaa = new Date(now_time);
    console.log(aaa);

    $(function () {
        $("#start-time").val(now_time);
        init();

        // console.log($("#start-time").val())
    });




    // 재미난 장난
    window.addEventListener("keydown", e => {
        const key = document.getElementById(e.key);
        if (key) key.classList.add('pressed');
    });


    window.addEventListener("keyup", e => {
        const key = document.getElementById(e.key);
        if (key) key.classList.remove('pressed');
    });


</script>