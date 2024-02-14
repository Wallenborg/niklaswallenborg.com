<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NW</title>
     <link rel="stylesheet" href="css/style.css" />
     <link rel="icon" type="image/x-icon" href="img/nwdeadpixel.ico">
    <style>
.container {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}
</style>
</head>
<body>
    <hr>
    <header>
        <div class="headline">NIKLAS WALLENBORG</div>
        <p class="txup">( Interdisciplinary artist, with an interest in socialism, 
        sci-fi, digital culture, space and the apocalypse )<p>
    </header>
    <hr>
    <p><a href="index.php">Back</a></p>
    <hr>
    <main>
        <section>
            <h1 class="pstartpage">The Life and Death of the WWW</h1>
            <p class="textleft">Generations are now growing up with the internet as something 
            taken for granted. Earlier on, a digital reality had a clear outline, but 
            nowadays it is blurred against our lived reality. It is possible to see the era 
            of the World Wide Web as something that has already passed. We no longer use 
            the Internet's basic decentralized and dispersed structure and digital architecture. 
            Instead, it is centralized to social media and a few apps. It is possible to perform 
            activism and protest against this by refusing social media and apps to return to www. 
            But the effect is very small and almost non-existent: technical media is in control.</p><p class="textleft"><b>The Life and Death of the WWW </b>is a artistic and exploratory looking back, as wellas looking forward, that departs from our relationship to a digital world and culture and use the internet as a mental and physical place for projections of dreams, fantasies, research, art and politics.The exhibition presents four artists who relate to and work with the relationship between humans and the digital world in different ways.</p>
            <p class="textleft"><b>Exhibition concept:</b><br>Niklas Wallenborg.</p>
            <p class="textleft"><b>Participating artists:</b><br>Kira Carpelan, Amanda Karlsson,Kristoffer Svenberg, Niklas Wallenborg.</p>
            <div class="container"> 
                <iframe class="responsive-iframe" src="https://player.vimeo.com/video/799887696?h=2138aa2b46"></iframe>
            </div>
            <br>
            <figure>
                <img src="img/www/m.jpg" alt="iPhone on a round mirror"/>
                <p class="booktextabout">I Also Grew Up In Silence And Solitude.iPhone mirror and GIF, 2023, Niklas Wallenborg</p>
            </figure>
            <br>
            <figure>
                <img src="img/www/wwwlogo.jpg"/>
            </figure>
        </section>
    </main>
    <hr>
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