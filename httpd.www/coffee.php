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
        sci-fi, digital culture, space and the apocalypse )</p>
    </header>
    <hr>
    <p><a href="index.php">Back</a></p>
    <hr>
    <main>
        <section>
            <h1 class="pstartpage">Reenact Alien Coffee</h1>
            <br>
            <p class="txup">2021-ongoing</p><br>
            <blockquote class="textleft"> &#8220;Can I finish my coffee? Thank you. It's the only thing good on this ship.&#8221;</blockquote>
            <p class="stext">-Parker, Chief engineer aboard the commercial towing vessel, the USCSS Nostromo. Year 2122.</p><br>
            <figure>
                <img src="img/coffee/coffee_1.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_10.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_11.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_12.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_13.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_14.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_15.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_16.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_17.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_18.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_19.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_2.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_20.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_21.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_22.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_3.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_4.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_5.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_6.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_7.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_8.jpg" alt="Point of view hand holding coffee cup"/>
                <img src="img/coffee/coffee_9.jpg" alt="Point of view hand holding coffee cup"/>
            </figure>
            <p class="stext">They said - &#8220;There's too much caffeine in your bloodstream.&#8221; </p><br>
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