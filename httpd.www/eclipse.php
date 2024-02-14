<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NW</title>
     <link rel="stylesheet" href="css/style.css" />
     <link rel="icon" type="image/x-icon" href="img/nwdeadpixel.ico">
</head>
<body>
    <hr>
    <div class="headline">NIKLAS WALLENBORG</div>
    <p class="txup">( Interdisciplinary artist, with an interest in socialism, 
        sci-fi, digital culture, space and the apocalypse )<p>
    <hr>
     <p><a href="about.php">About</a></p>
    <p><a href="cv.php">CV</a></p>
    <p><a href="contact.php">Contact</a></p>
    <p><a href="https://www.instagram.com/niklaswallenborg/" target="_blank">Instagram</a></p>
    <p class="pstartpage">Works / Projects</p>
    <hr>
    <p><a href="index.php">Back</a></p>
    <h2>Virtual Total Eclipse (of the heart)</h2>
    <p class="textleft">I remember once when I was a kid and how 
        I lay on the sun-drenched suburban road and stared up at the blue 
        summer sky, I wanted to see it painted, painted black. Black as night, 
        black as coal. Just then and there the sun was blacked out from the sky. 
        <b>(If the sun goes out, it will take 8 minutes before we notice anything)</b>
        A solar eclipse occurs when the moon passes between the sun and the earth. 
        It then blocks almost all the sunlight from reaching the earth for a 
        few minutes. The next total solar eclipse in Sweden will occur the year 2126</p>
    <p><a href="virtual-total-eclipse.html" target="_blank">Virtual Total Eclipse</a></p>
    <img src="img/eclipse/TEoH.png">
    <p><a href="index.php">Back</a></p>
    <hr>
    <!-- load the link menu -->
    <?php include 'menu.php'; ?>
    <hr>
    <!-- Random placing black 10x10px square -->
     <div class="randomimage">
            <img src="img/DP.png" id="image" style="position: fixed;" />
        </div>
        <script>
            window.onLoad = Prep();
            
            function Prep(){
                window_Height = window.innerHeight;
                window_Width = window.innerWidth;
                
                image_Element = document.getElementById("image");
                image_Height = image_Element.clientHeight;
                image_Width = image_Element.clientWidth;
                
                availSpace_V = window_Height - image_Height;
                availSpace_H = window_Width - image_Width;
                
                var changeInterval = 3000;
                setInterval(moveImage, changeInterval);
            }
            
            function moveImage(){
                var randNum_V = Math.round(Math.random() * availSpace_V);
                var randNum_H = Math.round(Math.random() * availSpace_H);
                
                image_Element.style.top = randNum_V + "px";
                image_Element.style.left = randNum_H + "px";
            }
        </script>
</body>
</html>