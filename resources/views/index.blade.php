<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Phonebook</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="/css/own.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        ::selection{
            color: #000;
            background: #fff;
        }
        nav{
            position: fixed;
            background: #1b1b1b;
            width: 100%;
            padding: 10px 0;
            z-index: 12;
        }
        nav .menu{
            max-width: 1250px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }
        .menu .logo a{
            text-decoration: none;
            color: #fff;
            font-size: 35px;
            font-weight: 600;
        }
        .menu ul{
            display: inline-flex;
        }
        .menu ul li{
            list-style: none;
            margin-left: 7px;
        }
        .menu ul li:first-child{
            margin-left: 0px;
        }
        .menu ul li a{
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .menu ul li a:hover{
            background: #fff;
            color: black;
        }
        .img{
            background: url('img3.jpg')no-repeat;
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .img::before{
            content: '';
            position: absolute;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.4);
        }
        .center{
            position: absolute;
            top: 52%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            padding: 0 20px;
            text-align: center;
        }
        .center .title{
            color: #fff;
            font-size: 55px;
            font-weight: 600;
        }
        .center .sub_title{
            color: #fff;
            font-size: 52px;
            font-weight: 600;
        }
        .center .btns{
            margin-top: 20px;
        }
        .center .btns button{
            height: 55px;
            width: 170px;
            border-radius: 5px;
            border: none;
            margin: 0 10px;
            border: 2px solid white;
            font-size: 20px;
            font-weight: 500;
            padding: 0 10px;
            cursor: pointer;
            outline: none;
            transition: all 0.3s ease;
        }
        .center .btns button:first-child{
            color: #fff;
            background: none;
        }
        .btns button:first-child:hover{
            background: white;
            color: black;
        }
        .center .btns button:last-child{
            background: white;
            color: black;
        }
    </style>
</head>
<body>
<nav>
    <div class="menu">
        <div class="logo">
            <a href="#">PhoneBook</a>
        </div>
    </div>
</nav>
<div class="img"></div>
<div class="center">
    <div class="title BHoma">به دفترچه تلفن انلاین خوش آمدید</div>
    <div class="sub_title"></div>
    <div class="btns">
        <a href="{{ route('auth.login') }}" class="btn btn-primary BJadidBold">ورود به حساب کاربری</a>
        <a href="{{ route('auth.register') }}" class="btn btn-info BJadidBold">ثبت نام در سایت</a>
    </div>
</div>
</body>
</html>
