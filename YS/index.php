<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>빙글빙글 돌아가는 업무일지</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
            font-size: 2rem;
            text-align: center;
            color: white;
            background: black;
            border-radius: 1rem;
            padding: 2rem;
            transition: all .5s ease;
            width: 6.5%;
            float: left;

        }

        .pressed {
            background: tomato;
            transform: scale(1.2);
        }
    </style>
</head>
<body>

<h1>빙글빙글 돌아가는 업무일지 <p id="interval-time">00:00:00</p></h1>

<form>
    <label for="start-time">시작시간: 입력해주세요</label>
    <input type="text" id="start-time" name="start-time">


    <label for="end-time">종료시간: 입력해주세요 (ex:1300, 0930)</label>
    <input type="text" id="end-time" name="end-time" onfocusout="endTimeFunc();">

    <label for="classification">구분:</label>
    <select id="classification" name="classification">
        <option value="arrive">출근</option>
        <option value="leave">퇴근</option>
        <option value="work">업무</option>
        <option value="non-work">업무 외 행동</option>
        <option value="non-area">자리비움</option>

        <label for="time-required">소요시간:</label>
        <input type="number" id="time-required" name="time-required" placeholder="분"><br><br>

        <label for="details">상세 내용:</label>
        <textarea id="details" name="details" rows="10" cols="20" placeholder="업무 상세 내용을 입력해주세요."></textarea><br><br>

        <input type="submit" value="작업 저장하기"
               style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
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

    const now = new Date();
    var now_hour = now.getHours();
    var now_minute = now.getMinutes();
    var now_second = now.getSeconds();
    var now_ampm;
    if (now_minute >= 0 && now_minute < 10) {
        now_minute = "0"+ now_minute;
    };

    if (now_hour >= 0 && now_hour < 13) {
        now_ampm = "오전";
    } else now_ampam = "오후";

    var now_time = now_ampm + " " + now_hour + ":" + now_minute;

    $(function () {
        $("#start-time").val(now_time);

    });

    function endTimeFunc() {
        console.log();
    };

    function getClock() {
        // var now_hour = now.getHours();
        // var now_minute = now.getMinutes();
        // var now_second = now.getSeconds();
        $("#interval-time").text(now_hour + ":" + now_minute + ":" + now_second);
    };
    getClock();
    setInterval(getClock, 1000);


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