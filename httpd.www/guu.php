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
            <h1 class="pstartpage">going under underground</h1>
            <img src="img/guu/guulogo.jpg">
            <p class="textleft">So this is my new way of not making any money... A new publishing company &quot;going under underground&quot; I will release comics, art and other things I love!</p>
            <h3>Publication History:</h3>
        <section>
            <hr>
            <p>2023:</p>
            <section class="sectionBook">
                <p class="textleft"> POLITICAL - A Comics and stuff Anthology</p>
                <p class="booktext"> 148x210 mm 52 pages, soft cover. 100 sek plus shipping Only 50 limited copies available!</p>
                <img src="img/guu/guu_5.jpg">
                <p class="booktextabout inleft">Featuring an lineup of talented artists - André Batista, Anders Tolergård, Diktgymnasiet & Robin Montelius, Dorinel Marc, Frej B, Johan Löfström, Kristina Abelli Elander, Magdalena Nordin, Niklas Wallenborg, Patrick Kretschek, and Peter Banö.</p>
            </section>
            <section class="sectionBook">
                <p class="textleft">The Writings of Karl Warx</p>
                <p class="booktext"> 105x148 mm 104 pages, soft cover. 150 sek plus shipping</p>
                <img src="img/guu/guu_4.jpg">
                <p class="booktextabout inleft">&quot;The Writings of Karl Warx is a remarkable collection of essays by the contemporary thinker and digital revolution activist Karl Warx. This book, published by &quot;Going Under Underground&quot;, an underground publishing house based in Stockholm, Sweden, provides a comprehensive overview of Warx's ideas and activism in the digital age. Overall, &quot;The Writings of Karl Warx&quot; is an important contribution to the ongoing conversation about the role of the internet in society. It is a must-read for anyone interested in the digital revolution, social justice, and the future of our interconnected world. "Going Under Underground" should be commended for publishing this groundbreaking work and for their commitment to promoting alternative voices and perspectives.&quot;- Isadora Bishop, The Metropolitan Journal</p>
            </section>
            <section class="sectionBook">
                <p class="textleft">Cute Cats and Capitalism</p>
                <p class="booktext"> 148x148 mm 24 pages, soft cover. 100 sek plus shipping</p>
                <img src="img/guu/guu_2.jpg">
                <p class="booktextabout inleft">&quot;Cute cats thinking about capitalism&quot;</p>
            </section>
        </section>
        <section>
            <hr>
            <p>2022:</p>
            <section class="sectionBook">
                <p class="textleft">Jerry (and A.L.) - Season 1</p>
                <p class="booktext"> 148x148 mm 104 pages, soft cover. 150 sek plus shipping</p>
                <img src="img/guu/guu_3.jpg"><br>
                <p class="booktextabout inleft">&quot;A blue-collar space comic. The year is 2122 and this is the story about Jerry, a blue-collar worker on a 40-year contract aboard the commercial cargo vessel the CSS Ananke and the ships computer A.L (Artificial Labor controller ) a sentient computer with artificial intelligence.&quot;</p>
            </section>
            <section class="sectionBook">
                <p class="textleft">The Communist Manifesto - The Bootleg Edition</p>
                <p class="booktext"> 148x210 mm 80 pages, soft cover. 250 sek plus shipping</p>
                <img src="img/guu/guu_1.jpg">
                <p class="booktextabout inleft">&quot;Compiled from photos of pages taken from various editions of The Communist Manifesto&quot;</p>
            </section>
        </section>
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