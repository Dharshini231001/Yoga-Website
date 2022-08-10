<?php include 'header.php'; ?>

<br>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}


/* Slideshow container */
.slideshow-container {
  max-width: 1200px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 3.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 50px;
  
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 3.5s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 60.5s;
}
.flexbox{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
 .flexbox .box
  {
    position: relative;
    width: 350px;
    padding: 40px;
    background: #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,.1);
    border-radius: 4px;
    margin: 20px;
    box-sizing: border-box;
    overflow: hidden;
    text-align: center;
  }
  .flexbox .box:before
  {
    cont:'';
    width:50%;
    height:100%;
    position:absolute;
    top:0;
    left:0;
    background: rgba(255,255,255,.2);
    z-index: 2;
    pointer-events: none;
  
  }
  .flexbox .box .icon{
    position: relative;
    width: 35px;
    height: 35px;
    color: #fff;
    background: #000;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px auto;
    border-radius: 50%;
    font-size: 18px;
    font-weight: 700;
    transition: 1s;
  }
  .flexbox .box:nth-child(1) .icon{
    box-shadow: 0 0 0 0 rgb(2, 20, 56);
    background: rgb(2, 20, 56);
  }
  .flexbox .box:nth-child(1):hover .icon{
    box-shadow: 0 0 0 400px rgb(2, 20, 56);
  }
  .about_container .box .cont{
    position: relative;
    z-index: 1;
    transition: 0.5s;
  }
  .about_container .box:hover .cont {
  color: #fff;
  }
  .about_container .box .cont h3{
    font-size: 20px;
    margin: 10px 0;
    padding: 0;
  }
  .about_container .box .cont p{
    margin:0;
    padding: 0;
  }
  .box a{
    display: inline-block;
    padding: 10px 20px;
    background: #fff;
    border-radius: 4px;
    text-decoration: none;
    color: #000;
    font-weight: 500;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  }


@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.welcome{
    color:green;
    padding-left: 25%;
}
</style>
</head>
<body>
<h1 class="welcome"><strong>WELCOME TO PATANJALEE YOGA</strong></h1><br>
<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="../yoga_website/images/student-yoga-3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  
  <img src="../yoga_website/images/student-yoga-2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  
  <img src="../yoga_website/images/slide-3-awards.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  
  <img src="../yoga_website/images/PY-RAJ-BHAVAN-best-performer.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  
  <img src="../yoga_website/images/Slide-2-rosaiya.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
.slider{
  max-width: 1500px;
  display: flex;
}
.slider .card{
  flex: 1;
  margin: 0 10px;
  background: #fff;
}
.slider .card .img{
  height: 200px;
  width: 100%;
}
.slider .card .img img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.slider .card .content{
  padding: 10px 20px;
}
.card .content .title{
  font-size: 25px;
  font-weight: 600;
}
.card .content .sub-title{
  font-size: 20px;
  font-weight: 600;
  color: #e74c3c;
  line-height: 20px;
}
.card .content p{
  text-align: justify;
  margin: 10px 0;
}
.card .content .btn{
  display: block;
  text-align: left;
  margin: 10px 0;
}
.body-content{
    padding-left: 10%;
    padding-right: 10%;
}
.card .content .btn button{
  background:green;
  color: #fff;
  border: none;
  outline: none;
  font-size: 17px;
  padding: 5px 8px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.2s;
}
.card .content .btn button:hover{
  transform: scale(0.9);
}
.hom-img{
    right:10%;
}

</style>  
</head>
  <body>
<div class="body-content">
 <h2 style="color:green"><center>Regular & Online Yoga</center></h2><br>
    <div class="slider owl-carousel">
      <div class="card">
        <div class="img">
<img src="../yoga_website/images/1.jpg" alt="" height="150px" width="150px"></div>
<div class="content">
          <div class="title">
Online Yoga Classes</div>
<p>Patanjalee Inst of Yoga & Therapy offers live online classes for the members anywhere in the world at their convenient time. Live classes conducted by Yoga Kalaimamani Dr.Ramakrishnan.</p>
<div class="btn">
            <button>Read more</button>
          </div>
</div>
</div>
<div class="card">
        <div class="img">
<img src="../yoga_website/images/2.jpeg" alt=""></div>
<div class="content">
          <div class="title">
Yoga Theraphy</div><br>
<p>
‘one-on-one’ Yoga Therapy offered to cure disorders such as diabetes, back pain, knee pain, obesity, Hernia, Sleep apnea, Sinus, Migraine,heart disorders and more.</p>
<div class="btn"><br><br>
            <button>Read more</button>
          </div>
</div>
</div>
<div class="card">
        <div class="img">
<img src="../yoga_website/images/3.jpg" alt="" width="150px" height="150px"></div>
<div class="content">
          <div class="title">
Regular Yoga Classes</div>
<?php
echo "We offer customised yoga classes in Chennai that incorporate several yogic tools – asanas, kriyas, pranayama, meditation &  power yoga. Online & weekend classes available."?><div class="btn">
            <button>Read more</button>
          </div>
</div>
</div>
<div class="card">
        <div class="img">
<img src="../yoga_website/images/4.jpg" alt=""></div>
<div class="content">
          <div class="title">
Yoga Courses & Training</div>
<?php
echo "We are authorized by Tamilnadu Physical Education & Sports University. We offer Yoga teacher’s training, Yoga Therapist training, Certification, Diploma, UG, PG, PG Diploma Courses."?><div class="btn">
            <button>Read more</button>
 </div>         </div>
</div>
</div>
</div>
<br><br><br>
<style>
.parallax {
  /* The image used */
  background-image: url("./images/Ss.png");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.parallax1 {
  /* The image used */
  background-image:linear-gradient(rgba(248, 243, 243, 0.5),rgba(243, 244, 248, 0.5)),url("./images/bg.jpg");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<div class="parallax"></div>
</section>
        <br><br>
        <section>
        <div class="container">
          <div class="row justify-content-center">
          </div> <!-- row -->
          <div class="row">
          <div class="col-md-6">
            <h1><br><br><centre>Our Therapist.</centre></h1>
            <hr class="news">
          <p class="hom">
          <ul>
 	<li><span style="color:#000">Dr. G. Ramakrishnan – One of the best yoga therapist.</span></li>
 	<li><span style="color:#000">Ph.D in yoga, P.G. Diploma in Yoga Therapy.</span></li>
 	<li><span style="color:#000">More than 18 years of expertise in yoga &amp; therapy.</span></li>
 	<li><span style="color:#000">Level 2 Yoga teacher certified by Yoga Certification Board, Ministry of AYUSH, Government of India</span></li>
 	<li><span style="color:#000">Specialized in yoga and yoga therapy under various traditions.</span></li>
 	<li><span style="color:#000">Doranachariyar award, Yoga Bhooshan award, Yoga kalaimamani and the best teacher award.</span></li>
 	<li><span style="color:#000">Published 5 international &amp; 10 national journal publications.</span></li>
 	<li><span style="color:#000">Well trained &amp; successful healer to relieve pains and various disorders.</span></li>
 	<li><span style="color:#000">Visiting faculty in various universities including well known Tamil Nadu Physical Education and Sports University.</span></li>
     <a href="#" style="color:green"><b>Learn More</b></a>
</ul><br><br></p>
</span>
</div>
      <div class="col-md-6">
        <br><br><br><img class="hom-img" src="../yoga_website/images/patanjalee_transparent-good-one.png" alt="Shape" width="500px"><br>
  
      </div>
  </div>
  </div>
      
      </section>
      <br><br>
      <div class="parallax1">

<h1><center> Our success stories...<br><br></center></h1>
<h5 ><center><a href="#">BACK PAIN</a>    &emsp;<a href="#">NECK PAIN & CERVICAL</a>    &emsp;<a href="#"> SHOULDER PAIN</a>     &emsp;<a href="#">KNEE PAIN</a>     &emsp;<a href="#">SINUSITIS HEAD ACHE & MIGRAINE</a>     &emsp;<a href="#">SLEEP</a>     &emsp;<a href="#">DIABETES</a>     &emsp;<a href="#">OBESITY</a>     &emsp;<a href="#">EYE</a>     &emsp;<a href="#">OTHER</a></center></h5><br>
<center>,,</center>
<br>
<h5 class="font-size:25px;">
<center>Latha J, <br>42 yrs</center>
<br>
I suffered from back pain especially of the spinal cord for 2 years. The problem was aggravated by 45 min drive to work and carrying bucket full of cloth for drying from ground to 3rd floor. I was forced to wear belt and was on pain killer medications for 2 months. The pain became so debilitating that I was forced to take 30 min rest after 10 min of kitchen work. I came to Patanjalee for Yoga Therapy and attained 95% cure on the first day. The cure was so miraculous and that my entire family was overjoyed. I completed my therapy sessions and avoided carrying weights for 2 months as advised. Now I have been doing regular yoga for 6 months and I am energetic and feel better than I was before the injury happened. The stiffness in my back and muscles has been released and my body is becoming more flexible.
<br><br>
<center>,,</center>

<center>Roopa,<br>33 yrs</center>
<br>
I had severe back pain and stiffness of nerves. During the night, I had to get up slowly and change my position frequently. Despite that, I would find myself unable to move in the morning when I woke up. This would also disturb my sleep very much. I also had high pulse rate and developed headache whenever I went out in the sun. Sometimes, my nerves would become stiff and my hands and feet would turn ice cold. I had to be taken to the hospital for injections. I was not confident when I started the yoga therapy sessions. I was doubtful if I would be able to do the asanas. But Ramakrishnan sir told me that if I could sit, he would start the asanas in that position itself. In the beginning, he taught me simple asanas in sitting or lying down position. However, the changes were dramatic. In a week, my back ache of 7 yrs was completely gone! I could sleep in one position through the night. After a month of therapy, I could go out in the sun or walk long distances. In fact, I fulfilled a promise I made and walked around a temple in morning sun for 8 km. Except for some leg cramps, I did not feel any discomfort. Today, I have increased energy level and feel relaxed. All my palpitations are gone. My toned body and weight loss is the ‘hot topic’ among my family and friends. I have learnt Surya Namaskar and do it daily at home. Yoga has changed my life for the good!
</h5>
</p>
      </div>
<script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>

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
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<?php include 'footer.php'; ?>
</body>
</html>