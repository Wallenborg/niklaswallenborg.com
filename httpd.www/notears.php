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
            <h1 class="pstartpage">No Tears for Space!</h1>
            <p class="textleft">100 digital drawings based on headlines regarding space, taken from socialmedia posts during 2020</p>
         <!-- slideshow -->
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="img/notears/notears_1.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_2.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_3.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_4.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_5.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_6.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_7.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_8.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_9.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_10.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_11.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_12.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_13.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_14.jpg" style="width: max 100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/notears/notears_15.jpg" style="width: max 100%"/>
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