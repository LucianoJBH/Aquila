<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Sistema - Aquila</title>

    <script type="text/javascript">
        function voltar() {
            window.setTimeout(function(){history.go(-1)},2000);
        }
    </script>

    <style>
        /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
        @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

        body {
            font-size: 62.5%;
            width: 100%;
            height: 100%;
            position: absolute;
            font-family: Raleway;
            background: url(https://newevolutiondesigns.com/images/freebies/city-wallpaper-18.jpg) no-repeat fixed;
            background-size: cover;
            background-position: 50%;
            -webkit-font-smoothing: antialiased;
            font-smoothing: antialiased;
        }
        body .menu {
            position: absolute;
            width: 100%;
            background: inherit;
        }
        body .menu .mainmenu {
            background: url(https://newevolutiondesigns.com/images/freebies/city-wallpaper-18.jpg) no-repeat fixed;
            background-size: cover;
            background-position: 50%;
        }
        body .menu .mainmenu:before {
            position: absolute;
            content: "";
            display: block;
            width: 100%;
            height: 100%;
            background: inherit;
            -webkit-filter: blur(3px);
            filter: blur(3px);
        }
        body .menu .mainmenu:after {
            clear: both;
            content: "";
            display: block;
        }
        body .menu .mainmenu .menuitem {
            float: left;
            width: 10%;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            cursor: pointer;
            color: white;
            font-size: 1.5rem;
        }
        body #findpass {
            top: 50%;
            left: 5%;
            padding: 10px 20px;
            width: auto;
            background: white;
            color: rgba(0, 0, 0, 0.7);
            position: fixed;
            background: rgba(255, 255, 255, 0.5);
            border: none;
            font-size: 1.2rem;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            border-radius: 10px;
            cursor: pointer;
            -moz-transform: translate3d(0, -50%, 0);
            -ms-transform: translate3d(0, -50%, 0);
            -webkit-transform: translate3d(0, -50%, 0);
            transform: translate3d(0, -50%, 0);
        }
        body #findpass:focus {
            outline: none;
        }
        body .article {
            width: 960px;
            font-size: 1.4rem;
            margin: 20px auto;
            color: white;
            opacity: 0;
            visibility: hidden;
            -moz-transition: opacity 400ms linear;
            -o-transition: opacity 400ms linear;
            -webkit-transition: opacity 400ms linear;
            transition: opacity 400ms linear;
            -moz-transition-delay: 800ms;
            -o-transition-delay: 800ms;
            -webkit-transition-delay: 800ms;
            transition-delay: 800ms;
            top: 0;
            position: relative;
        }
        body .article.active {
            opacity: 1;
            visibility: visible;
        }
        body .article h1 {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 20px;
        }

        .grad{
            position: absolute;
            top: -20px;
            left: -20px;
            right: -40px;
            bottom: -40px;
            width: auto;
            height: auto;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
            z-index: 1;
            opacity: 0.7;
        }

        .header{
            position: absolute;
            top: calc(50% - 35px);
            left: calc(50% - 330px);
            z-index: 2;
        }

        .header div{
            margin-right: 30px;
            color: #fff;
            font-family: 'Exo', sans-serif;
            font-size: 35px;
        }

        .header div span{
            color: #ffffff !important;
            font-size: 50px;

        }

        .login{
            position: absolute;
            top: calc(50% - 75px);
            left: calc(50% - 50px);
            height: 150px;
            width: 350px;
            padding: 10px;
            z-index: 2;
        }

        .login input[type=text]{
            width: 250px;
            height: 30px;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.6);
            border-radius: 2px;
            color: #fff;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 4px;
        }

        .login input[type=password]{
            width: 250px;
            height: 30px;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.6);
            border-radius: 2px;
            color: #fff;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 4px;
            margin-top: 10px;
        }

        .login input[type=submit]{
            width: 260px;
            height: 35px;
            background: #fff;
            border: 1px solid #fff;
            cursor: pointer;
            border-radius: 2px;
            color: #a18d6c;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 6px;
            margin-top: 10px;
        }

        .login input[type=button]:hover{
            opacity: 0.8;
        }

        .login input[type=button]:active{
            opacity: 0.6;
        }

        .login input[type=text]:focus{
            outline: none;
            border: 1px solid rgba(255,255,255,0.9);
        }

        .login input[type=password]:focus{
            outline: none;
            border: 1px solid rgba(255,255,255,0.9);
        }

        .login input[type=button]:focus{
            outline: none;
        }

        ::-webkit-input-placeholder{
            color: rgba(255,255,255,0.6);
        }

        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body onLoad="voltar();">
<div class="body"></div>
<div class="grad"></div>
<div class="header">
    <div><span>Usuário ou Senha Invalidos!</span></div>
</div>
<br>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


</body>
</html>
