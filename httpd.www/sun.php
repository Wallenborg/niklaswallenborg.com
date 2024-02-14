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
            <h1 class="pstartpage">Everlasting (neverending) Sunrise/Sunset</h1>
            <p class="textleft">In the beginning they said – If smog blocks out the sun, throw up a video of it! But, when did you last see the sun? do you even remember the sun? have you ever seen the sun ?</p>
            <p class="textleft">Smog is a type of air pollutant. The word <q>smog</q> was coined in the early 20th century as a portmanteau of the words smoke and fog</p>
            <p class="textleft">The Sun is the star at the center of the Solar System. It is a nearly perfect sphere of hot plasma, with internal convective motion that generates a magnetic field via a dynamo process. It is by far the most important source of energy for life on Earth.</p>
            <p class="textleft">The Znamya project was a series of experimental orbital mirrors, designed to beam solar power to Earth by reflecting sunlight. It consisted of two experiments – the Znamya 2 experiment, and the failed Znamya 2.5 – and the proposed Znamya 3. The project was abandoned by the Russian Federal Space Agency after the failed deployment of the Znamya 2.5.</p>
            <p class="textleft">A Dyson sphere is a hypothetical megastructure that completely encompasses a star and captures most or all of its power output. The concept was first described by Olaf Stapledon in his science fiction novel Star Maker(1937)</p>
            <p class="textleft">Is it possible to create an artificial sun?</p> 
            <p class="textleft">In the far future, it could be. We don’t know how people will put the problem at that time, but as for now, we can assume that there are a few ways to do that.</p>
            <p class="textleft"><b>Accretion sun:</b></p><blockquote class="textleft">In order to do that, some technology must be developed to force matter to collide. For example, if we take the dust disk floating around Epsilon Eridani, we might be able to create a small red dwarf star. Again, if we divert the two brown dwarfs from Epsilon Indi, we can also create a red dwarf star. If the right mass is achieved, nuclear fusion will start. A white dwarf can collide with a red dwarf to create a star somehow similar to our sun.</blockquote>
            <p class="textleft"><b>Nuclear ignition:</b></p><blockquote class="textleft">The most used theory in sci-fi movies is to transform a gas giant into a star. However, if somehow you create conditions in the core of Jupiter, the resulting heat will make the planet expand, until pressure and temperature fall below fusion limit. To have nuclear fusion inside Jupiter, you will need to keep the fire going (to stimulate reaction to keep going). The amount of needed energy will be huge. Will the star at least produce as much energy as it consumes to stay alive? This is a hard question. What is to be said for sure is that. if we start nuclear reactions inside Jupiter, its diameter will grow beyond the orbit of Ganymede. It will also generate a strong solar wind. Failed sun. In case of a large enough gas giant (Jupiter fits well for this), the solution might not be to keep a continuous fusion reaction, but just to heat the planet. Hot planets can be artificially formed this way. If we heat Jupiter until its surface reaches 3000 K, then its light can support life for plants and its infrared light can heat a satellite. A Habitable Zone around a hot Jupiter should be at 7 million km (0.05 AU). This fake sun will cool fast, but will support life on a hosted planet for 10 000 years.</blockquote> 
            <p class="textleft"><b>Satellite sun:</b></p><blockquote class="textleft">The idea is to create an orbital station, able to produce light and heat from hydrogen fusion. A single station will create a day – night cycle on a Rough planet. An army of stations will make an eternal day. Compared to all other artificial suns, this one is the cheapest and the fastest to get applied.</blockquote> 
            <p class="textleft"><b>Ground sun:</b></p><blockquote class="textleft">Some sci-fi movies and cartoons describe an artificial sun placed on the ground. Creating a massive source of light and heat on the ground might be more easily and cheaper. It also will be far more cheap to maintain. That sun will most probably be a nuclear fusion plant. It will be far more easy to control energy output. Main problem of a ground sun is that its light and heat can only be used on a limited area. The sun will appear as if it is at dawn. The heat will be released mostly into the upper atmosphere and only a fraction will be directly radiated to ground. Heated air will circle around the planet. The largest amount of light and heat will escape into outer space. By placing a giant balloon in the stratosphere, some radiation can be redirected back to the planet.</blockquote>
            <figure>
                <img src="img/sun/sunnacka.jpg">
            </figure>
            <p class="textleft"><small>Everlasting (neverending) Sunrise/Sunset. Slideshow 40 images ( found on the internet )</small></p>
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