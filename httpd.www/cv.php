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
            <h1 class="pstartpage">CV</h1>
            <p class="textleft">Niklas Wallenborg – 19790612</p>
            <p class="textleft">Education:</p>
            <p class="stext inleft">MA in Fine Arts, University College of Arts, Crafts and Design, Stockholm 03-06<br>
            BA in Fine Arts, University College of Arts, Crafts and Design, Stockholm 01-03</p>    
            <p class="textleft">Selected Solo Exhibitions:</p>
            <p class="stext inleft">Low-Life, High-Tech ”A good GIF should loop forever” – Galleri 4pi, Online Jun 22<br>
            Digital Love – Galleri Silk, Online May 22<br>
            Dead Pixel – Digitaliseum, Malmö Apr 22<br>
            SPACESHIP EMPTINESS (The sky used to be more) – Studio 44,Stockholm Jan 20<br>
            Utopia Now!, Samtidskonst i Bro, Upplands-Bro, Maj 18<br>
            How I learned to stop worrying and love the end!, Galleri 21, Malmö, Mars 18<br>
            The Unseen Future, Konstväggen, Jönköping, Jan 18<br>
            Predicting the Unfuture part 1 - the Endings, Kolonin, Arvika Maj 17<br>
            Workshop 2, God in the Machine “The Brain” ,Candyland, Stockholm, April 13<br>
            Workshop 1, God in the Machine “The Body” ,Dansens Hus, Stockholm, Feb 13</p>
            <p class="textleft">Selected Group Exhibitions:</p>
            <p class="stext inleft">The Life and Death of the WWW - Galleri 54, Göteborg Feb 23<br>
            Open Call – Galleri Backlund, Göterborg Feb 22<br>
            Berättelser om klimatet – Konstfrämjandet Värmland, Karlstad Dec 21<br>
            Mixed Messages – Healthy Competition, Stockholm Dec 21<br>
            Without-Within – Galleri CC, Malmö Dec 21<br>
            The Life and Death of the www (The Prequel) – Barnängsgatan, Stockholm May 20<br>
            Höstsalong, Galleri Silk, online, Oct 20<br>
            Tracing the tracks, Rum46, Aarhus, Denmark, Jul 20<br>
            Där världen kallas skog, Köttinspektionen, Uppslala, Aug 19<br>
            Sci-fi is for real 13 - Hypersleep- , Crume Heaven, Stockholm, Sep 18<br>
            INVENTering, Saltskog gård, Södertälje, Apr 18<br>
            Finland - Med våra och deras ögon,Konstfrämjandet värmland, Västerås, Nov17<br>
            The Ultimate Limits of Infinity and the Space Beyond Part,Gotlands Konstmuseum , Visby, Oct 17
            Södertälje Konsthall, Södertälje, Feb 17
            Nacka Konsthall, Nacka, Jan 17
            Galleri 54, Göteborg, Sep 16<br>
            Inside Voyager in Outer Space, Hangmen Projects, Sep 17<br>
            Nyt Kapitel, Svends Bibliotek Museumsbygningen, Köpenhamn, Denmark , Dec 16</p>
            <p class="textleft">Published work:</p>
            <p class="stext inleft">Reptilhjärnan nr 9, Recreate the first Meal Eaten in Space, 2023<br>
            Cute Cats and Capitalism, going under underground, 2023<br>
            The Communist Manifesto ‐ the bootleg edition, going under underground, 2022<br>
            Jerry ﴾ and A L ﴿ going under underground, 2022<br>
            Occult studies Volume 2: Revolution, Snake Hair Press, usa 2021<br>
            Disassembled Dictionary: “Science Fiction”, Praun o Guermouche, 2021<br>
            KONSTNÄREN #1 2021: Framtiden bortom pandemin, 2021<br>
            Occult Studies - Apocalypse, Snake Hair Press, usa 2020<br>
            art-Zine Sci-fi is for real # 1-17, 2013 – 2022<br>
            The Swedish Dance History vol 4 2013<br>
            Pigeon Camp,Överblick,2006</p>
            <p class="textleft">Grants:</p>
            <p class="stext inleft">Stockholmstads atelje stöd, 2021-23<br>
            Arbetsstipendium, 2020<br>
            Stockholmstads atelje stöd, 2018-20<br>
            Innovativ Kultur, 2012<br>
            The Swedish-Danish Cultural Foundation, 2011<br>
            The Swedish Arts Grants Committee, Travel grant, 2011<br>
            Konstfack graduate award 2006<br>
            Drougge/Kerns Minnesfond/ Memorial fund 2000</p>
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