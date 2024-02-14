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
            <h1 class="pstartpage">The Word for World Is Forest</h1>
            <p class="textleft">What will life on Earth look like in the future? How can we imagine a future that will be radically different from the present? Can our planet help us visualise and comprehend the future?</p>
            <p class="textleft inleft">According to collective expertise, evidence of climate change is overwhelming. Earth’s temperature is rising as a consequence of greenhouse gas emissions, thus resulting in extreme climate conditions. The changes are taking place to such an extent that it equals an entry into a new geological epoch, and we are exceedingly experiencing more of the large-scale impacts brought on by climate change.</p>
            <p class="textleft">The exhibition investigates and relates to a world where humans no longer form the basis, but are simply an existence amongst others in our environment. The aim is to dissolve the dichotomy between human and environment, and to discover stories beyond, a new and unexplored path into the future. In The Word for World Is Forest we are presented with four artists who, in different ways, deal with the idea of humankind and nature as an indivisible whole, whilst relating to the meeting points between art and science.</p>
            <p class="textleft"><b>Exhibition concept:</b><br>Niklas Wallenborg.</p>
            <p class="textleft"><b>Participating artists:</b><br>Timo Menke, Hanna Ljungh, Lina Persson, Niklas Wallenborg</p>
            <img src="img/forest/1.jpg">
            <p class="stext"><b>Köttinspektionen</b>24 augusti - 8 september 2019</p>
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