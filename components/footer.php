<?php

function footer() {
echo '
<head>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Kalam&family=Lobster&family=Patrick+Hand&display=swap");
    .footer {
        display: flex;
        flex-direction: column;
        background-color: rgb(59, 55, 55);
        width: 100%;
        height: 180px;
    }
    
    .line {
        position: absolute;
        top: 100px;
        width: 100%;
    }
    .bottom-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
        color: white;
    }
    
    .upper-container {
        margin-top: 20px;
        color: white;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        /* background-color: blue; */
        padding-left: 150px;
        padding-right: 150px;
    }
    
    .left {
        font-family: kalam;
        font-size: 25px;
    }
    
    .right{
        display: flex;
        /* background-color: red; */
        scale: 1;
        text-decoration: none;
        border:none;
    
    }
    
    .right img {
        width: 50px;
        margin-left: 60px;
        /* margin-left: 30px; */
    }
    
    @media (max-width: 400px){
        
    
        .footer {
            display: flex;
            flex-direction: column;
            background-color: rgb(59, 55, 55);
            width: 100%;
            height: 180px;
        }
    
        .line {
            display: none;
            position: absolute;
            top: 100px;
            width: 100%;
        }
    
        .bottom-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            color: white;
        }
    
        .upper-container {
            margin-top: 20px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* background-color: blue; */
            padding-left: 150px;
            padding-right: 150px;
        }
    
        .left {
            font-family: kalam;
            font-size: 25px;
            margin-left: 20px;
            margin-bottom: 2px;
        }
    
        .right{
            display: flex;
            /* background-color: red; */
            scale: 1;
    
        }
    
        .right img {
            width: 50px;
            margin-left: 30px;
            /* margin-left: 30px; */
        }
    }
    
    </style>
</head>
    <div class="footer">
        <div class="upper-container">
            <div class="left"><span>EZY FOODS</span></div>
            <div class="right">
                <a href="/pages/maintain.php"><img src="https://img.icons8.com/ios-glyphs/90/FFFFFF/facebook-new.png"/></a>
                <a href="/pages/maintain.php"><img src="https://img.icons8.com/ios-glyphs/90/FFFFFF/twitter-circled--v1.png"/></a>
                <a href="/pages/maintain.php"><img src="https://img.icons8.com/ios-glyphs/90/FFFFFF/linkedin-circled--v1.png"/></a>
                
            </div>
        </div>
        <div class="bottom-container">
            <p class="copyright">© 2022 Company, Inc</p>
        </div>
    </div>
';
}
?>