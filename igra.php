<?php

echo "<p>Здравствуйте $nicename если хотите покинуть игру нажмите <a href='exit.php'>здесь</a></p>";
?>
<!DOCTYPE html>
<html lang="ru" >
    <head>
        <meta charset="UTF-8">
        <title>Математическая игра для детей</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3965/3965108.png" type="image/x-icon">
    </head>

    <body>
  
        <div class="container"  id="vantus">   
        <h1>Математическая игра решение примеров</h1>
        <div id="container">
          
            <div id="score">
               Счет: <span id="scorevalue">0</span>
            </div>
            <div class="pause" onclick="togglePlay()">🔇</div>
            <div class="player">
                <audio class="audio" src="./audio/1.mp3" autoplay type="audio" loop=""></audio>
            </div>
            <div id="correct">
                Правильно
            </div>
            <div id="wrong">
                Попробуй еще раз
            </div>
            <div id="question">

            </div>
            
            <div id="instruction">
              Ответь правильно на примеры за 1мин
            </div>
            <div id="choices">
                <div id="box1" class="box"></div>
                <div id="box2" class="box"></div>
                <div id="box3" class="box"></div>
                <div id="box4" class="box"></div>
            </div>
            <div id="startreset">
                Начать
            </div>
           
            <div id="timeremaining">
                Оставшиеся время :
                <span id="timeremainingvalue">30</span>
              сек
            </div>
            <div id="gameOver">
            </div>
           
        </div>
       
    </div>
  
    
        <!-- script -->
       
        
       
     
        <script src="./js/three.r119.min.js"></script>
        <script src="./js/vanta.net.min.js"></script>
        <script>
            VANTA.NET({
              el: "#vantus",
              mouseControls: true,
              touchControls: true,
              gyroControls: false,
              minHeight: 795.00,
              minWidth: 440.00,
              scale: 1.00,
              scaleMobile: 1.00,
              color: 0xff55,
              backgroundColor: 0x0,
              points: 10.00,
              maxDistance: 21.00,
              spacing: 16.00
            })
            </script>
            <script src="./js/audio.js"></script>
        <script type="text/javascript" src="js/script.js">  </script>
    </body>

</html>