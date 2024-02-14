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
        <h1 class="pstartpage">mail show</h1>
        <img src="img/MS/maillog.png">
        <p class="textleft">Where the email function as the exhibition room. 
        The main goal is to be an open and collective platform for digital art. 
        In a way, a resistance and an alternative to social media. Where we 
        go back to the email as a form of communication for art. "mail show" 
        is a subscription service, where you get the exhibitions sent to your email.</p>
        <p class="textleft">“mail show”  is non-profit, independent and self-organized 
        digital art place. Based in Stockholm, Sweden. Curated and created 
        by the artist Niklas Wallenborg.</p>
        <p class="textleft">The first exhibition was sent on October 7, 2022 and is considered 
        as the starting point for "mail show”.</p>
        <p class="textleft inleft">So you want to receive "mail show" Great! send an email with your email address to:</p>
        <div class="textleft" ><a href="mailto:info@niklaswallenborg.com">
        <small>info@niklaswallenborg.com</small></a></div>
        </section>
        <article>
        <h2 class="textleft">Archive:</h2>
            <section>
                <h3>mail show 3</h3>
                <h5>Just want to wake up to some kind of reality.</h5>
                <h5>07.02.2023</h5>
                <p class="textleft">Participating artists:</p>
                <p class="textleft inleft">Madeleine Aleman, Ragnar Persson, Sara Elggren</p>        
            </section>
            <section>
                <h3>mail show 2</h3>
                <h5>Do androids dream of electric sheep.</h5>
                <h5>09.12.2022</h5>
                <p class="textleft">Participating artists:</p>
                <p class="textleft inleft">Amanda Karlsson, Giulia Cairone, Rymdgymnasiet, Windy Fur Rundgren</p>
            </section>
            <section>
                <h3>mail show 1</h3>   
                <h5>07.10.2022</h5>
                <p class="textleft">Participating artists:</p>
                <p class="textleft inleft">Kristina Abelli Elander, Patrick Kretschek, Jakob Ojanen, Richard Krantz, Timo Menke, Helene Karlsson, Kristoffer Svenberg, Niklas Wallenborg</p>
            </section>
       </article> 
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