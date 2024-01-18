<?php get_header();?>


<!DOCTYPE html>
<html lang="sl">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/main.css">
</head>

    <div class="cookie-container hide" style="height:auto ;">
      <p class="cookie-text" style="vertical-align: -moz-middle-with-baseline; margin-top: 7px;">
      Spletno mesto uporablja piškotke zaradi boljše uporabniške izkušnje. Z uporabo naše spletne strani potrjujete, da se z njihovo uporabo strinjate.
      </p>
        <div class="agree">
          <button onclick="set_cookie();" type="button" class="btn btn-outline-primary">Soglašam</button></div>
          <div class="cookieImg"></div>
  </div>
<body>
  

<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger" style="width: 60px; height:60px; background-color: rgba(0, 0, 0, 0.5); border-radius:50%;">
      <div>
    </div>
  </div>
  
    <div class="menu">
      <div>
        <div>
          <div><a href="#domov"><svg class="menu-icon home"></svg></a></div>
          <div><a href="#napovednik"><svg class="menu-icon novice"></svg></a></div>
          <div><a href="#omeni"><svg class="menu-icon omeni-img"></svg></a></div>
          <div><a href="#galerija"><svg class="menu-icon galerija-img"></svg></a></div>
          <div><a href="#kontakt"><svg class="menu-icon kontakt-img"></svg></a></div>
           
          <div>
          <a href="#"><svg class="menu-icon-small internationalEN"></svg></a>
          <a href="#"><svg class="menu-icon-small internationalHR"></svg></a>
          <a href="#"><svg class="menu-icon-small fb"></svg></a>
          <a href="#"><svg class="menu-icon-small ig"></svg></a>
        </div>    
    </div>
  </div>
</div>
</div>

<div class="front naslov" id="domov">Matic Zakonjšek</div>


    <div class="napovednik-bg" id="napovednik">
        <div class="napovednik-wht">
      
                <div class="naslov-galerija">Napovednik</div>
                    <br><br><br><br><br>
                        <div class="container">
                        <?php get_template_part('includes/section','content');?>
                            <br>

            </div>
        </div>
    </div>

    <div class="slika1" id="omeni">
      <div class="slika1over">
        <div class="naslov-omeni">O meni</div>
          <div class="omeni-main-text">
      
      
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum laborum in veritatis corporis, dicta nulla adipisci sed inventore dolores iste similique sunt rem hic soluta assumenda mollitia quis. Exercitationem, nisi!
      
            <br><br>

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, repudiandae labore tenetur fuga illum suscipit sed dolorum soluta, praesentium repellat atque asperiores iusto.
            
            <br>

      
            <a href="https://epicdev.si/matic/o-meni/" style="text-decoration: none;">
              <div class="vec" style="  border-color: #000; border-width: 2px;">
                <div class="vecTEXT">več</div>
                <div class="vecARROW vecICON"></div>
              </div>
            </a>
    
          </div>
    
      </div>
    </div>

  <div id="galerija">
    <!--desktop-->
      <div class="levo">
        <div class="overlay">
          <a href="https://epicdev.si/matic/galerija/">
            <div class="vecFOTO vecICON gel center-gel"></div>
          </a>
        </div>
		  </div>
   
      <div class="desno">
        <div class="overlay">
          <a href="https://epicdev.si/matic/posnetki/">
            <div class="vecVIDEO vecICON gel center-gel2"></div></a>
        </div>
      </div>

<!--mobile&tablet-->
      <div class="mobileMedia">
        <div class="overlay">
          <a href="https://epicdev.si/matic/galerija/">
            <div class="vecFOTO vecICON"></div>
          </a>

          <a href="https://epicdev.si/matic/posnetki/">
            <div class="vecVIDEOmobile vecICONmobile"></div>
          </a>
        </div>
		  </div>
      </div>

  </div>

  
<div class="kontakt-bg" id="kontakt">
<section>
    

      <div class="contact form_p">
          <form class="form" action="mail.php" method="post">
            <label for="name"></label>
            <input name="name" id="name" type="text" placeholder=" ime*" required>
            
            <label for="email"></label>
            <input name="email" id="email" type="email" placeholder=" e-naslov*" required>
            <br><div class="oblika">
            <textarea name="message" id="message" cols="20" rows="5" placeholder=" sporočilo*" required></textarea>
            <br></div>
            <div class="g-recaptcha" style="margin: auto;" data-sitekey="6LfaPqEiAAAAAJQPh_EMDJXtsj9niKSpxnFYwa4l"></div>
       
            <button class="submit" type="submit" name="submit" style="color:black; background-color: rgba(240, 240, 240, 0.8); border-style: solid; border-color: black; border-width: 1px;">pošlji</button><br>
            <p class="form_p form-bg" align="justify">Polja označena z zvezdico (*) so obvezna. Vneseni podatki bodo uporabljeni izključno za komunikacijo z vami, in ne bodo posredovani tretjim osebam.</p>
        
          </form>


</div>
</div>

<div class="footer">&copy; Matic Zakonjšek | Izdelava: <a href="https://www.epicdev.si/" target="_blank">EpicDev</a></div>

</body>
</html>

<style>@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Waterfall&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Waterfall&display=swap');</style>


<script src="/js/script.js"></script>

<?php get_footer();?>