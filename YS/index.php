<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>빙글빙글 돌아가는 업무일지</title>
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
            width: 80%;
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
    </style>
</head>
<body>

<h1>빙글빙글 돌아가는 업무일지</h1>

<form>
    <label for="start-time">시작시간:</label>
    <input type="time" id="start-time" name="start-time">

    <label for="end-time">종료시간:</label>
    <input type="time" id="end-time" name="end-time">

    <label for="classification">구분:</label>
    <select id="classification" name="classification">
        <option value="work">업무</option>
        <option value="non-work">업무 외 행동</option>
        <option value="arrive">출근</option>
        <option value="leave">퇴근</option>
    <label for="time-required">소요시간:</label>
    <input type="number" id="time-required" name="time-required" placeholder="분"><br><br>

    <label for="details">상세 내용:</label>
    <textarea id="details" name="details" rows="4" cols="50" placeholder="업무 상세 내용을 입력해주세요."></textarea><br><br>

    <input type="submit" value="작업 저장하기" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
