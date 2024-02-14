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
            <h1 class="pstartpage">Sci-fi a Family Dinner (Tell Them to Meet Me at the Mountain / And it Sang for Us )</h1>
            <br>
     <!-- slideshow -->
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="img/sci-fi-dinner/sci-fidi_1.png" style="width:100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/sci-fi-dinner/sci-fidi_2.png" style="width:100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/sci-fi-dinner/sci-fidi_3.png" style="width:100%"/>
                </div>
                <div class="mySlides fade">
                    <img src="img/sci-fi-dinner/sci-fidi_4.png" style="width:100%"/>
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
        <h3>-Script Dialog-</h3>
        <div>
            <p class="textleft"> - Mother! Are we the first to arrive here?</p> 
            <p class="textleft">- Yes.</p> 
            <p class="textleft">- Morning, Mother.</p> 
            <p class="textleft">- Honey, wake up!</p> 
            <p class="textleft">- Oh, I feel dead.</p>
            <p class="textleft">- OK, get dressed, Mother says the sun rises in 20 minutes.</p> 
            <p class="textleft">- Can I start? Are you hungry? I’m hungry.</p> 
            <p class="textleft">- Go ahead, I need something to eat myself.</p> 
            <p class="textleft"> - Have you got any biscuits over there?</p> 
            <p class="textleft">- Here’s some cornbread. Help yourself.</p> 
            <p class="textleft"> - Cornbread? I don’t believe this!</p> 
            <p class="textleft">- Sit down.</p> 
            <p class="textleft">- You happen to be in my seat. Can I have it?</p> 
            <p class="textleft"> - Yes. Of course. Sorry.</p> 
            <p class="textleft">- Mother wants to talk to you.</p> 
            <p class="textleft">- What´s the matter, mom? Do you want something?</p> 
            <p class="textleft">- Yes, I, uh…A little talk. I want to ask you a question.</p> 
            <p class="textleft">- Ok.</p> 
            <p class="textleft">- How are you feelin’?</p> 
            <p class="textleft">- Terrific! Next silly question?</p> 
            <p class="textleft">- Tell me something. Did you see anything? Do you remember anything?</p> 
            <p class="textleft">- Well, yeah!</p> 
            <p class="textleft">- What did it look like?</p> 
            <p class="textleft">- I know this sounds crazy, but I saw something last night, that I can’t explain. There was   this– It went– It was – There was a red whoosh that– I saw it,i can´t describe it.</p> 
            <p class="textleft">- It´s not that we don´t believe you, honey.</p> 
            <p class="textleft">- You won’t make me change my mind…</p> 
            <p class="textleft">- I’m sorry, can I say something? He was here last night. He saw it happen. He says the sun came out last night. He says it sang to him.</p> 
            <p class="textleft">- No, listen! I’m not trying to change your mind. I just want you to listen… There are lots of ideas that would be fun to believe in. Mental telepathy…time travel… immortality…UFO. To tell you the truth, this is reality! all this bullshit! It’s turning this house upside down!</p> 
            <p class="textleft">- Mom.</p> 
            <p class="textleft">- Sorry I yelled at you. I don’t know what you saw. All we´re trying to say is, maybe you imagined it.</p> 
            <p class="textleft">- Well it was real.</p> 
            <p class="textleft">- I find that hard to believe. There is an explanation for this, you know.</p> 
            <p class="textleft">- I don’t wanna hear your goddamn explanation! I saw something last night that I can’t explain. </p> 
            <p class="textleft">- Whoa, whoa now…</p> 
            <p class="textleft">- Tell me something. What do we do now?</p> 
            <p class="textleft">- Oh… What…? watch the skies, please. What’s the point?</p> 
            <p class="textleft">- Anyway, where are we? I’m hungry. I’m thinking food. Where’s our pizza, man? Where’s the pizza? Plenty of sausage and pepperonis.</p> 
            <p class="textleft">- I hate these potatoes. The first thing I´m going to do when I get back is to get some decent food like eggs or something.</p> 
            <p class="textleft">- Like a taco?</p> 
            <p class="textleft">- Yes.</p> 
            <p class="textleft">- Stop that! The food ain´t that bad. Are you thirsty? Want a Coke?</p> 
            <p class="textleft">- Yes. Thank you.</p> 
            <p class="textleft">- Mom, look! this is a flying saucer.</p> 
            <p class="textleft">- That’s the one I saw! I swear that’s the same one! It’s the one I saw!</p> 
            <p class="textleft">- Don’t! Not now.</p> 
            <p class="textleft">- All right, everybody, quiet down! It’s made of pewter, made in Japan…</p> 
            <p class="textleft">- Do they live on the moon? Mom, I believe in them.</p> 
            <p class="textleft">- I believe in them too.</p> 
            <p class="textleft">- No, you don’t. No, they are not for real.</p> 
            <p class="textleft">- Dad says we do.</p> 
            <p class="textleft">- There better be a good reason for this…because it doesn’t make sense!</p> 
            <p class="textleft">- My fault!</p> 
            <p class="textleft">- Yeah, you might say that.</p> 
            <p class="textleft">- Dad, can I ask you a question? Are they for real?</p> 
            <p class="textleft">- To tell you the truth, I’m just saying I’m not serious I don’t believe. I sure wish I did. For 15 years I’ve been looking……for these damn silly lights in the night sky. I’ve never found any. I’d like to, because I believe in life elsewhere.</p> 
            <p class="textleft">- Serious?</p> 
            <p class="textleft">- Honey… Wait, I can’t– Honey Well, as I said, I don’t believe, but I saw Bigfoot once. Made a sound I would not want to hear twice in my life.</p> 
            <p class="textleft">- Goddamn it, come on! Be quiet! Stop it! Can’t you understand English? What’s all this shit? Is this your idea of a good time?</p> 
            <p class="textleft">- I’m sorry. It was a joke!</p> 
            <p class="textleft">- Thank you.</p> 
            <p class="textleft">- Listen, will you listen? The communicator, is it still working.</p> 
            <p class="textleft">- A transmission? Out here.</p> 
            <p class="textleft">- Wow Human?</p> 
            <p class="textleft">- E.T.</p> 
            <p class="textleft">- What does it mean?</p> 
            <p class="textleft">- This means something.</p> 
            <p class="textleft">- Like what?</p> 
            <p class="textleft">- An answer!</p> 
            <p class="textleft">- Shut up!</p> 
            <p class="textleft">- Oh. Does this mean, they´re coming?</p> 
            <p class="textleft">- No.</p> 
            <p class="textleft">- I mean I don’t think so.</p> 
            <p class="textleft">- Say hi.</p> 
            <p class="textleft">- Hm… Say it.</p> 
            <p class="textleft">- Hello. We are here. Earth. Home.</p> 
            <p class="textleft">- All, right.</p> 
            <p class="textleft">- Mom, look! The sun’s here!</p> 
            <p class="textleft">- Ok, get dressed, your turn to do the dishes.</p> 
            <p class="textleft">- I haven´t finished my coffe, it´s the only thing good on this ship.</p><p class="textleft">- You do your job. I’ll give you about…about seven minutes. Clean everything up! One…two…three…</p> 
            </div>
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