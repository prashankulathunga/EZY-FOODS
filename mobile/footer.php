<?php
function footer(){
    echo '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Kalam&family=Lobster&family=Patrick+Hand&display=swap");

        .footer{
            display: flex;
            flex-direction: column;
            height: auto;
            width: 100%;
            max-width: 100%;
            background-color: rgb(27, 27, 27);
        }

        .ftop {
            display: flex;
            justify-content: space-between;
            padding-left: 30px;
            padding-right: 30px;
            align-items: center;
            margin-top: 20px;
        }

        .ftop img {
            width: 40px;
        }

        .fright{
            width: 200px;
            display: flex;
            justify-content: space-between;
        }

        .fleft a{
            font-family: kalam;
            font-size: 25px;
            margin-left: 20px;
            margin-bottom: 2px;
            color: white;
            text-decoration: none;
        }

        .fbottom{
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-top: 30px;
            margin-bottom: 20px;
            font-size: 10px;
        }

        .fline{
            height: 2px;
            width: 89%;
            background-color: white;
            margin-top: 10px;
            opacity: 0.2;
        }

        .fline-container{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media (max-width: 400px) {

            .footer{
                display: flex;
                flex-direction: column;
                height: auto;
            }

            .fleft a{
                text-align: center;
                padding-right: 15px;
                font-size: 19px;
            }

            .ftop img {
                width: 35px;
                margin-top: 10px;
                margin-bottom: 5px;
            }

            .fright{
                align-items: center;
                width: 200px;
                /* background-color: lightcoral; */
            }
            .ftop{
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding-left: 0px;
                padding-right: 0px;
                
            }
            .fbottom {
                margin-top: 10px;
                margin-bottom: 20px;
            }
            .fline{
                opacity: 0.2;
            }
            
        }

    </style>
    
</head>
<body>
    <footer class="footer">
        <div class="ftop">
            <div class="fleft"><a href="/">EZY FOODS</a></div>
            <div class="fright">
                <a href="/pages/maintain.php"><img src="https://img.icons8.com/ios-glyphs/90/FFFFFF/facebook-new.png"/></a>
                <a href="/pages/maintain.php"><img src="https://img.icons8.com/ios-glyphs/90/FFFFFF/twitter-circled--v1.png"/></a>
                <a href="/pages/maintain.php"><img src="https://img.icons8.com/ios-glyphs/90/FFFFFF/linkedin-circled--v1.png"/></a>
            </div>
        </div>
        <div class="fline-container"><span class="fline"></span></div>
        <div class="fbottom"> <p class="copyright">© 2022 Company, Inc</p></div>
    </footer>
    
</body>
</html>
    ';
}
?>