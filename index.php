<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Explore academic excellence and innovative programs at Cantor College. Discover our Global Leadership MBA, Bachelor of Innovation in Technology, and Communication and Media Arts programs. Learn about our creative philosophy and how we celebrate uniqueness. Join us to expand your horizons and fuel your imagination.">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="css/mobile.css">
    <title>Cantor College</title>
    <script src="components/index.js" defer charset="utf-8"></script>
    <script src="js/carousel.js" defer charset="utf-8"></script>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <section id="welcome" class="hero">
        <div class="container color-changing-element">
            <h2 class="welcomeMessage color-changing-element">Welcome to Cantor College</h2>
            <p>Explore our diverse academic excellence and modern facilities</p>
        </div>
    </section>
    <div id="carousel" data-carousel="1" data-speed="3000">
        <span class="carousel-control-left"></span>
        <span class="carousel-control-right"></span>
        <div class="carousel-content">
            <img width="100%" height="100%" srcset="assets/laptop.webp"
                src="assets/laptop.webp"
                alt="image 1" loading="lazy"/>
                <img width="100%" height="100%" srcset="assets/welcome.webp" 
                    src="assets/welcome.webp" 
                    alt="image 5" loading="lazy"/>
            <img width="100%" height="100%" srcset="assets/cantor_building.webp" 
                src="assets/cantor_building.webp" 
                alt="image 5" loading="lazy"/>
        </div>
    </div>
    <section id="featured-programs" class="hero animated-element color-changing-element">
        <div class="container">
            <h2>Featured Programs</h2>
            <p>Discover the pinnacle of academic excellence and state-of-the art facilities at Cantor College</p>
        </div>
        <div class="tabs">
        <button class="tab-btn" data-tab="global-leadership">Global Leadership MBA</button>
        <button class="tab-btn" data-tab="innovation-technology">Bachelor of Innovation in Technology</button>
        <button class="tab-btn" data-tab="communication-media-arts">Communication and Media Arts</button>
        </div>
    </section>
        <div id="global-leadership" class="tab-content">
        </div>
    
    <section id="content-section">
        <div class="container">
            <div class="flex-box">
                <div class="description">
                    <h3>Global Leadership MBA</h3>
                    <span>Elevate your leadership prowess with our Global Leadership MBA. Immerse yourself in a diverse
                        learning environment and shape your global perspective for impactful business leadership.</span>
                    <a href="#" class="view-details-button">Explore Leadership</a>
                    </div>
                <picture>
                    <source srcset="assets/bsit1.webp" type="image/webp">
                    <img width="100%" height="100%" src="assets/bsit1.webp" alt="Global Leadership MBA Program Image">
                </picture> 

            </div>
        </div>
        <section id="innovation-technology" class="tab-content">
    <div class="container">
        <div class="flex-box">
            <picture>
                <source srcset="assets/bsit.webp" type="image/webp">
                <img width="100%" height="100%" src="assets/bsit.webp" alt="Bachelor of Innovation in Technology Program Image">
            </picture>
            <div class="description">
                <h3>Bachelor of Innovation in Technology</h3>
                <span>Embark on a creative journey in the ever-evolving world of technology. Our program empowers you with
                    skills in innovation, software development, and emerging technologies.</span>
                <a href="#" class="view-details-button">Discover More</a>
            </div>
        </div>
    </div>
</section>

<section id="communication-media-arts" class="tab-content">
    <div class="container">
        <div class="flex-box">
            <div class="description">
                <h3>Communication and Media Arts</h3>
                <span>Sharpen your communication skills and explore the dynamic realms of media and public relations. Our
                    program opens doors to a spectrum of creative career opportunities.</span>
                <a href="#" class="view-details-button">Communicate Effectively</a>
            </div>
            <picture>
                <source srcset="assets/bsit.webp" type="image/webp">
                <img width="100%" height="100%" src="assets/media1.webp" alt="Communication and Media Arts Program Image">
            </picture>
        </div>
    </div>
</section>
    
<section id="content-section">
    <div class="container">
    <section id="philosophy" class="hero animated-element">
        <div class="container color-changing-element">
            <h2>Our Philosophy</h2>
        </div>
    </section>
    <section class="content-sections">
        
            <h2>Our Philosophy</h2>
            <p>We’re a creative university. We get excited about change, difference, and the possibilities they open
                up. From the arts to business to technology, we’re all about shaping the future of creativity, and
                teaching you how to find opportunities that speak to you - at university and beyond.</p>
            <br>
            <h2>We’ll celebrate what makes you unique.</h2>
            <p>Studying here means working with us to create your own experience. We’ll help you design a path
                that’s
                tailored to your interests and ambitions - during your studies, and as you plan your career.</p>
            <br>
            <h2>We’ll expand your horizons.</h2>
            <p>The creative industries are global and highly connected, and so are we. We’re proud of our diverse
                culture and international links - they’re the reason our graduates can go anywhere and still feel
                they
                belong.</p>
            <br>
            <h2>We’ll fire your imagination.</h2>
            <p>Creativity is a mindset that goes beyond subjects and specialisms. So we’ll encourage you to be
                curious
                and explore a range of fields, mediums, cultures, and traditions. You’ll leave us with a diverse
                skillset
                and inventive approach.</p>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

</body>

</html>