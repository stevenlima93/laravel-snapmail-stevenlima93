<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Roboto', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .position-ref {
            position: relative;
        }

        .full-height {
            height: 100vh;
        }

        .block-head {
            background-color: #555555;
            color: #fff;
            font-size: 24px;
            width: 100%;
        }

        .form-input{
            width: 99%;
            height: 42px;
            text-indent: 13px;
            font-size: 14px;
            border: none;
            border-bottom: 1px solid #CFCFCF;
        }

        .edit{
            box-sizing: border-box;
            float: left;
            padding: 13px;
            width: 100%;
            line-height: 16px;
            height: 285px;
            border: none;
            font-size: 13px;
            resize: none;
        }

        .block-bottom{
            width: 100%;
            bottom: 0px;
            left: 0px;
            height: 44px;
            line-height: 44px;
            background: #f5f5f5;
            border-top: 1px solid #CFCFCF;
        }

    </style>
</head>
<body>
<div class="position-ref full-height">

<div class="block-head">New Message</div>
<div class="form-input" name="email" type="email"></div>
<div class="edit" name="message">
    <p>Hello, you got a new message</p>
    <span style="color: firebrick">It will be deleted when you left or refreshed the page</span>
    <a href="http://127.0.0.1:8000/{{$token}}">Click me !</a>
</div>
<div class="block-bottom flex-center"></div>
</div>
</body>
</html>
