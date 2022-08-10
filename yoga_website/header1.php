<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        .header1{
            position: sticky;
        }
    .header1 .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   padding:0rem;
   margin: 0 auto;
   max-width: 1200px;
   position: relative;
}

.header1 .flex .logo{
   font-size: 2.5rem;
   color:var(--black);
}

.header1 .flex .logo span{
   color:var(--green);
}
.navbar a{
    text-decoration: none;
}

.header1 .flex .navbar a{
   margin:0 1rem;
   font-size: 14px;
   color:var(--light-color);
}

.header1 .flex .navbar a:hover{
   text-decoration: underline;
   color:var(--green);
}

.header1 .flex .icons > *{
   font-size: 20px;
   color:var(--light-color);
   cursor: pointer;
   margin-left: 1.5rem;
}

.header1 .flex .icons > *:hover{
   color:var(--green);
}

.header1 .flex .icons a span,
.header1 .flex .icons a i{
   color:var(--light-color);
}

.header1 .flex .icons a:hover span,
.header1 .flex .icons a:hover i{
   color:var(--green);
}

.header1 .flex .icons a span{
   font-size: 2rem;
}

#menu-btn{
   display: none;
}

.header1 .flex .profile{
   position: absolute;
   top:120%; right:2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
   padding:2rem;
   text-align: center;
   background-color: var(--white);
   width: 33rem;
   display: none;
   animation: fadeIn .2s linear;
}

.header1 .flex .profile.active{
   display: inline-block;
}

.header1 .flex .profile img{
   height: 15rem;
   width: 15rem;
   margin-bottom: 1rem;
   border-radius: 50%;
   object-fit: cover;
}

.header1 .flex .profile p{
   padding:.5rem 0;
   font-size: 2rem;
   color:var(--light-color);
}
body {
    background-image: url("img/image.jpg");
    backface-visibility: visible;
    background-repeat: no-repeat;
    background-position: right 160px;
    background-size: cover;
    

}

.update-profile form{
   max-width: 70rem;
   margin: 0 auto;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
   padding:2rem;
   text-align: center;
}
.news{
    border: 1px dotted black;
  }
    </style>
</head>
<body>
<?php



?>

<header class="header1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/FitText.js/1.1/jquery.fittext.min.js"></script>
  
   <div class="flex">

      <img src="../yoga_website/images/patanjalee_transparent-good-one.png" height="100px" width="100 px"></img>
      <nav class="navbar">
         <a href="home.php">HOME</a>
         <a href="about.php">ABOUT</a>
         <a href="about.php">YOGA CLASSES</a>
         <a href="contact.php">YOGA THERAPHY</a>
         <a href="contact.php">COURSES & TRAINING</a>
         <a href="contact.php">YOGA RETREAT</a>
         <a href="contact.php">CONTACT</a>
         <a href="contact.php">TESTIMONIALS</a>
         <i class="fa-solid fa-magnifying-glass"></i>
</header>
<hr class="news">
</body>
</html>