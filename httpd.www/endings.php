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
            <h1 class="pstartpage">The Endings</h1>
            <p class="textleft">How will the world end ? Well maybe something like this... according to <b>DISASTER, APOCALYPTIC and POST-APOCALYPTIC MOVIES.</b></p>
            <p class="stext inleft">It's not the end of the world that we crave, but what comes after the end of the world. Apocalyptic narratives allow us to imagine our world being reborn, with us having a second chance to rebuild it from scratch.</p>
            <p class="textleft">- 136 digital prints of apocalyptic visions (from movies)</p>
     <!-- slideshow -->
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="img/end/endings126.jpg" style="width:400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/end/endings1.jpg" style="width:400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/end/endings29.jpg" style="width:400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/end/endings31.jpg" style="width:400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/end/endings43.jpg" style="width:400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/end/endings50.jpg" style="width:400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/end/endings52.jpg" style="width:400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/end/endings52.jpg" style="width:400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/end/endings6.jpg" style="width:400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/end/endings61.jpg" style="width:400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/end/endings74.jpg" style="width:400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/end/endings79.jpg" style="width:400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/end/endings89.jpg" style="width:400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/end/endings99.jpg" style="width:400px"/>
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
<!-- slideshow end -->
            <p class="stext inleft">The end of the world is a modern obsession. Doomsday is something that has been happening since the beginning of time, we are just obsessed with it more now than ever before.But the END never actually comes. The world never ends, even in the stories. Millions, billions even die, as is required in any apocalyptic tale, but life will proceed.</p>
            <img src="img/end/end.jpg">
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