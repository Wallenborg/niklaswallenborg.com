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
     <p><a href="about.php">About</a></p>
    <p><a href="cv.php">CV</a></p>
    <p><a href="contact.php">Contact</a></p>
    <p><a href="https://www.instagram.com/niklaswallenborg/" target="_blank">Instagram</a></p>
    <p class="pstartpage">Works / Projects</p>
    <hr>
    <p><a href="index.php">Back</a></p>
    <h2>www.i-still-loooove-you.com</h2>
    <blockquote class="textleft">www.i-still-loooove-you.com is an ”empty” / blank hompage that gets a new random background colour every time it's reloaded. The colors are from the 216 Web safe colors, which  emerged during the early era of the internet; a standardized palette of colors that displayed consistently across all major browsers.</blockquote><br>
   
    <img src="img/loveyou/love_screen.jpg">
    <p><a href="http://www.i-still-loooove-you.com/" target="_blank">Visit: www.i-still-loooove-you.com</a> </p>
    <br>
    <div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/loveyou/billboard.jpg" style="width: 400px">
</div>
<div class="mySlides fade">
  <img src="img/loveyou/nw_2.jpg" style="width: 400px">
</div>
        
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
    <p><a href="index.php">Back</a></p>
    <hr>
    <!-- load the link menu -->
    <?php include 'menu.php'; ?>
    <hr>
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