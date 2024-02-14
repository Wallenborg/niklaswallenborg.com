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
            <h1 class="pstartpage">About.</h1>
            <p class="textleft">I'm a visual artist exploring transformation, sampling, and inter-cultural allusions. My work critiques society by creating alternative realities through sci-fi influences. I merge past, present, and future, addressing moral, political, and technological aspects. Through art, I resist and reshape reality, exploring the gap between human emotions and the virtual world. From mythology to digital bodies, I bridge high-tech with a low-tech approach. Since 2023 I work mostly with internet_art made for the web</p>
            <p class="textleft">Niklas Wallenborg - 2023</p>
            <figure>
                <img src="img/NW.jpg" alt="Self portrait artist in studio"/>
                <p class="booktextabout">Self portrait artist, studio.- 2019</p>
            </figure>
        </section>
    </main>
    <hr>
    <p><a href="https://wallenborg-portfolio.netlify.app/" target="_blank">Creative Developer</a></p>
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