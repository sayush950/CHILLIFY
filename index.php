<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>CHILLIFY</title>
    <link rel="icon" href="images/favicon.ico" >
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/base.css" >
    <link rel="stylesheet" href="css/header.css" >
    <link rel="stylesheet" href="css/hero.css" >
    <link rel="stylesheet" href="css/albums.css" >
    <link rel="stylesheet" href="css/footer.css" >
    <link rel="stylesheet" href="css/media-queries.css"/>
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <div class="header-container">
        <div class="header-logo">
          <img src="images/logo.png" />
        </div>
        <!-- This is the menu that will be shown on mobile devices-->
        <nav class="nav-mobile">
          <!-- Profile -->
          <div class="profile">
            <svg viewBox="0 0 1024 1024" class="profile-icon">
              <path
                d="M730.06 679.64q-45.377 53.444-101.84 83.443t-120 29.999q-64.032 0-120.75-30.503t-102.6-84.451q-40.335 13.109-77.645 29.747t-53.948 26.722l-17.142 10.084Q106.388 763.84 84.96 802.41t-21.428 73.107 25.461 59.242 60.754 24.705h716.95q35.293 0 60.754-24.705t25.461-59.242-21.428-72.603-51.679-57.225q-6.554-4.033-18.907-10.84t-51.427-24.453-79.409-30.755zm-221.84 25.72q-34.285 0-67.561-14.873t-60.754-40.335-51.175-60.502-40.083-75.124-25.461-84.451-9.075-87.728q0-64.032 19.915-116.22t54.452-85.964 80.67-51.931 99.072-18.151 99.072 18.151 80.67 51.931 54.452 85.964 19.915 116.22q0 65.04-20.167 130.58t-53.948 116.72-81.426 83.443-98.568 32.268z"
              ></path>
            </svg>
          </div>
          <!-- Hamburger menu -->
          <input type="checkbox" class="toggler" />
          <div class="hamburger-menu"><div></div></div>
          <div class="menu">
            <div class="background-overlay"></div>
            <div class="menu-overlay">
              <ul>
                <li><a href="#">Premium</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Download</a></li>
                
              </ul>
              <div class="menu-overlay-logo">
                <img src="images/logo.png" />
              </div>
            </div>
          </div>
        </nav>
        <!-- This is the menu that will be shown on Desktop -->
        <nav class="nav-desktop">
          <!-- Site menu -->
          <ul>
            <li><a href="#">Premium</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Download</a></li>
            <li role="separator"></li>
          </ul>
          <!-- Profile menu -->
          <div class="profile-container">
            <input type="checkbox" class="dropdown-menu-toggler">
            
            <div class="profile">
              <svg viewBox="0 0 1024 1024" class="profile-icon">
                <path
                  d="M730.06 679.64q-45.377 53.444-101.84 83.443t-120 29.999q-64.032 0-120.75-30.503t-102.6-84.451q-40.335 13.109-77.645 29.747t-53.948 26.722l-17.142 10.084Q106.388 763.84 84.96 802.41t-21.428 73.107 25.461 59.242 60.754 24.705h716.95q35.293 0 60.754-24.705t25.461-59.242-21.428-72.603-51.679-57.225q-6.554-4.033-18.907-10.84t-51.427-24.453-79.409-30.755zm-221.84 25.72q-34.285 0-67.561-14.873t-60.754-40.335-51.175-60.502-40.083-75.124-25.461-84.451-9.075-87.728q0-64.032 19.915-116.22t54.452-85.964 80.67-51.931 99.072-18.151 99.072 18.151 80.67 51.931 54.452 85.964 19.915 116.22q0 65.04-20.167 130.58t-53.948 116.72-81.426 83.443-98.568 32.268z"
                ></path>
              </svg>
            </div>
            <ul>
              <li><a href="a.php">Register</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- HERO -->
    <section class="hero">
      <div class="hero-container">
        <div class="hero-content">
          <h1 class="hero-title">Get Premium, Be happy.</h1>
          <a class="hero-button" href="a.php">GET CHILLIFY PREMIUM</a>
          <br>
          <a class="hero-button" href="a.php">Learn More</a>
          
          <div class="terms">
            <span>*</span>
            <a href="#" class="hero-terms-link">Terms and conditions</a
            ><span>apply.</span>
          </div>
        </div>
      </div>
    </section>
    <!-- ALBUMS -->
    <section class="albums">
      <div class="albums-container">
        <div class="albums-content">
          <h2>Looking for music?</h2>
          <p>Start listening to the best new releases.</p>
         <button> <a href="a.php">Launch Web Player</a> </button>
        </div>
        <div class="albums-cards-container">
          <!-- Telepatia -->
          <div class="album">
            <img src="images/tele.jpg" />
            <div class="album-info">
              <h2>Telepatia</h2>
              <h4>Kali Uchis</h4>
              <a href="#">PLAY NOW</a>
            </div>
          </div>
          <!-- ZAYN -->
          <div class="album">
            <img src="images/zayn.jpg" />
            <div class="album-info">
              <h2>Better</h2>
              <h4>ZAYN</h4>
              <a href="#">PLAY NOW</a>
            </div>
          </div>
          <!-- No idea -->
          <div class="album">
            <img src="images/idea.jpg" />
            <div class="album-info">
              <h2>No Idea</h2>
              <h4>DJ Purpberry</h4>
              <a href="#">PLAY NOW</a>
            </div>
          </div>
          <!-- Positions -->
          <div class="album">
            <img src="images/positions.jpg" />
            <div class="album-info">
              <h2>Positions</h2>
              <h4>Ariana Grande</h4>
              <a href="#">PLAY NOW</a>
            </div>
          </div>
          <!-- Attention -->
          <div class="album">
            <img src="images/attention.jpg">
            <div class="album-info">
              <h2>Attention</h2>
              <h4>Charlie Puth</h4>
              <a href="#">PLAY NOW</a>
            </div>
          </div>
          <!-- Call out my name -->
          <div class="album">
            <img src="images/weeknd.jpg">
            <div class="album-info">
              <h2>Call out my name</h2>
              <h4>The Weeknd</h4>
              <a href="#">PLAY NOW</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FOOTER -->
    <footer>
      <nav class="footer-nav">
        <div class="logo-footer">
          <a href="#"><img src="images/logo1.png" /></a>
        </div>
        <div class="top-links">
          <div class="company-links">
            <ul>
              <li>COMPANY</li>
              <li><a href="#">About</a></li>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">For the Record</a></li>
            </ul>
          </div>
          <div class="communities-links">
            <ul>
              <li>COMMUNITIES</li>
              <li><a href="#">For artists</a></li>
              <li><a href="#">Developers</a></li>
              <li><a href="#">Advertising</a></li>
              <li><a href="#">Investors</a></li>
              <li><a href="#">Vendors</a></li>
            </ul>
          </div>
          <div class="useful-links">
            <ul>
              <li>USEFUL LINKS</li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Web Player</a></li>
              <li><a href="#">Free Mobile App</a></li>
            </ul>
          </div>
        </div>
        <div class="social-icons">
          <ul>
            <li>
              <a href="#"><img src="images/instagram-icon.svg" /></a>
            </li>
            <li>
              <a href="#"><img src="images/twitter-icon.svg" /></a>
            </li>
            <li>
              <a href="#"><img src="images/facebook-icon.svg" /></a>
            </li>
          </ul>
        </div>
        <div class="country">
          <a href="#"><span>Ind</span><img src="https://img.icons8.com/color/48/000000/india.png">></a>
          
        </div>
        <div class="bottom-links">
          <ul>
            <li><a href="#">Legal</a></li>
            <li><a href="#">Privacy Center</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">About Ads</a></li>
            <li><a href="#">Additional CA Privacy Disclosures</a></li>
          </ul>
          <span>&copy; <script>document.write(new Date().getFullYear())</script> CHILLIFY Ayush Singh</span>
        </div>
      </nav>
    </footer>
  </body>
  <script src="./js/script.js"></script>
</html>
