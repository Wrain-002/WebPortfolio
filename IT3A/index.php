<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist</title>
</head>
<style>
    *{
    box-sizing: border-box;
}

@font-face {
    font-family: 'Font1';
    src: url(font/ROMANS.otf);
}
@font-face {
    font-family: 'Font2';
    src: url(font/Ralish\ Voga.otf)
}

@font-face {
    font-family: 'Font3';
    src: url(font/Balisong-UltraItalic.ttf);
}
body{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background-image: url(./img/bggrn.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
    
    
}


header{
    display: flex;
    justify-content: space-between;
   color: #fefefe;
    padding-right: 100px;
    padding-left: 50px;
    border-radius: 50px;
    background-color: #0b2d0b;
    position: sticky;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

}
header h1{
    font-family: 'Font2';
    
}

.navbar{
    position: fixed;
    width: 99%;
    margin-left: 5px;
    margin-top: -100px;
}
nav{
    margin-top: 30px;
}
nav a{
    text-decoration-line: none;
    margin-left: 80px;
    font-size: 20px;
    color: #fefefe;
    font-weight: bold;
}
nav a:hover{
    color: #00ff00;                                                                                                                                                                                                                                                                                                                                                                            ;
}
.Container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    color: black;
    width: 30%;
    margin-top: 100px;
    margin-left: 20px;
    background-color: #238131;
    border-radius: 50px;
    box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
}

.image-container img{
    width: 100px;
    height: 100px;
    border-radius: 70%;
    display: block;
    margin-left: 190px;
    box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
}

.info-container{
    margin-left:  20px;
    flex: 1;
    color: #fefefe;
}

.inf{
    margin-top: 30px;
}
.inf h5{
    font-size:17px;
}

.info-container h2{
 text-align: center;
 margin-left: 120px;
 font-family: 'Font3';
 background: linear-gradient(45deg, #fefefe, #00ff00, #fefefe); 
 background-clip: text;
 color: transparent; 
}

.social-billie {

    margin-left: 100px;
    margin-bottom: 50px;
    margin-top: 50px;
    
}

.social-billie a {
    margin: 0 8px;
    text-decoration: none;
    
}
.social-billie img {
    border-radius: 30px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

}

.social-ins a:hover {
    transform: scale(1.1);
}

.social-billie img  {
    width: 30px;
    height: 30px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

}

.description{
    align-items: center;
    padding: 20px;
    color: #fefefe;
    margin-left: 35%;
    margin-top: -990px;
    height: 700%;
    background-color: #238131;
    width:65%;
    border-radius: 50px;
    box-shadow: 0 8px 12px 0 #00000033, 0 12px 40px 0 rgba(0, 0, 0, 0.19);
}

.gif-container{
    margin-left: 20px;
    margin-right: 20px;
}

.gif-container img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
}
.caption{
 margin-top: 30px;
 text-align: center;
 font-family: 'Font1';
 background: linear-gradient(45deg, #fefefe, #00ff00, #fefefe); 
 background-clip: text;
 color: transparent; 
}
.desc{
    text-align: center;
    line-height: 1.6; 
    text-indent: 100px;
    text-align: justify; 
}



.List{

    padding: 100px;
    width: 30%;
    height: 300%;
    margin-top: -24%;
    margin-left: 20px;
    background-color: #238131;
    border-radius: 50px;
    box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
}

.List h1{
    margin-top: -30%;
    font-size: 30px;
    text-align: center;
    background: linear-gradient(45deg, #fefefe, #00ff00, #fefefe); 
    background-clip: text;
    color: transparent; 
    font-family: 'Font2';
}

.album-list {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 50px;
}

.album {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.3s;
    width: 250px;
    overflow: hidden;
    cursor: pointer;
}

.album:hover {
    transform: translateY(-10px);
}

.album img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

}

.album p {
    padding: 15px;
    font-size: 18px;
    font-weight: bold;
    color: #333;
    text-align: center;
}

.album a {
    text-decoration: none;
    color: inherit;
    display: block;
}

.album a:hover p {
    color: #1DB954; /* Spotify green */
}

.contact{
    background-color: #0b2d0b;
    padding: 100px;
    border-radius:  50px;
    margin: 20px auto;
    width: 60%;
    color: white;
    margin-bottom:  20%;
    margin-top: -40%;
    margin-right: 30px; 
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

}
.contact h2{
    text-align: center;
    margin-bottom: 50px;
    font-size: 30px;
    margin-top: -10px;
    font-family: 'Font1';
}

.jeem-ctnr{
    background-color: #238131;
    width: 50%;
    border-radius: 10px;
    margin-right: 50px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

    
}
.jeem-ctnr img{
 width: 60%;
 margin-left: 60px;
 margin-top: 10px;
 border-radius: 10px;
 box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

}

.jeem-ctnr p{
    font-size: 15px;
    text-align: justify;
    margin-left: 10px;
}

.social-ins {
    margin-top: -70px;
    margin-left: 120px;
    margin-bottom: 500px;
}

.social-ins a {
    margin: 0 8px;
    text-decoration: none;
}
.social-ins img {
    border-radius: 30px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

}

.social-ins a:hover {
    transform: scale(1.1);
}

.social-ins img {
    width: 30px;
    height: 30px;
}

.wrain-ctnr{
    background-color: #238131;
    width: 50%;
    border-radius: 10px;
    margin-left: 55%;
    margin-top: -122%;
    background-size: 50%;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

    
}

.wrain-ctnr img{
width: 60%;
height: 350px;
margin-left: 60px;
margin-top: 10px;
border-radius: 10px;
box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

}

.wrain-ctnr p{
   font-size: 15px;
   text-align: justify;
   margin-left: 10px;
}

.social-icons {
    margin-top: -50px;
    margin-left: 70%;
}

.social-icons a {
    margin: 0 8px;
    text-decoration: none;
}
.social-icons img {
    border-radius: 30px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

}

.social-icons a:hover {
    transform: scale(1.1);
}

.social-icons img {
    width: 30px;
    height: 30px;
}

footer {
    background: #0b2d0b;
    color: #fefefe;
    text-align: center;
    padding: 20px 0;
    margin-top: 40px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);

}

.footer-content p {
    margin: 10px 0;
    font-size: 16px;
}
.logout-icon {
            cursor: pointer;
            margin-left: 50px;
        }
        .logout-icon img {
            width: 30px;
            height: 24px;
            border-radius: 50px
        }

</style>
<body>
    <div class="navbar">
    <header>
    <h1>Pirate Life</h1>
    
    <nav>
        <a href="#Home">Home</a>
        <a href="#Albums">Albums</a>
        <a href="#About-Us">About Us</a>
         <span class="logout-icon" onclick="confirmLogout()">
                    <img src="./img/Logout.jpg" alt="Logout">
                </span>
    </nav>
    </header>
</div>

    <div class="Container">
            <div id="Home">
                <div class="image-container">
                    <img src="./img/Profile.jpg" alt="image description">
                </div>
                <div class="info-container">
                    <h2>Billie Eilish</h2>
                    <div class="inf">
                    <h5>Born</h5>
                        <p>Full Name: Billie Eilish Pirate O'Connell<p>
                        <p>Birth Day: December 18, 2001</p>
                        <p>Birth Place: Los Angeles,California, US</p>
                    <h5>Occupation</h5>
                    <p>Sing, Songwriter, Musicians</p>
                    <h5>Genre</h5>
                    <p>pop</p>
                    <h5>Year Active</h5>
                    <p>2015-present</p>
                    <h5>Mother</h5>
                    <p>Maggie Baird</p>
                    <h5>Relatives</h5>
                    <p>Finneas O'Connell(Brother)</p>
                    <p>Brian Baird(uncle)</p>
                </div>
                <div class="social-billie">
                    <a href="https://www.instagram.com/billieeilish?igsh=NDIxc2JjMGN0c3Zs" target="_blank">
                        <img src="./img/instagram.jpg" alt="Instagram">
                    </a>
                    <a href="https://www.facebook.com/share/18xQgWrnyU/" target="_blank">
                        <img src="img/Facebook.jpg" alt="Facebook">
                    </a>
                    <a href="https://x.com/billieeilish?t=CiP0XMjdjKPODiNW7t8e6g&s=09" target="_blank">
                        <img src="img/twitter.jpg" alt="twitter">
                    </a>
                    <a href="https://open.spotify.com/artist/6qqNVTkY8uBg9cP3Jd7DAH?si=yglu4BFhQm-V50SVObP4vA" target="_blank">
                        <img src="img/Spotify.jpg" alt="Spotify">
                    </a>
            </div>
                </div>
                
            </div>
    </div>

    <div class="description"> 
        <div class="gif-container">
            <img src="./img/bilgif.gif" alt="billie gif">
        </div>
        <h1 class="caption">ABOUT BILLIE</h1><br>
        <p class="desc">Billie Eilish Pirate Baird O’Connell, known professionally as Billie Eilish, is an American singer, songwriter, and performer who rose to global fame in her teens, redefining the pop music landscape with her unique sound,
             style, and artistic vision. Born on December 18, 2001, in Los Angeles, California, Eilish grew up in a creative household. Her parents, Maggie Baird and Patrick O’Connell, were both involved in the entertainment industry, while her brother, Finneas O’Connell,
              became her primary collaborator and producer.</p>
       <p class="desc">Eilish first gained public attention in 2015 when she uploaded the hauntingly delicate single "Ocean Eyes" to SoundCloud. The song, written and produced by Finneas, quickly went viral, drawing millions of listeners and sparking industry interest. This breakout success led to her signing with Interscope Records. Her 2017 EP, Don't Smile at Me, featured hits like "Bellyache", "idontwannabeyouanymore", and "Copycat", solidifying her status as a rising star.

        In 2019, she released her debut studio album, When We All Fall Asleep, Where Do We Go?, which became a cultural phenomenon. Featuring tracks such as "Bad Guy", "You Should See Me in a Crown", and "Bury a Friend", the album showcased her distinctive mix of dark, moody electropop, whispery vocals, and introspective lyrics. It topped charts worldwide and earned her five Grammy Awards in 2020, including Album of the Year, Song of the Year, and Best New Artist, making her the youngest artist to win the "Big Four" categories in the same year.
        
        Known for her ethereal vocals, minimalist production, and often melancholic themes, Eilish's music explores topics like mental health, heartbreak, self-doubt, and fame. Her personal style—oversized, baggy clothing, neon hair (most notably green roots with black tips), and bold accessories—became a signature part of her brand, rejecting the hyper-sexualized image often associated with young female pop stars.</p> 
         <p class="desc">In 2021, she released her second album, Happier Than Ever, which showcased a more mature and vulnerable side. Songs like the title track "Happier Than Ever", "Your Power", and "Getting Older" addressed themes of emotional abuse, self-reflection, and the pressures of fame. The album was met with critical acclaim and commercial success, further cementing her status as one of the most influential artists of her generation.

            Beyond her music, Billie Eilish is also known for her activism and outspokenness on social issues. She is a vocal advocate for climate change awareness, body positivity, and mental health. She has also been an ambassador for brands such as Gucci and Nike, blending her musical influence with the fashion world.
            
            Eilish's artistic evolution continued with her work on the James Bond theme song, "No Time to Die" (2020), which won her an Academy Award for Best Original Song, making her one of the youngest recipients of the honor.
            
            Throughout her career, Billie Eilish has continually defied industry norms, embracing her individuality and vulnerability. Her haunting vocals, genre-blending sound, and emotionally raw lyrics have not only captivated fans but have also reshaped modern pop music, making her one of the most influential and innovative artists of her generation.</p>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

    <div class="List"  id="Albums">
        <h1>ALBUM LIST</h1><br>
        <div class="album-list">

            <div class="album">
                <a href="https://open.spotify.com/album/7aJuG4TFXa2hmE4z1yxc3n?si=iOznmrX_SE2JsJqwziar1g" target="_blank">
                    <img src="img/hitme.jpg" alt="HIT ME HARD AND SOFT - Billie Eilish">
                    <p>HIT ME HARD AND SOFT - Billie Eilish</p>
                </a>
            </div>
    
            <div class="album">
                <a href="https://open.spotify.com/album/0JGOiO34nwfUdDrD612dOp?si=L30oqyF5TnSyfhwMDTSogQ" target="_blank">
                    <img src="./img/Happier.jpg" alt="HAPPIER THAN EVER - Billie Eilish">
                    <p>HAPPIER THAN EVER - Billie Eilish</p>
                </a>
            </div>
    
            <div class="album">
                <a href="https://open.spotify.com/album/0S0KGZnfBGSIssfF54WSJh?si=6T2jfCWSTKC0n4a9Nk9pjg" target="_blank">
                    <img src="./img/whenwefallsleep.jpg" alt="WHEN WE ALL FALL ASLEEP, WHERE DO WE GO - Billie Eilish">
                    <p>WHEN WE ALL FALL ASLEEP, WHERE DO WE GO - Billie Eilish</p>
                </a>
            </div>
    
        </div>
    </div>

    <div class="contact" id="About-Us">
        <h2>Contact Us</h2>
        <div class="jeem-ctnr">
        <img src="./img/Jeem.jpg" alt="jeem">
        <p>Name: Jhon Melchor Araña</p>
        <p>Age: 21 years old</p>
        <p>Email: jhonmelchoraran@803gmail.com</p><br><br><br><br>
    </div>
    <div class="social-ins">
        <a href="https://www.instagram.com/je_emm0?igsh=cHdja2UyNGNkYzZ5" target="_blank">
            <img src="./img/instagram.jpg" alt="Instagram">
        </a>
        <a href="https://www.facebook.com/share/15xGNAevR7/" target="_blank">
            <img src="img/Facebook.jpg" alt="Facebook">
        </a>
        <a href="t.me/JeemAA" target="_blank">
            <img src="img/Telegram.jpg" alt="Telegram">
        </a>
</div>
    <div class="wrain-ctnr">
        <img src="./img/Wrain.jpg" alt="wrain">
        <p>Name: Wrain Macalindong</p>
        <p>Age: 20 years old</p>
        <p>Email: jhonmelchoraran@803gmail.com</p><br><br><br>
    </div>
        <div class="social-icons">
            <a href="https://www.instagram.com/rain003._?igsh=aW11MGFybjNvbzl1" target="_blank">
                <img src="./img/instagram.jpg" alt="Instagram">
            </a>
            <a href="https://www.facebook.com/share/15z4nyUgbU/" target="_blank">
                <img src="img/Facebook.jpg" alt="Facebook">
            </a>
            <a href="t.me/Wrain22" target="_blank">
                <img src="img/Telegram.jpg" alt="Telegram">
            </a>
        </div>
    </div>

        
    

    <footer>
        <div class="footer-content">
            <p>&copy; 2025 Pirate Life. All Rights Reserved.</p>
        </div>
    </footer>

       <script>
        function confirmLogout() {
            if (confirm("Are you sure you want to logout?")) {
                window.location.href = "login.php"; // Redirect to logout page or handle logout
            }
        }
    </script>


</body>
</html>