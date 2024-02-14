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
            <h1 class="pstartpage">KARL MARX FASHION</h1>
            <p class="textleft">Karl Marx Fashion <b>(K.M.F)</b> is a political fashion label estabeld 2021 by the swedish artist Niklas Wallenborg. <b>K.M.F</b> believe in and works for eliminating socioeconomic class struggles by creating a classless and equal society by the means of revolution.</p>
            <figure>
                <img src="img/kmf/nwKMF_4.jpg">
            </figure>
            <p class="textleft">Lookbook 2021-2022</p>
            <p class="stext inleft">Beatiful World</p>
     <!-- slideshow -->
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="img/kmf/Untitled_1.jpg" style="width:100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/kmf/Untitled_2.jpg" style="width:100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/kmf/Untitled_3.jpg" style="width:100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/kmf/Untitled_4.jpg" style="width:100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/kmf/Untitled_5.jpg" style="width:100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/kmf/Untitled_6.jpg" style="width:100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/kmf/Untitled_7.jpg" style="width:100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/kmf/Untitled_8.jpg" style="width:100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/kmf/Untitled_9.jpg" style="width:100%"/>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>

            <script>
                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    if (n > slides.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }
                slides[slideIndex-1].style.display = "block";  

                }
            </script>
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