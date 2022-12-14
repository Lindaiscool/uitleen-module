<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Pankaj Taneja">
    <link rel="shortcut icon" href="">

    <title>404 Dog</title>

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,900,300,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Ultra" rel="stylesheet" type="text/css">

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Core CSS -->
    <style>
        body {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif !important;
            font-weight: lighter;

        }

        /*=====================================================
=            Media Queries for Dog          =
=====================================================*/
        @media only screen and (max-width : 2200px) {

            .message {
                top: 45vmin;
            }

            .message h2 {
                font-size: 7vmin;
            }

            .dog-background {
                width: 50%;
            }

            .dogmenu li {
                float: left;
            }

        }


        @media only screen and (max-width : 900px) {

            .message {
                top: 47vmin;
            }


            .message h2 {
                font-size: 5.5vmin;
            }

            .dog {
                left: 32%;
                top: 40%;
            }

            .dog-background {
                width: 100%;
            }

            .dogmenu li {
                float: none;
            }

            .dogmenu a {
                display: none;
                font: bold 10px sans-serif;
            }

        }

        @media only screen and (max-width : 480px) {

            .message {
                top: 65 vmin;
            }


            .message h1 {
                margin-top: vmin;
                font-size: 20vmin;
            }

            .message h2 {
                font-size: 7vmin;
            }

            .dog {
                left: 27%;
                top: 40%;
            }

            .dog-background {
                width: 100%;
            }

            .dogmenu li {
                float: none;
            }

            .dogmenu a {
                display: none;
                font: bold 10px sans-serif;
            }

        }

        .blue-bg {

            background-color:  rgb(32, 32, 32);

        }

        .message {
            text-align: center;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
        }

        .message h1 {
            font-family: ultra;
            color: #F8DC93;
            margin-bottom: -7vmin;
        }

        .message h2 {
            color: rgb(158, 158, 158);
            font-weight: 500;
            margin-bottom: 5vmin;
            margin-top: 5vmin;


        }

        .message p {
            font-size: 3vmin;
            color: rgb(204, 204, 204);
        }

        /* DOG */

        .dog-background {
            position: relative;
            height: 50vmin;
            display: inline-block;
        }

        .dog {
            transform: translateX(-50%);
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 50%;
            top: 24%;
        }

        .dog-head {
            background-color: #F8DC93;
            height: 14vmin;
            width: 20vmin;
            -moz-border-radius: 2vmin 0 0 16vmin;
            border-radius: 2vmin 0 0 16vmin;
            transform-origin: 100% 0%;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
            right: 7vmin;
            top: -33vmin;
            position: relative;
            z-index: 1;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
        }

        .dog-smile {
            height: 3vmin;
            width: 4vmin;
            -moz-border-radius: 150px 0 0 0;
            border-radius: 3vmin 0 0 0;
            transform-origin: 100% 0%;
            border-top: 3px solid #D2AF5E;
            border-left: 2px solid #D2AF5E;
            outline: 0px solid #fff;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(180deg);
            left: -.8vmin;
            /* top: -5vmin; */
            position: absolute;
            z-index: 1;
            -webkit-transition: .1s ease-in-out;
            -moz-transition: .1s ease-in-out;
            -o-transition: .1s ease-in-out;
            transition: .1s ease-in-out;
            background: #F8DC93;
        }

        .dog-fang1 {
            display: inline-block;
            width: 0;
            border: .9vmin transparent solid;
            border-bottom: 2vmin transparent solid;
            top: .1vmin;
            left: 2vmin;
            position: absolute;
        }

        .dog-fang2 {
            display: inline-block;
            width: 0;
            border: .9vmin transparent solid;
            border-bottom: 2vmin transparent solid;
            top: .1vmin;
            left: .2vmin;
            position: absolute;
        }

        .dog-tongue {
            height: 3vmin;
            width: 2.5vmin;
            -moz-border-radius: 150px 0 0 0;
            border-radius: 1vmin 1vmin 0 0;
            left: 1.3vmin;
            position: absolute;
            z-index: 1;
            background-color: #F5901E;
            -webkit-animation: pant .3s infinite;
            animation: pant .3s infinite;
        }

        .dog-nose {
            background-color: #000;
            height: 3vmin;
            width: 3vmin;
            -moz-border-radius: 50%;
            border-radius: 50%;
            top: -1vmin;
            left: -1vmin;
            position: relative;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
        }

        .dog-eye {
            background-color: #D2AF5E;
            height: 7vmin;
            width: 7vmin;
            -moz-border-radius: 50%;
            border-radius: 50%;
            top: -1vmin;
            left: 10vmin;
            position: relative;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
        }

        .dog-eye div {
            background-color: #000;
            height: 3vmin;
            width: 3vmin;
            -moz-border-radius: 50%;
            border-radius: 50%;
            top: 1vmin;
            left: 2vmin;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            position: relative;
        }

        .dog-eye div div {
            background-color: #FFF;
            height: 1vmin;
            width: 1vmin;
            -moz-border-radius: 50%;
            border-radius: 50%;
            top: .5vmin;
            left: .5vmin;
            -webkit-transition: .2s ease-in-out;
            -moz-transition: .2s ease-in-out;
            -o-transition: .2s ease-in-out;
            transition: .2s ease-in-out;
            position: relative;
        }

        .dog-ear {
            background-color: #C3AF79;
            height: 4vmin;
            width: 3vmin;
            -moz-border-radius: 2vmin 0 0 16vmin;
            border-radius: 16vmin 4vmin 0 0;
            transform-origin: 100% 0%;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(1deg);
            left: 14vmin;
            top: -4vmin;
            position: absolute;
            z-index: -1;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            box-shadow: 3vmin -.0vmin 0 0 #F8DC93;
        }

        .dog-body {
            background-color: #F8DC93;
            height: 14vmin;
            width: 26vmin;
            transform-origin: 100% 0%;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
            right: -14vmin;
            top: -23vmin;
            position: absolute;
            z-index: 1;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            -moz-border-radius: 2vmin 0vmin 0vmin 14vmin;
            border-radius: 2vmin 0vmin 0vmin 14vmin;
        }

        .dog-spot {
            background-color: #D2AF5E;
            height: 9vmin;
            width: 5vmin;
            -moz-border-radius: 150px 0 0 150px;
            border-radius: 150px 0 0 150px;
            transform-origin: 100% 0%;
            -webkit-transform: rotate(12deg);
            -moz-transform: rotate(12deg);
            -o-transform: rotate(12deg);
            -ms-transform: rotate(12deg);
            transform: rotate(270deg);
            left: 7vmin;
            top: 0vmin;
            position: absolute;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
        }

        .dog-tail {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 0 5vmin 3vmin;
            border-color: transparent transparent #F8DC93 transparent;
            position: absolute;
            top: -3vmin;
            right: 0;
            transform-origin: 100% 100%;
            -webkit-transform: rotate(15deg);
            -moz-transform: rotate(15deg);
            -o-transform: rotate(15deg);
            -ms-transform: rotate(15deg);
            transform: rotate(15deg);
            -webkit-animation: wag .4s ease-in-out infinite;
            animation: wag .4s ease-in-out infinite;
        }

        .dog-leg1 {
            background-color: #F8DC93;
            height: 6vmin;
            width: 3vmin;
            transform-origin: 100% 0%;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
            left: 6vmin;
            top: 12vmin;
            position: absolute;
            z-index: 1;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
        }

        .dog-leg1 div {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 0 6vmin 4vmin;
            border-color: transparent transparent #F8DC93 transparent;
            position: absolute;
            right: 0vmin;
            bottom: 0;
        }

        .dog-leg2 {
            background-color: #F8DC93;
            height: 5vmin;
            width: 3vmin;
            transform-origin: 100% 0%;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
            left: 10vmin;
            top: 13vmin;
            position: absolute;
            z-index: 1;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
        }

        .dog-leg2 div {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 6vmin 0 0 4vmin;
            border-color: transparent transparent transparent #F8DC93;
            position: absolute;
            bottom: 0;
        }

        .dog-leg3 {
            background-color: #F8DC93;
            height: 4vmin;
            width: 3vmin;
            transform-origin: 100% 0%;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
            left: 23vmin;
            top: 14vmin;
            position: absolute;
            z-index: 1;
            -webkit-transition: .4s ease-in-out;
            -moz-transition: .4s ease-in-out;
            -o-transition: .4s ease-in-out;
            transition: .4s ease-in-out;
            box-shadow: -4vmin 0vmin 0 0 #C3AF79;
        }

        .dog-leg3 div {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 0 4vmin 4vmin;
            border-color: transparent transparent #F8DC93 transparent;
            position: absolute;
            right: 0vmin;
            bottom: 0;
        }

        .dog-leg3 div div {
            width: 0;
            height: 0;
            border-style: solid;
            border-color: transparent transparent #C3AF79 transparent;
            position: absolute;
            right: 4vmin;
            bottom: -3.9vmin;
        }

        .dog:hover .dog-smile {
            background: #564C35;
            border-radius: 0vmin 0vmin 0vmin 0vmin;
            border: 1px solid #564C35;
            left: .1vmin;
            animation: snarl .1s ease-in-out infinite;
            -webkit-animation: snarl .1s ease-in-out infinite;
        }

        .dog:hover .dog-tongue {
            width: 0vmin;
            height: 0vmin;
        }

        .dog:hover .dog-tail {
            -webkit-transform: rotate(15deg);
            -moz-transform: rotate(15deg);
            -o-transform: rotate(15deg);
            -ms-transform: rotate(15deg);
            transform: rotate(15deg);
            -webkit-animation: nowag .4s ease-in-out infinite;
            animation: nowag .4s ease-in-out infinite;
        }

        .dog:hover .dog-eye div div {
            width: .5vmin;
            height: .5vmin;
        }

        .dog:hover .dog-body {
            animation: heave .1s ease-in-out infinite;
        }

        .dog:hover .dog-fang1 {
            border-bottom: 2vmin #fff solid;
        }

        .dog:hover .dog-fang2 {
            border-bottom: 2vmin #fff solid;
        }

        @keyframes pant {
            0% {
                height: 3vmin;
                top: -3.2vmin;
            }

            50% {
                height: 2vmin;
                top: -2.2vmin;
            }

            100% {
                height: 3vmin;
                top: -3.2vmin;
            }
        }

        @-webkit-keyframes pant {
            0% {
                height: 3vmin;
                top: -3.2vmin;
            }

            50% {
                height: 2vmin;
                top: -2.2vmin;
            }

            100% {
                height: 3vmin;
                top: -3.2vmin;
            }
        }

        @keyframes snarl {
            0% {
                outline: 0px solid #564C35;
            }

            50% {
                outline: 2px solid #564C35;
            }

            100% {
                outline: 0px solid #564C35;
            }
        }

        @-webkit-keyframes snarl {
            0% {
                outline: 0px solid #564C35;
            }

            50% {
                outline: 2px solid #564C35;
            }

            100% {
                outline: 0px solid #564C35;
            }
        }

        @keyframes heave {
            0% {
                border-radius: 2vmin 0vmin 0vmin 14vmin;
            }

            50% {
                border-radius: 2vmin 0vmin 0vmin 20vmin;
            }

            100% {
                border-radius: 2vmin 0vmin 0vmin 14vmin;
            }
        }

        @-webkit-keyframes heave {
            0% {
                outline: 0px solid #Fff;
            }

            50% {
                outline: 2px solid #fff;
            }

            100% {
                outline: 0px solid #fff;
            }
        }

        @keyframes wag {
            0% {
                transform: rotate(15deg);
            }

            25% {
                transform: rotate(20deg);
            }

            50% {
                transform: rotate(10deg);
            }

            75% {
                transform: rotate(20deg);
            }

            100% {
                transform: rotate(10deg);
            }
        }

        @-webkit-keyframes wag {
            00% {
                transform: rotate(15deg);
            }

            25% {
                transform: rotate(20deg);
            }

            50% {
                transform: rotate(10deg);
            }

            75% {
                transform: rotate(20deg);
            }

            100% {
                transform: rotate(10deg);
            }
        }

        .btndiv {
            height: 100px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .btnpop {
            background: #3777c4;
            position: relative;
            padding: 15px 40px;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            border-bottom: 5px solid #1462BD;
            color: rgb(204, 202, 202);
            font-size: 25px;
            vertical-align: middle;
            -webkit-border-radius: 1px;
            -moz-border-radius: 1px;
            border-radius: 1px;
            transition: all 0.1s;
        }

        .btnpop:hover {
            border-bottom: 5px solid #1462BD;
            background: #4984cc;
        }

        .btnpop:active {
            top: 2px;
            border-bottom: 2px solid #1462BD;
            background: #4984cc;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .btnpop:focus {
            outline: 0;
        }

        .dog h1 {
            font-size: 39vmin;
            position: absolute;
            top: -44vmin;
            font-family: ultra;
            left: -33.2vmin;
            color: #1659A9;
        }
    </style>



</head>

<body class="blue-bg">
    <div class="col-md-12" style="top:48vmin">
        <div class="dog">
            <div class="dog-head">
                <div class="dog-nose"></div>
                <div class="dog-eye">
                    <div>
                        <div></div>
                    </div>
                </div>
                <div class="dog-ear"></div>
                <div class="dog-smile">
                    <div class="dog-fang1"></div>
                    <div class="dog-fang2"></div>
                    <div class="dog-tongue"></div>
                </div>
            </div>
            <div class="dog-body">
                <div class="dog-tail"></div>
                <div class="dog-spot"></div>
                <div class="dog-leg1">
                    <div></div>
                </div>
                <div class="dog-leg2">
                    <div></div>
                </div>
                <div class="dog-leg3">
                    <div>
                        <div></div>
                    </div>
                </div>
            </div>
            <h1>404</h1>
        </div>
    </div>
    <div class="col-md-12">
        <div class="message">
            <h2>Such a doggone shame!</h2>
            <p>The page you're looking for does not exist</p><br>
            <div class="btndiv"><a href="/"><button class="btnpop">Go to
                        Home</button></a><a></a></div>

            </a>
            <div style="position: static !important;"></div>
</body>
