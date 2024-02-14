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
            <h1 class="pstartpage">Utopia Now</h1>
            <p class="textleft">Is a temporary and fleeting installation looking at utopia as an idea and a place. It's time to create new visions, new ideas and new goals! It is time to invent and test new thoughts and philosophies and through this set the direction towards a society that is a little better, even if we may never get there. We have at least created a benchmark against something that does not lead straight into an abyss. Something that cuts right into our contemporary times of crises, authoritarian populism and nationalism and creates a grain of hope. <b>Fantasy is not an escape from reality but a resistance</b>, an offer of an alternative world and an opportunity to change the image of reality and our future, fictional worlds can help shape reality. By talking about the future, we shape it. So let's create a collective vision of the future. -2018</p>
            <figure>
                <img src="img/utopianow/utopiaB.jpeg"/>
            </figure>
            <p class="stext">Utopia Now!, Samtidskonst i Bro, Upplands-Bro</p>
                 <!-- slideshow -->
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia6.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia2.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia5.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia4.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia7.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia8.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia10.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia11.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia13.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia14.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia15.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia16.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia17.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia19.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia20.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia21.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia22.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia24.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia25.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia26.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia27.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia28.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/utopianow/instutopia29.jpg" style="width: 500px"/>
                </div>
                <div class="mySlides fade">
                <img src="img/utopianow/instutopia30.jpg" style="width: 500px"/>
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