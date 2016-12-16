<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        @if (!empty($roles[0]))
	<li>
            <a href=<?php echo '/'.$roles[0][1].'/index';?>><?php echo ''.$roles[0][1];?></a>
	</li>
        @endif
        @if (!empty($roles[1]))
	<li>
            <a href=<?php echo '/'.$roles[1][1].'/index';?>><?php echo ''.$roles[1][1];?></a>
	</li>
        @endif
        @if (!empty($roles[2]))
	<li>
            <a href=<?php echo '/'.$roles[2][1].'/index';?>><?php echo ''.$roles[2][1];?></a>
	</li>
        @endif
    </body>
</html>
