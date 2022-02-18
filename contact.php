<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splashy Divine | Contact</title>
    <link rel="stylesheet" href="https://use.typekit.net/bai3nfu.css">
    <script src = "https://kit.fontawesome.com/b69768dc36.js" crossorigin="anonymous"></script> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="icon" type="image/png" href="favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <meta name="Description" content="Splashy Divine is a home-based breeder specializing in healthy and exceptionally smart Poodles and Doodles. Located in New Bern, NC, we hand-raise beautiful and colorful CKC Cockapoos, AussieDoodles, CKC Miniature Poodles and Moyen Poodles. Please inquire to acquire a very special puppy for your loving family."/>
    
    <meta name="Keywords" content="poodle, cockapoo puppies, aussie doodle, puppies, miniature poodle puppies, New Bern NC, merle puppy, phantom poodle, eastern NC, cockapoo,  splashy doodle puppies, cocker spaniel, moyen poodle, new bern puppies, enc cockapoos, phantom doodle, mini poodle, multi-color poodle, cocker spaniel puppy, puppy doodles, Greenville NC, eastern nc, splashy pups, smart puppies, parti puppies, DNA tested puppies, merle puppy, merle phantom dogs">
    
    <meta name="author" content="InTandem, Inc">
    <meta name="revised" content="11-30-2021">
   <!-- UIkit CSS  -->
<link rel="stylesheet" href="css/uikit.css" /> 

<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script> 
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZGWSWSTD56"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZGWSWSTD56');
</script>
<style>
.error{background-color: #FF6600;border:#AA4502 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:10px 10px 0 0;}
.success{background-color: #12CC1A;border:#0FA015 1px solid;padding: 5px 10px;color: #FFFFFF;border-radius:10px 10px 0 0;}
.info{font-size:.8em;color: #FF6600;letter-spacing:2px;padding-left:5px;}
.btnAction{background-color:#2FC332;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
    #mail-status {
    font-size: 19px;
    text-align: center;
    }
</style>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script>
function sendContact() {
  var valid;

  valid = validateContact();

  if(valid) {
    jQuery.ajax({
      url: "contact_mail.php",
      data: 'userName='+$("#contact-name").val()+'&userEmail='+$("#contact-email").val()+'&content='+$("#contact-message").val(),
      type: "POST",
      success:function(data) {
        $("#mail-status").html(data);
      },
      error: function () {
     
      }
    });
  }

}
function validateContact() {
  var valid = true;
  $(".inputBox").css('background-color', '');
  $('.info').html('');

  if(!$("#contact-name").val()) {
    $('userName-info').html("(required)");
    $("#contact-name").css('background-color', '#FFFFDF');
    valid = false;
  }

  if(!$("#contact-email").val()) {
    $("#userEmail-info").html("(required)");
    $("#contact-email").css('background-color', '#FFFFDF');
    valid=false;
  }

  if(!$("#contact-message").val()) {
		$("#content-info").html("(required)");
		$("#contact-message").css('background-color','#FFFFDF');
		valid = false;
	}

  return valid;

}
</script> 
</head>
<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.html"><div class="title slide-title">Splashy Divine</div></a>
        <a href="parents.html" class="slide-sub">PARENTS</a>
        <a href="available-pups.html" class="slide-sub">AVAILABLE PUPS</a>
        <a href="upcoming-litters.html" class="slide-sub">UPCOMING LITTERS</a>
        <a href="contact.php" class="slide-sub">CONTACT</a>
      </div>
    <header id="header">
     <a href="index.html"><div class="logo" id="logo"><img src="images/SD_logos_color_JaneC_E_forplacementonly-03.png" id="logo-img" alt=""/></div></a>
        
        <span id="nav-open" style="font-size:30px;cursor:pointer; padding-top: 3px;" onclick="openNav()"><i class="fas fa-bars"></i></span>
        <div class="width-container">
        <div class="phone-number"><a href="tel:+12522889727" class="phone-link">(252) 288-9727</a></div>
    </div>
        <div class="header-width-container" id="nav-container">
        <div class="nav-left">
            <a href="parents.html"><img src="images/header_paw_blue.png" class="header-paw" alt=""/> PARENTS</a>
            <a href="available-pups.html"><img src="images/header_paw_peach.png" class="header-paw" alt=""/>AVAILABLE PUPS</a>
        </div>
        <div class="nav-right">
            <a href="upcoming-litters.html"><img src="images/header_paw_goldentan.png" class="header-paw" alt=""/>UPCOMING LITTERS</a>
            <a href="contact.php"><img src="images/header_paw_pink.png" class="header-paw" alt=""/>CONTACT</a>
        </div>


    </div>
       
          
    </header>
    <div id="carousel-spacer"></div>

    <section class="contact">
      <div class="width-container">
        <h2 class="cs-container_heading">Contact Me!</h2>
        <div class="contact_flex_container">
          <div class="contact_flex_container-info">
            <img src="images/breeds-paw-left.png" id="contact-paw-left" alt=""/>
           <img src="images/breeds-right-paw.png" id="contact-paw-right" alt=""/>

           <div class="contact-info-container">
            <div class="contact-info-container-title">Splashy Divine</div>
            <div class="contact-info-container-city">New Bern, NC 28562</div>
            <div class="contact-info-container-phone"><a href="tel:+12522889727"><i class="fas fa-phone"></i> &nbsp;(252) 288-9727</a></div>
            <div class="contact-info-container-email"><a href="mailto:splashydivine@gmail.com"><i class="far fa-envelope"></i> &nbsp;SplashyDivine@gmail.com</a></div>
            <div class="contact-info-container-facebook"><a href="https://www.facebook.com/SplashyDivine" target="_blank"><i class="fab fa-facebook-square"></i> &nbsp;www.facebook.com/SplashyDivine</a></div>
           </div>
          </div>
          <div class="contact_flex_container-form">
            <div id="contact-form">
              <div id="mail-status"></div>
              <div class="contact-form-header">Send a message</div>      
            
              <input type="text" name="userName" placeholder="Name" id="contact-name" class="inputBox"/>
              
           
              <input type="text" name="userEmail" placeholder="Email" id="contact-email" class="inputBox"/>
              
           
              <textarea id="contact-message" name="content" placeholder="Message" class="inputBox"></textarea>


              <input type="checkbox" name="contact_me_by_fax_only" value="1" style="display:none !important" tabindex="-1">


              <button name="submit" id="submit-btn" onClick="sendContact();">Submit</button>
            </div>
          </div>
        </div>
        <div class="contact-images">
          <img src="images/cockapoo_IMG_5683.png" class="contact-images-1" alt=""/>
          <img src="images/contactimg-2.png" class="contact-images-2" alt="">
          <img src="images/contact-img-3.png" class="contact-images-3" alt="">
          <img src="images/contact-img-4.png" class="contact-images-4" alt="">
        </div>





      </div>
    </section>
    
   
  
      <footer>
        <div class="width-container">
            <div class="footer-flex">
              <div class="footer-address">
                <div>Splashy Divine<br>
                New Bern, NC 28562<br>
              (252) 288-9727</div>


              </div>
              <div class="footer-copyright">

                <div>
                  <img src="images/fish.png" id="footer-fish" alt="" />
                </div>


                <div>&copy; <span id="copy-year"></span> Splashy Divine<br>
                <span id="footer-intandem">Design by InTandem, Inc.</span></div>

              </div>
              <div class="footer-social">
                <a href="https://www.facebook.com/SplashyDivine" target="_blank" class="fb-link"><div class="fb-link-cont">Connect on Facebook <span> <img src="images/fb-icon.png" alt="" /></span></div></a>

              </div>



            </div>
    


        </div>

      </footer>



<script src="js/gsap.min.js"></script>
  <script src="js/ScrollTrigger.min.js"></script>


  <script>

    gsap.set(".slide-sub", {y: 100, opacity: 0});

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
  
  navOpenAnimation();

  
}


function closeNav() {
  navCloseAnimation();
  document.getElementById("mySidenav").style.width = "0";

  
 
  
} 


   

    let targets = gsap.utils.toArray('.why-icon');

    targets.forEach(box => {
  gsap.from(box, { 
    scale: 0,
    ease: "power1.out",
  
    scrollTrigger: {
      trigger: box
      
    }
  })
});

let leftImages = gsap.utils.toArray('.slide-image-left');

leftImages.forEach(image => {
  gsap.from(image, {
    x: 500,
    autoAlpha: 0,
    duration: 1.3,
    ease: "power2.out",
    scrollTrigger: {
      trigger: image
    }
  })
});

let year = new Date().getFullYear();
console.log(year);
let slideTitle = document.getElementsByClassName('slide-title')[0];
gsap.set(slideTitle, { scale: 0, opacity: 0, delay: .2});

document.getElementById('copy-year').innerHTML = year;

function navOpenAnimation() {
   

    gsap.to(slideTitle, { scale: 1, opacity: 1, delay: .2});

    gsap.to(".slide-sub", {
      y: 0,
      opacity: 1,
      duration: .4,
      ease: 'power3.out',
      stagger: 0.3

    });


}

function navCloseAnimation() {

  gsap.to(slideTitle, {scale: 0, opacity: 0, duration: .1});
  
  gsap.to(".slide-sub", { opacity: 0, duration: .1});
  gsap.set(".slide-sub", { y: 100 })
  
}

  </script>   
  
  <script>

    let cnImage1 = document.getElementsByClassName("contact-images-1")[0];
    let cnImage2 = document.getElementsByClassName("contact-images-2")[0];
    let cnImage3 = document.getElementsByClassName("contact-images-3")[0];
    let cnImage4 = document.getElementsByClassName("contact-images-4")[0];

    gsap.from(cnImage1,
        {
         
          scale: 0,
          x: -500,
          autoAlpha: 0,
          rotate: -50,
          scrollTrigger: {
            trigger: cnImage1
          }
        }  
    );
    gsap.from(cnImage2,
        {
          scale: 0,
          
          rotate: 50,
          autoAlpha: 0,
          delay: .3,
          scrollTrigger: {
            trigger: cnImage2
          }
        }  
    );
    gsap.from(cnImage3,
        {
          scale: 0,
          
          rotate: -60,
          autoAlpha: 0,
          delay: .5,
          scrollTrigger: {
            trigger: cnImage3
          }
        }  
    );
    gsap.from(cnImage4,
        {
          scale: 0,          
          rotate: 75,
          x: 500,
          autoAlpha: 0,
          delay: .7,
          scrollTrigger: {
            trigger: cnImage4
          }
        }  
    );

    gsap.from("#contact-form", {
      y: 500,
      autoAlpha: 0,
      ease: 'power3.out',
      duration: 2
    });




  </script>  
</body>
</html>