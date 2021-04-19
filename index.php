<html>
    <head>
        <meta charset="utf-8">
        <title>Marinin-Web-Labs_7sem</title>
    </head>
    <body>
        <h1>Лабораторные работы</h1>
        <div class="row">
        <?php
            $dirs = array_diff(scandir('.'), array('favicon.ico', '.git', 'index.php','.idea','..', '.'));
            $i = 0;
            foreach($dirs as $dir){
                if(($i-1)%3==0 && $i > 1) {
                    echo '</div><div class="row">';
                }
                echo '<div class="block"><a href="./'.$dir.'/Main"><span>'.$dir.'</span></a></div>';
                $i += 1;
            }
        ?>
        </div>

        <style>
            body {
                background-color: #66A1D2;
            }

            h1 {
                text-align: center;
                width: 100%;
                color: white;
            }

            .row {
                background-color: #3F8FD2;
                height: 40%;
                display: flex;
                margin-bottom: 50px;
                border-radius: 20px;
            }
            .block {
                flex: 1;
                background-color: #0B5FA5;
                text-align: center;
                position: relative;
                margin: 30px;
                border-radius: 40px;
                cursor: pointer;
            }

            .block > a {
                position: relative;
                font-size: 5em;
                color: white;
                text-decoration: none;
                width: 100%;
                height: 100%;
                text-align: center;
            }

            .block > a > span {
                position: relative;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                display: block;
            }
        </style>

    </body>
</html>