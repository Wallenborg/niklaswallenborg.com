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
    <div class="headline">NIKLAS WALLENBORG</div>
    <p class="txup">( Interdisciplinary artist, with an interest in socialism, 
        sci-fi, digital culture, space and the apocalypse )<p>
    <hr>
    <p><a href="index.php">Back</a></p>
    <hr>
    <main>
        <section>
            <h1 class="pstartpage">The act of Foreseeing</h1>
            <p class="textleft"><b>Predicting the Unfuture</b> – A collective vision of Future cities, Alien landscapes and the end of the world<small> - Performance, 50 digital print.</small></p>
            <img src="img/for/forsee_1.jpg">
            <p class="stext inleft">Looking ahead, we’re entering the uncomfortable era when many “futuristic” movies are set – usually of the dystopian, apocalyptic, “you really don’t want it to turn out like this” variety... According to The Running Man, for example, the economy collapses 2017. Art and communications are outlawed. But don’t worry: according to the sci-fi calendar, we’ve only got five years until global warming.. but the way-off future is often brighter. The future looks bright, except when it doesn’t.. The effects of climate change are going to be felt for hundreds, and possibly thousands, of years to come. And as we enter into the planet’s Sixth Mass Extinction, we run the risk of damaging critical ecosystems and radically diminishing the diversity of life on Earth and finally the end of everything...</p>
        
             <!-- slideshow -->
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="img/for/theact_1.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_2.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_3.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_4.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_5.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_6.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_7.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_8.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_9.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_10.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_11.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_12.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_13.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_14.jpg" style="width:400px"/>
        </div>
        <div class="mySlides fade">
            <img src="img/for/theact_15.jpg" style="width:400px"/>
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