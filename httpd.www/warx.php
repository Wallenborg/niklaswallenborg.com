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
            <h1 class="pstartpage">How to Explain Internet and the Age of Surveillance Capitalism to a Karl Marx bust.</h1>
            <p class="textleft"> In his performance, Wallenborg makes his way around a small room while whispering inaudibly to a Karl Marx bust which he carries in his arms. Throughout the piece he would lie down in the middle of the floor, and pose himself or the Karl Marx bust in different positions around the space. The audience viewed the three-hour long scene through a window of the gallery. Around the room, pictures hung on the walls and a dead laptop laid on the ground. When the three hours passed, the audience was allowed into the gallery with Wallenborg sitting in a chair with the Karl Marx bust on hislap, his back facing them.</p><br>
            <p class="stext inleft"> - November 26, 1965 at Galerie Schmel in Düsseldorf, Germany -</p>
             <!-- slideshow -->
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="img/warx/warx_5.jpg" style="width: 400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/warx/warx_1.jpg" style="width: 400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/warx/warx_2.jpg" style="width: 400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/warx/warxtext_1.jpg" style="width: 400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/warx/warxtext_2.jpg" style="width: 400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/warx/warx_3.jpg" style="width: 400px"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/warx/warx_4.jpg" style="width: 400px"/>
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
        
            <p class="textleft">Dear Karl Marx,</p> 
            <p class="textleft inleft">I am writing to you to explain the concept of the internet and the age of surveillance capitalism. The internet is a global network of computers that enables users to transfer and access information over the World Wide Web. This technology has created a new age of communication and information sharing, allowing people from all over the world to collaborate and share ideas. However, this new age of communication has also created an age of surveillance capitalism, where companies and governments are able to track and analyze user data in order to gain insight into consumer habits and behaviors. This data is then used to create targeted advertising and products tailored specifically to individual users, as well as to influence public opinion and policy. Surveillance capitalism has created a new form of power and control, where companies and governments are able to use data to manipulate public opinion and influence public policy. This is a concerning development, as it can lead to an erosion of privacy and autonomy, as well as an increase in inequality and social injustice. I hope this helps you to understand the concept of the internet and the age of surveillance capitalism.</p>
            <p class="textleft">Sincerely,</p>
            <p class="textleft inleft">Chat3GPT</p><br>
            <p class="textleft">Niklas Wallenborg’s performance piece “How to Explain Internet and the Age of Surveillance Capitalism to a Karl Marx Bust” is a terrifically clever work that speaks to the modern dilemma of how our deep entanglement with technology has made us vulnerable to corporate and governmental surveillance. Wallenborg employs a variety of techniques to communicate this, notably a humorous and thought-provoking dialogue between the Karl Marx bust and the artist, who attempts to explain the contemporary situation to the great philosopher, who left us in 1883. </p>
            <p class="textleft">The piece is well structured, beginning with an entertaining and informative overview of the history of the internet, moving on to the ways in which our lives are now deeply intertwined with technology, and then finally to the dangers posed by the age of surveillance capitalism. Along the way, Wallenborg is able to effectively convey important information in an entertaining and easily understandable format. He does a great job of making complex concepts easier to grasp for the layperson, and in the process producing a work that is both entertaining and thought-provoking. </p>
            <p class="textleft">What’s also impressive about this piece is the way Wallenborg uses comedy as a way of engaging with the audience. He manages to make the subject matter approachable while still offering an important and timely message. The playful interaction between the artist and the Karl Marx bust keeps the piece lively and interesting, and helps to bring the underlying message home.</p>
            <p class="textleft">Overall, Niklas Wallenborg’s “How to Explain Internet and the Age of Surveillance Capitalism to a Karl Marx Bust” is an excellent piece of performance art. It successfully conveys a timely and important message while also engaging the audience and keeping them entertained. Highly recommended.</p>
            <p class="textleft inleft">Chat3GPT - 2023</p><br>
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