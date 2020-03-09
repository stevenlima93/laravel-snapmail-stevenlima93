<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Snapmail</title>

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Roboto', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 64px;
        }

        .block{
            width: 600px;
            min-height: 400px;
            border: solid 1px ;
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

        .m-b-md {
            margin-bottom: 30px;
        }
        .button{
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button-send:hover {
            background-color: #008CBA;
            color: white;
        }
        .button-send {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
        }
        .is-invalid{
            border: 1px solid firebrick;
        }
        .file {
            padding: 6px;
        }
        .file label {
            background: #008CBA;
            padding: 5px 20px;
            color: #fff;
            font-weight: bold;
            font-size: .9em;
            transition: all .4s;
        }
        .file input {
            display: inline-block;
            left: 0;
            top: 0;
            opacity: 1;
            cursor: pointer;
        }
        .file input:hover + label,
        .file input:focus + label {
            background: #00c9f8;
            color: #008CBA;
        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Snapmail
        </div>

        <form enctype="multipart/form-data" method="post" action="/" class="block">
            @csrf
            <div class="block-head">New Message</div>
            <input class="form-input @error('email') is-invalid @enderror" name="email" type="email">
            <textarea class="edit @error('message') is-invalid @enderror" name="message"></textarea>
            <div class="file">
            <input type="file" name="image">
            <label for="file" >Upload your image</label>
            </div>
            <div class="block-bottom flex-center">
                <button class="button button-send">Send</button>
            </div>
        </form>
        @if($errors->all())
            @foreach($errors->all() as $error)
                <p style="color: firebrick">{{$error}}</p>
                @endforeach
            @endif
        @if(session("success"))
            <p style="color: #4CAF50">{{session("success")}}</p>
            @endif
    </div>
</div>
</body>
</html>
