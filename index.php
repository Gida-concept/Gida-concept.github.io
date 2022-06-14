
<!Doctype html>
<html lang="en">

<!--Head start-->
<head>

<meta charset="UTF-8">	 
 <meta property="og:url" content="gidaconcept.herokuapp.com" />
<meta property="og:site_name" content="Gida Concept" />
<meta name="description" content="Gida Concept is a creative digital agency located in Bayelsa State…. 
We are a team of professional graphic designers, web developers, content writers,
 marketers and IT specialists combining the knowledge 
of our skills to create beautiful designs and strategies, aimed to meet your business’s needs.">

<meta property="og:image" content="images/gida.png" />
<meta name="author" content="gida concept">
<meta name="keywords" content="Gida Concept ">
<meta name="viewport" content="width=devicewidth,initial-scale=1.0">
<link rel="stylesheet" href="gida concept.css">
<link rel="shortcut icon" href="images/logo-1.jpg" type="images/x-icon"/>
<title>Gida Concept</title>
</head>


<!--head end-->

<body>

    <main>

<nav>
    <?php include 'header.php';?>
</nav>


<!--header page end-->


<!--Intro Page Start-->


<section class="intro-container">

<div class="intro-container-tab">

<a href=" https://www.instagram.com/gida_concept/"   alt="Instagram Page"><img src="images/insta icon.jpg" class="footer-img"></img></a>
<a href="https://web.facebook.com/groups/1397890464016466"   alt="Facebook Group"><img src="images/fb icon.png" class="footer-img"></img></a>

<h1>
Welcome To Gida Concept
</h1>

<h3>
Gida Concept Technologies, Your Number 1 Online Agency To
 Solving Your Digital Issues And Standing Out Among Your Competitors.
</h3>


<p><a href="#About">About Us</a></p>

</div>

<div class="intro-container-tab">
<img class="intro-img"  src="https://i.imgur.com/BZSCLik.png?1"></img>
</div>

</section>
<!--Intro Page End-->

<!--Services Page Start-->
<section id="Services" class="services-container">
<div class="services-tab-1">

<h2>
Our Services
</h2>

</div>

<div class="services-tab-1">

<p>
Gida Concept Offers wide Variety of Digital Services Which Includes:
</p>

</div>

</section>

<section class="services-container-2">

<div class="services-2-tab">
    <p>
        <img class="services-img" src="data:image/png;base64,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"></img>
    </p>
<h3>Web Developement/Management </h3>
<p>Expand Your Digital Presence With Our Human - Centered, Compelling And Convincive Future Proof Web Design Approach Now.</p>
</div>

<div class="services-2-tab">
    <p>
        <img class="services-img" src="data:image/png;base64,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"></img>
    </p>
<h3>Graphics Design</h3>
<p>Your Logo and Designs Contribute up to 60% of the people attracted to your Business. Get Professional design that will position your brand for success</p>
</div>

<div class="services-2-tab">
    <p>
        <img class="services-img" src="https://www.pngitem.com/pimgs/m/3-36368_social-media-png-transparent-social-media-marketing-icon.png"></img>
    </p>
<h3>Social Media Marketing</h3>
<p>Gida Concept Provides you 360 degree Complete Digital / Social Media Marketing  solutions to scale your business by marketing about your products and services using new technology. </p>
</div>


<div class="services-2-tab">
    <p>
        <img class="services-img" src="https://www.kindpng.com/picc/m/256-2564907_search-engine-optimization-transparent-seo-icon-png-png.png"></img>
    </p>
<h3>Search Engine Optimization (SEO)</h3>
<p>Our Services Includes Web Hosting, Domain, Branding, Digital Marketing, ADS and lots more</p>
</div>


<div class="services-2-tab">
    <p>
        <img class="services-img" src="https://www.seekpng.com/png/detail/139-1394319_sms-icon-smoking-signs-to-print.png"></img>
    </p>
<h3>BulkSmsing</h3>
<p>Did you know customers open 90% of their messages within 90 seconds? 
    Younger generations prefer to interact with brands via their mobile device, which is always close at hand. With a cut-through 
    of 390% higher than email channels and instant delivery, rest assured, customers will see it.. </p>
</div>

<div class="services-2-tab">
    <p>
        <img class="services-img" src="https://cdn-icons-png.flaticon.com/512/2913/2913972.png"></img>
    </p>
<h3>Google My Business Registeration</h3>
<p>Imagine yourself in the shoes of a potential customer. This customer is 3 
    blocks from your storefront and looking for exactly what you do best in the neighborhood
     — maybe a friend recommended your business to them. If they search for your services on Google, what will they find?
Your presence through your Business Profile can help customers discover the products and services that you provide, 
contact you, and find your location. </p>
</div>



<div class="services-2-tab">
    <p>
        <img class="services-img" src="https://media.istockphoto.com/vectors/isometric-digital-statistics-and-analysis-techniques-vector-id1027178852?k=20&m=1027178852&s=612x612&w=0&h=lrdMBiVqPkrD0l873j4pZsUcRo95aljBhnDckdjyudA="></img>
    </p>
<h3>Digital Skills / Training</h3>
<p>Want to learn Some Digital Skills For Yourself Developement, Never Worry Cause Gida Concept Has Professional Courses For You 
    At Your Finger Tips .
</p>
<br>
<center><p class="chose-a-cos"><a href="tutorials.php">Choose a Course Now</a></p></center>
</div>


</section>

<!--Services Page end-->

<!--About Page Start-->
<section id="About" class="about-us-container">

<div class="about-us-tag-1">
<h3>
    About Us
</h3>

</div>

<div class="about-us-tag-1">
<p>We leverage our full-service strategy, design, and web development expertise to create elegant 
solutions across your project lifecycle.
 Here’s an overview of all of our strategy, design, development, and marketing services we offer. 
</p>

</div>

<div class="about-us-tag-2">
<img class="abts-img" src="https://i.imgur.com/Mvb4Gu8.png"></img>
</div>

<div class="about-us-tag-2">
<h4>
Hi There
</h4>

<p>
We seek to understand your unique business needs in addition to your customers. 
We workshop to collaborate and discover the solutions to achieve your brand’s vision and business goals. 
We believe our success is driven by your success. And lastly, we have a team of industry experts in 
all the fields crucial to building and maintaining a great brand and product that resonates with your users.
</p>
</div>


</section>
<!--About  Page end-->

<!--Principles Start-->
<section class="principles">

<div class="principles-tabs-1">
    <h2>
     ___Strategy___
    </h2>
    <h4>Main Principles</h4>
</div>

<div class="principles-tabs">
   <img class="principles-img" src="https://harnixtech.com.ng/wp-content/uploads/2020/02/image-layers-3-01.png">
</div>

    <div class="principles-tabs-2">
<h3>Transformation</h3>
<p>Let's switch up your business and help your business reach it's set target.</p>
</div>

<div class="principles-tabs-2">
<h3>Service</h3>
<p>We welcome regular contact with our clients. All of our work is undertaken by our dedicated in-house teams</p>
</div>

<div class="principles-tabs-2">
<h3>Reliable</h3>
<p>Experience no-delays, let's get your project up and running before your project deadline</p>
</div>

<div class="principles-tabs-2">
<h3>
Transparency</h3>
<p>It is important that our client’s know exactly 
    what they are paying for. We provide detailed information about the work we undertake on their behalf.</p>
</div>

<div class="principles-tabs-2">
<h3>
Knowledge</h3>
<p>The world in which we work
     changes rapidly and we can only be the best through constant attention to research, knowledge gathering and training.</p>
</div>

<div class="principles-tabs-2">
<h3>
Creativity</h3>
<p>We are a team of skilled individuals, who share a common goal and passion for the work we do.</p>
</div>

</section>

<!--Principles End-->

<!--Vision Start-->
<section class="vision">
<h3>_OUR VISION_</h3>
<h2>Strategy is at the 
Heart of What We Do</h2>

<p>Our team applies its wide-ranging experience to determining the 
    strategies that will best enable our clients to achieve clear, long-term objectives.</p>

<h5>
PROFESSIONALISM  100%
<hr class="wrk-percentage">
</h5>

<h5>
CREATIVE THINKERS  100%
<hr class="wrk-percentage">
</h5>

<h5>
CUSTOMER SERVICE  100%
<hr class="wrk-percentage">
</h5>
</section>
<!--Vision Endt-->


<!--Portfolio  Page start-->
<section class="portfolio">

<div class="portfolio-tag-1">
<h3>
  Our Portfolio
</h3>

</div>

<div class="portfolio-tag-1">
<p>
Take a look at some of our award-winning partner projects. Here are just a few results we’ve been able to deliver to our client partners
</p>

<img class="portfolio-img" src="images/sirben 1.jpg"></img>
<img class="portfolio-img" src="images/dybastos.png"></img>

</div>


</section>

<!--Portfolio  Page end-->


<!--Our Company   Page start-->

<section class="our-company">

<div class="our-company-1">
<img class="our-company-img" src="https://i.imgur.com/ftVKl5I.png" >
</img>
<h2>20<sup>+</sup> Clients</h2>
</div>


<div class="our-company-1">
<img class="our-company-img" src="https://i.imgur.com/S6HBVXR.png">
</img>
<h2>10<sup>+</sup> Projects</h2>
</div>

<!--
<div class="our-company-1">
<img class="our-company-img" src="images/awards-1.png" >
</img>
<h2>3+</h2>
<p>Awards</p>
</div>
-->

<div class="our-company-1">
<img class="our-company-img" src="https://www.kindpng.com/picc/m/756-7566524_entrepreneur-management-skills-hands-on-practical-experience-icon.png">
</img>
<h2>5<sup>+</sup> Years Experirnce</h2>
</div>

</div>
</section>
<!--Our Company   Page end-->


<!--Why Choose Us start-->
<section class="why-us">

    <div class="wu-tabs">
    <h2>
     Few Reasons Why You Should Choose Gida Concept
    </h2>
    <h4>We seamlessly merge two key components – Economics and Information Technology.</h4>
</div>



<div class="wu-tabs-1">
    <img class="wu-img"  src="data:image/png;base64,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">
</img>
   <p>High standards of professionalism, integrity. Establishment of close working relationships.</p>
   <hr>
</div>



<div class="wu-tabs-1">
    <img class="wu-img"  src="https://cdn-icons-png.flaticon.com/512/5351/5351256.png">
</img>
   <p>We deliver before your set deadline and meet your expectations.</p>
   <hr>
</div>

<div class="wu-tabs-1">
    <img class="wu-img"  src="https://www.pngfind.com/pngs/m/247-2470002_critical-thinking-problem-solving-competency-symbol-hd-png.png">
</img>
   <p>A different way of thinking, both inside and outside the box..</p>
   <hr>
</div>

</section>
<!--Why Choose Us end-->

<!--Reviews   Page start-->
<section class="reviews-container">

<div  class="reviews-tab-1">
<h2>
Happy Clients Says
</h2>
<p>
<a href="https://forms.gle/8a4aSfdENaJwxrQJ6">Post a Review</a>
</p>


</div>



<div  class="reviews-tab-2">
<div class="Reviews-txt">

<p>View Reviews </a>
</p>

    <div class="sub-menu-1">
    <p>
    "I Love You Work"
    <br>
    <small>Max Building Construction</small>
    </p>

  <br>
  
    <p>
    "You are Amazing"
    <br>
    <small>Boga Tech Copiers</small>
    </p>

    <br>

    <p>
    "Nice"
    <br>
    <small>Sir Ben Steel Metal Works</small>
    </p>




    </div>


</div>

</section>

<!--Reviews    Page end-->



<!--Contact  Page start-->
<section id="Contact" class="contact-us">
<h3 class="contact-us-heading">Have Any Query </h3>
<h1 class="contact-us-heading">contact us here</h1>

<div class="contact-us-tabs">
<img  src="https://i.imgur.com/L7PtBK2.png" class="contact-us-tabs-img"><a href="
https://www.google.ng/maps/place/562103,+Otuoke/@4.7956731,6.2986205,14z/data=!4m5!3m4!1s0x106a1bf6c3f2f0e3:0xa041e2b66c292f19!8m2!3d4.7944228!4d6.3146324
">
<b>locate us </b>
<p>
Otuoke
562103
</p>
</a>
</img>
</div>


<div class="contact-us-tabs">
<img  src="https://i.imgur.com/2xeg9lF.png" class="contact-us-tabs-img"><a href="tel:+2347031220467">
<b>Call Us</b>
<p>
   070-Gida Concept
</p>
</a>
</img>
</div>


<div class="contact-us-tabs">
<img  src="https://i.imgur.com/MKiCiAZ.png" class="contact-us-tabs-img"><a href="mailto:gidatechnologies@gmail.com">
<b>Email Us </b>
<p>
 @Gida Concept 
</p>
</a>
</img>
</div>


<div class="contact-us-tabs-msg">
<a href="https://forms.gle/7NkeErh6Pfg8sWLs7">
<p>
Send Message
</p>
</a>
</div>

</section>


<!--Contact  Page end-->


<body>
</main>

<!--Footer  Page start-->
<footer>
<section  class="main-footer">

<h2><b>GIDA CONCEPT </b></h2>

<p>Gida Concept is essentially a full-service Digital  Agency. Based in Nigeria, 
    the company is established in the year 2022. Gida Concept Offers a  variety of specialized digital Services to its customers and 
the world at large </p>

    <a href=" https://www.instagram.com/gida_concept/"   alt="Instagram Page"><img src="https://i.imgur.com/e38Ygd2.jpg" class="footer-img"></img></a>
    <a href="https://web.facebook.com/groups/1397890464016466"   alt="Facebook Group"><img src="https://i.imgur.com/zBDOwur.png" class="footer-img"></img></a>

</section>


<section class="last-footer">
<small>Copyright © 2022 Gida Concept All Rights Reserved.</small>
</section>

</footer>
<!--Footer  Page End-->


</html>
