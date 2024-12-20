<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fashion Eccomerce</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div style="text-align:center; padding: 10px;;">
    <p style="font-size:20px; font-weight:bold;">
      Hello <?php
            if (isset($_SESSION['email'])) {
              $email = $_SESSION['email'];
              $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
              while ($row = mysqli_fetch_array($query)) {
                echo $row['firstName'] . ' ' . $row['lastName'];
              }
            }
            ?>
      :)
    </p>
    <a href="logout.php">Logout</a>
  </div>
  <section id="home">
    <nav id="desktop-nav">
      <div class="logo">FASCO</div>
      <div>
        <ul class="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#deals">Deals</a></li>
          <li><a href="#new-arrivals">New Arrivals</a></li>
          <li><a href="#packages">Packages</a></li>
          <li><a href="login.php">Sign in</a></li>
        </ul>
      </div>
    </nav>
    <!-- hamburger navigation -->
    <nav id="hamburger-nav">
      <div class="logo">FASCO</div>
      <div class="hamburger-menu">
        <div class="hamburger-icon" onclick="toggleMenu()">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="menu-links">
          <li><a href="#home" onclick="toggleMenu()">Home</a></li>
          <li><a href="#deals" onclick="toggleMenu()">Deals</a></li>
          <li><a href="#new-arrivals" onclick="toggleMenu()">New Arrivals</a></li>
          <li><a href="#packages" onclick="toggleMenu()">Packages</a></li>
          <li><a href="#sign_in" onclick="toggleMenu()">Sign In</a></li>
        </div>
      </div>
    </nav>
    <!-- BACKGROUND IMAGE -->
    <div class="container">
      <img src="./assets/header-background.png" alt="Background Image" id="background-image" />
    </div>
    <div class="brand-name">
      <span>CHANEL</span>
      <span>LOUIS VUITTON</span>
      <span>PRADA</span>
      <span>CHANEL</span>
      <span>CHANEL</span>
    </div>
  </section>
  <!-- DEALS CAROUSEL SLIDER -->
  <section class="deals" id="deals">
    <div class="text-section">
      <h2>Deals Of The Month</h2>
      <p>Discover the elegance and beauty of the world's most luxurious fashion brands. Chanel, Louis Vuitton, Prada, and more.</p>
      <button class="buy-now-button">Buy Now</button>
      <h3>Hurry, Before It’s Too Late!</h3>
      <!-- COUNT DOWN -->
      <div class="launch-time">
        <div>
          <p id="days">00</p>
          <span>Days</span>
        </div>
        <div>
          <p id="hours">00</p>
          <span>Hours</span>
        </div>
        <div>
          <p id="minutes">00</p>
          <span>Minutes</span>
        </div>
        <div>
          <p id="seconds">00</p>
          <span>Seconds</span>
        </div>
        <script src="count_down.js"></script>
      </div>
    </div>

    <div class="container-slider">
      <div class="slider-wrapper">
        <div class="slider">
          <img id="slide-1" src="./assets/model-1.jpg" alt="model girl 1" />
          <img id="slider-2" src="./assets/model-2.jpg" alt="model 2" />
          <img id="slider-3" src="./assets/model-3.jpg" alt="model 3" />
          <img id="slider-4" src="./assets/model-4.jpg" alt="model 4" />
          <img id="slider-5" src="./assets/model-5.jpg" alt="model 5" />
        </div>
        <div class="slider-nav">
          <a href="#slider-1"></a>
          <a href="#slider-2"></a>
          <a href="#slider-3"></a>
          <a href="#slider-4"></a>
          <a href="#slider-5"></a>
        </div>
      </div>
    </div>
  </section>
  <!-- NEW ARRIVALS -->
  <section id="new-arrivals">
    <div class="text-new-arrivals">
      <h2>New Arrivals</h2>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt possimus fugiat enim voluptatibus accusamus nam nostrum eligendi voluptate quisquam ab cumque a, earum assumenda, obcaecati, delectus animi soluta! Veniam,
        aspernatur?
      </p>
    </div>
    <div class="btn-container">
      <!-- FILTER BUTTON -->
      <div class="filter-button">
        <button class="active" data-name="all">Show All</button>
        <button data-name="men-fashion">Men's Fashion</button>
        <button data-name="woman-fashion">Woman's Fashion</button>
        <button data-name="woman-accessories">Woman Accessories</button>
        <button data-name="men-accessories">Men Accessories</button>
        <button data-name="discount">Discount Deals</button>
      </div>

      <!-- IMAGE CARD -->
      <div class="filterable-cards">
        <div class="card" data-name="woman-fashion">
          <img src="./assets/shiny-dress.png" alt="phones" />
          <div class="card-body">
            <h6 class="card-title">Shiny Dress</h6>
            <p class="card-text">Al Karam</p>
            <p class="card-text">4k customer reviews</p>
            <h6 class="card-price">$95.50</h6>
            <p class="text-stock">Almost sold out</p>
          </div>
        </div>
        <div class="card" data-name="woman-fashion">
          <img src="./assets/white-dress.png" alt="phones" />
          <div class="card-body">
            <h6 class="card-title">White Dress</h6>
            <p class="card-text">Al Karam</p>
            <p class="card-text">4k customer reviews</p>
            <h6 class="card-price">$95.50</h6>
            <p class="text-stock">Almost sold out</p>
          </div>
        </div>
        <div class="card" data-name="woman-fashion">
          <img src="./assets/colorful-dress.png" alt="clothes" />
          <div class="card-body">
            <h6 class="card-title">Colorful Dress</h6>
            <p class="card-text">Al Karam</p>
            <p class="card-text">4k customer reviews</p>
            <h6 class="card-price">$95.50</h6>
            <p class="text-stock">Almost sold out</p>
          </div>
        </div>
        <div class="card" data-name="woman-fashion">
          <img src="./assets/full-sweater.png" alt="clothes" />
          <div class="card-body">
            <h6 class="card-title">Full Sweater</h6>
            <p class="card-text">Al Karam</p>
            <p class="card-text">4k customer reviews</p>
            <h6 class="card-price">$95.50</h6>
            <p class="text-stock">Almost sold out</p>
          </div>
        </div>
        <div class="card" data-name="woman-fashion">
          <img src="./assets/long-dress.png" alt="clothes" />
          <div class="card-body">
            <h6 class="card-title">Long Dress</h6>
            <p class="card-text">Al Karam</p>
            <p class="card-text">4k customer reviews</p>
            <h6 class="card-price">$95.50</h6>
            <p class="text-stock">Almost sold out</p>
          </div>
        </div>
        <div class="card" data-name="woman-fashion">
          <img src="./assets/full-sweater.png" alt="shoes" />
          <div class="card-body">
            <h6 class="card-title">Full Sweater</h6>
            <p class="card-text">Al Karam</p>
            <p class="card-text">4k customer reviews</p>
            <h6 class="card-price">$95.50</h6>
            <p class="text-stock">Almost sold out</p>
          </div>
        </div>
        <div class="card" data-name="woman-fashion">
          <img src="./assets/white-shirt.png" alt="shoes" />
          <div class="card-body">
            <h6 class="card-title">White Shirt</h6>
            <p class="card-text">Al Karam</p>
            <p class="card-text">4k customer reviews</p>
            <h6 class="card-price">$95.50</h6>
            <p class="text-stock">Almost sold out</p>
          </div>
        </div>
      </div>
    </div>
    <div class="btn-view-more">
      <button class="view-more-button">View More</button>
    </div>
  </section>
  <section class="packages" id="packages">
    <img src="./assets/image-pack.png" alt="image-pack1" />
    <div class="text-content">
      <p class="text-pack">Woman's Collection</p>
      <h1>Peaky Blinders</h1>
      <h6>Description</h6>
      <p class="text-pack">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum ea nobis, ex voluptas nesciunt eius accusamus tempora, labore illo iste nulla necessitatibus ipsam, iure possimus vitae unde in ipsa commodi.</p>
      <div class="size">
        <p>Size :</p>
        <p class="size-label">M</p>
      </div>
      <h3>$95</h3>
      <button class="buy-now-button">Buy Now</button>
    </div>
  </section>
  <div class="info-item">
    <div class="quality">
      <h4>High Quality</h4>
      <p>crafted from top materials</p>
    </div>
    <div class="warranty">
      <h4>Warranty Protection</h4>
      <p>crafted from top materials</p>
    </div>
    <div class="shipping">
      <h4>Free Shipping</h4>
      <p>crafted from top materials</p>
    </div>
    <div class="support">
      <h4>24 / 7 Support</h4>
      <p>crafted from top materials</p>
    </div>
  </div>

  <!-- FOLLOW ON INSTAGRAM -->
  <section class="instagram" id="instagram">
    <div class="text-follow-instagram">
      <h2>Follow Us On Instagram</h2>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt possimus fugiat enim voluptatibus accusamus nam nostrum eligendi voluptate quisquam ab cumque a, earum assumenda, obcaecati, delectus animi soluta! Veniam,
        aspernatur?
      </p>
    </div>
    <section class="body-carousel">
      <div class="gallery">
        <div class="gallery-container">
          <img src="./assets/colorful-dress.png" class="gallery-item gallery-item-1" data-index="1" />
          <img src="./assets/full-sweater.png" class="gallery-item gallery-item-2" data-index="2" />
          <img src="./assets/long-dress.png" class="gallery-item gallery-item-3" data-index="3" />
          <img src="./assets/shiny-dress.png" class="gallery-item gallery-item-4" data-index="4" />
          <img src="./assets/white-dress.png" class="gallery-item gallery-item-5" data-index="5" />
          <img src="./assets/white-shirt.png" class="gallery-item gallery-item-6" data-index="6" />
        </div>
        <div class="gallery-controls"></div>
      </div>
    </section>
  </section>
  <!-- TESTIMONI -->
  <section class="testimoni" id="testimoni">
    <div class="text-testimonial">
      <h2>This Is What Our Customers Say</h2>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt possimus fugiat enim voluptatibus accusamus nam nostrum eligendi voluptate quisquam ab cumque a, earum assumenda, obcaecati, delectus animi soluta! Veniam,
        aspernatur?
      </p>
    </div>
    <div class="testimony-wrapper">
      <div class="testimonial-container" id="testimonial-container"></div>
      <button id="prev">&lt;</button>
      <button id="next">&gt;</button>
    </div>
  </section>
  <!-- SUBSCRIBE SECTION -->
  <section class="subscribe">
    <div class="content-subscribe">
      <img src="./assets/model-transparent1.png" alt="image-pack1" />
      <div class="text-subscribe">
        <h2>Subscribe To Our Newsletter</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt possimus fugiat enim voluptatibus accusamus nam nostrum eligendi voluptate quisquam ab cumque a, earum assumenda, obcaecati, delectus animi soluta! Veniam,
          aspernatur?
        </p>
        <input type="text" class="subscribe-input" placeholder="Enter your email" />
        <div class="button-subscribe">
          <button class="subscribe-btn">Subscribe Now</button>
        </div>
      </div>

      <img src="./assets/model-transparent2.png" alt="image-pack1" />
    </div>
  </section>
  <!-- FOOTER -->
  <footer>
    <nav>
      <div class="logo-bottom">FASCO</div>
      <div class="nav-links-container">
        <ul class="nav-links-bottom">
          <!-- <li><a href="#home">Support Center</a></li>
            <li><a href="#deals">Invoicing</a></li>
            <li><a href="#new_arrivals">Contract</a></li>
            <li><a href="#packages">Careears</a></li>
            <li><a href="#sign_in">Blog</a></li>
            <li><a href="#sign_in">FAQ</a></li> -->
          <li><a>Support Center</a></li>
          <li><a>Invoicing</a></li>
          <li><a>Contract</a></li>
          <li><a>Careears</a></li>
          <li><a>Blog</a></li>
          <li><a>FAQ</a></li>
        </ul>
      </div>
    </nav>
    <p class="copyright">Copyright &#169; 2024 Fasco. All Rights Reserved.</p>
  </footer>
  <script src="script.js"></script>
  <script src="testimonials.js"></script>
  <script src="toggle_menu.js"></script>
</body>

</html>