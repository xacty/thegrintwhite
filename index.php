<!DOCTYPE html>
<html>
<head>
  <title>TheGrint</title>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="assets/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="font/stylesheet.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/carousel.css">  
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div class="head_container container">
      <div class="logo">
        <a class="fixed-logo" href="#"><img src="assets/white_logo.png"></a>
        <a class="head_logo" href="#"><img src="assets/logo.webp"></a>
      </div>
      <div class="menu" id="myTopnav">
        <ul>
          <li><a href="https://sandbox.thegrint.com/passthru">Log in</a></li>
          <li><a class="join-btn" href="https://sandbox.thegrint.com/passthru/register">JOIN<span class="m-hidden"> FOR FREE</span></a></li>
        </ul>
      </div>
    </div>
  </header>

  <section class="main-banner">
    <div class="banner-content container">
      <div class="wrapper">
        <div class="left">
          <h1><b>The Best Golf App</b></h1>
          <h2>Golf Score Tracker, USGA Handicap, Golf GPS, Advanced Stats and more</h2>
          <div class="buttons">
           <?php include "sections/buttons.html" ?>
         </div>
         <p class="reviews">4.8 ⭐⭐⭐⭐⭐ (12K+ reviews)</p>
       </div>
       <div class="right">
        <img src="assets/devices2.webp" alt="">
      </div>
    </div>
  </div>
</section>


<section class="first-section">
  <div class="container">
    <h1><b>TheGrint</b> is the best <br><b class="green">golf scoretracker!</b></h1>
    <div class="first-wrapper">
      <div class="left"><img src="assets/scoretracker1.webp" alt=""></div>
      <div class="right">
        <img class="m-hidden" src="assets/scoretracker2.webp" alt="">
        <div class="first-content">
         <h2><b>Track as you play</b><br>with our score tracker tool</h2>
         <p>The advanced score tracker allows you to add metrics for each hole, giving you an easy solution to add scores and feed info into your personalized statistics feature</p>
       </div>
     </div>
   </div>
   <div class="awards">
    <div class="a-wrapper">
      <div class="a-img-box"><img src="assets/cnn.png" alt=""></div>
      <p>“App changes golf for amateurs”</p>
    </div>
    <div class="a-wrapper">
      <div class="a-img-box"><img src="assets/golf_digest.png" alt=""></div>
      <p>“Score, stats and GPS”</p>
    </div>
    <div class="a-wrapper">
      <div class="a-img-box"><img src="assets/golf_magazine.png" alt=""></div>
      <p>“Top App for Handicaps and scoring”</p>
    </div>
  </div>
</div>
</section>

<section style="display: none;" class="second-section provisional blue-bg">
  <div class="blue-overlay"></div>
  <div class="container">
    <div class="second-wrapper white">
      <div class="left">
        <img src="assets/devices2.webp" alt="">
      </div>
      <div class="right">
        <h1><b class="green">TheGrint</b> built-in GPS allows you to <b> play golf around the world</b></h1>
        <p>We offer more than 40k mapped golf courses around the world that you can play and navigate through our advanced golf GPS feature.</p>
        <p class="reviews">4.8 ⭐⭐⭐⭐⭐ (12K+ reviews)</p>
        <div class="buttons">
         <?php include "sections/buttons.html" ?>
       </div>
     </div>
   </div>
 </div>
</section>

<section style="display: none;" class="third-section">
  <div class="container">
    <h1>Some of <b><span class="green">TheGrint</span> Features</b></h1>
    <!-- The circles/dots -->
    <div class="video-buttons" style="text-align:center">
      <span class="dots" onclick="currentSlide(1)"><i class="fa-solid fa-circle-play"></i> Handicaps & Scorecard</span>
      <span class="dots" onclick="currentSlide(2)"><i class="fa-solid fa-circle-play"></i> GPS Rangefinder</span>
      <span class="dots" onclick="currentSlide(3)"><i class="fa-solid fa-circle-play"></i> Golf Handicap Calculator</span>
      <span class="dots" onclick="currentSlide(4)"><i class="fa-solid fa-circle-play"></i> Foursomes & Live Scoring</span>
    </div>
    <!-- Slideshow container -->
    <div class="slideshow-container fade">

      <!-- Full images with numbers and message Info -->
      <div class="Containers">
        <div class="video">
          <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/vgnzfau7Mmw?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <div class="Containers">
        <div class="video" >
          <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/bUMQTnwfrYA?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <div class="Containers">
        <div class="video">
          <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/_tEn0E-QEDM?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <div class="Containers">
        <div class="video">
          <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/vgnzfau7Mmw?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

    </div>
    <br>


    <div class="awards">
      <div class="a-wrapper">
        <div class="a-img-box"><img src="assets/cnn.png" alt=""></div>
        <p>“App changes golf for amateurs”</p>
      </div>
      <div class="a-wrapper">
        <div class="a-img-box"><img src="assets/golf_digest.png" alt=""></div>
        <p>“Score, stats and GPS”</p>
      </div>
      <div class="a-wrapper">
        <div class="a-img-box"><img src="assets/golf_magazine.png" alt=""></div>
        <p>“Top App for Handicaps and scoring”</p>
      </div>
    </div>
  </div>
</section>
<section style="display: none;" class="fourth-section blue-bg">
  <div class="blue-overlay"></div>
  <div class="container">
    <div class="fourth-wrapper white">
      <div class="left">
        <img src="assets/4-1.webp" alt="">
        <img src="assets/4-2.webp" alt="">
        <img src="assets/4-3.webp" alt="">
      </div>
      <div class="right">
        <h1 class="align-left">Golf GPS Rangefinder<br><b class="green">Smartwatch ready</b></h1>
        <ul class="icon-list-items">
          <li class="icon-list-item white">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Shot tracking and distance calculation on nearly every course worldwide</span>
          </li>
          <li class="icon-list-item white">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Know the Distance for your tee shots and approach shots</span>
          </li>
          <li class="icon-list-item white">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Tee off with confidence, knowing distance to hazards and bunkers</span>
          </li>
          <li class="icon-list-item white">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Connect your smartwatch with TheGrint to know your distances</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="fourth-section">
  <div class="container">
    <div class="fourth-wrapper">
      <div class="left">
        <img src="assets/4-1.webp" alt="">
        <img src="assets/4-2.webp" alt="">
        <img src="assets/4-3.webp" alt="">
      </div>
      <div class="right">
        <h1 class="align-left"><b class="green">Golf GPS</b><br>and Rangefinder</h1>
        <ul class="icon-list-items">
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Shot tracking and distance calculation on nearly every course worldwide</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Know the distance of the fairway and get on to the green</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Tee off with confidence, knowing the distance to the green</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Connect your smartwatch with TheGrint to know your distances</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="fifth-section">
  <div class="container">
    <div class="fifth-wrapper r-mobile">

      <div class="left">
        <h1 class="align-left">Try our <b class="green">Green Maps</b></h1>
        <ul class="icon-list-items">
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Topographic slope shown in % with precise green slopes.</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Use it to improve your approach shots and putt reading.</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Over 13k green maps available and adding more every month.</span>
          </li>
        </ul>
        <p>Our precise Green Maps allow you to determine the best location to aim for your approach shots, and help you be more confident with your putt reading. The Green Maps are only available to PRO+ members but you can give it a test run for free.</p>
      </div>

      <div class="right">
        <img class="m-hidden" src="assets/new/asset2.png" alt="">
        <div class="img-wrapper">
          <img src="assets/new/greenmaps.webp" alt="">
          <img src="assets/5-2.webp" alt="">
        </div>        
      </div>

    </div>
  </div>
</section>

<section class="sixth-section">
  <div class="container">
    <div class="second-wrapper sixth-wrapper">
      <div class="left">
        <div id="slider">
          <img class="iphone-border" src="assets/iphone_border.webp" alt="">
          <ul id="slideWrap"> 
            <li><img src="assets/image-3.webp" alt=""></li>
            <li><img src="assets/image-4.webp" alt=""></li>
            <li><img src="assets/image-5.webp" alt=""></li>
            <li><img src="assets/image-6.webp" alt=""></li>
          </ul>

          <a id="prev" >&#8810;</a>
          <a id="next" >&#8811;</a>
        </div>


      </div>
      <div class="right">
        <h1><b>Advanced Golf</b> <b class="green">Stats Feature</b></h1>
        <ul class="icon-list-items">
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Know your Strengths and Weaknessess with our benchmark dynamic targets by handicap</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Understand your game through our in-depth Performance Stats.</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Track records and milestones in your own Trophy Room.</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Save all your rounds in one place.</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<section class="fifth-section seventh-section">
  <div class="container">
    <div class="fifth-wrapper seventh-wrapper r-mobile">

      <div class="left">
        <h1 class="align-left"><b>Live Scores &</b><br> <b class="green">Leaderboard Feature</b></h1>
        <ul class="icon-list-items">
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Get instant Notification of what your friends are doing live on the golf course</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Compete with other foursomes in real-time</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Keep score within your group on multiple phones</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Live Ryder Cup Format competitions</span>
          </li>
        </ul>
      </div>

      <div class="right">
        <img class="m-hidden" src="assets/new/asset3.png" alt="">
        <div class="img-wrapper">
          <img src="assets/leaderboards.webp" alt="">
          <img src="assets/new/section-gaming.webp" alt="">
        </div>        
      </div>

    </div>
  </div>
</section>

<section class="second-section eighth-section">
  <div class="container">
    <div class="second-wrapper eighth-wrapper">
      <div class="left">
        <img src="assets/golf_module.webp" alt="">
      </div>
      <div class="right">
        <h1>Connect with your golf friends <b class="green">or meet new ones</b></h1>
        <ul class="icon-list-items">
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Track scores with friends, see their photos and more</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Our Foursomes tool lets you organize your next tee time with your foursome</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">See how you rank among your friends and the rest of TheGrint community</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">We organize over 200 TheGrint Tour events per year. Go compete and meet new Grinters</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="ninth-section">
  <div class="container ninth-container">
    <h1>Try our TheGrint <b style="color:#b5d44f;">Web App</b></h1>
    <p>Want to analyze your golf game back at home or at the office? Our Web App offers all the in-depth stats in a larger screen.</p>
    <div><img src="assets/thegrint_desktop2.1.webp" alt=""></div>
    <h1>Ready to have the  <br><b>best golf experience ever?</b></h1>
    <div class="buttons">
     <?php include "sections/buttons.html" ?>
   </div>
   <a class="register-btn" href="https://sandbox.thegrint.com/passthru/register">JOIN FOR FREE TODAY</a>
 </div>
</section>

<!-- Footer -->
<footer>
  <div class="container footer-container">
   <div class="top">
    <div class="footer-logo">
      <img src="assets/logo.webp" alt="">
    </div>
    <h2>The Best Golf App</h2>
    <p>Golf Score Tracker, USGA Handicap, Golf GPS, Advanced Stats and more</p>
    <div class="social-media">
      <a href="https://www.facebook.com/thegrintgolf"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/thegrintgolf/"><i aria-hidden="true" class="fab fa-instagram"></i></a>
      <a href="https://twitter.com/TheGrintGolf"><i aria-hidden="true" class="fab fa-twitter"></i></a>
    </div>
  </div>
  <div class="bot">
   <div class="bot-box">
     <h4>TheGrint</h4>
     <p>Since Ⓒ 2011 | All Rights Are Reserved</p>
   </div>
   <div class="bot-box">
     <h4>Need Help</h4>
     <a href="https://thegrint.com/about_us/member_support">Member Support | FAQ</a>
   </div>
   <div class="bot-box">
     <h4>Terms & Conditions</h4>
     <a href="https://thegrint.com/about_us/terms_and_conditions">Terms of use | Privacy Policy</a>
   </div>
 </div>
</div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/js.js"></script>

<script>

</script>

</body>
</html>
