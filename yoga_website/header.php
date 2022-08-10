<head>
    <style>
        .header{
   background:green;
   position: sticky;
   top:0; left:0; right:0;
   z-index: 500;
   box-shadow: var(--box-shadow);
   color: white;
}

.header .flex{
   display: flex;
   align-items: center;
   justify-content: space-between;
   padding:0px;
   margin: 0 auto;
   max-width: 1200px;
   position: relative;
}

.header .flex .logo{
   font-size: 2.5rem;
   color:var(--white);
}

.header .flex .logo span{
   color:var(--green);
}

.header .flex .navbar a{
   margin:0 0px;
   font-size: 2rem;
   color:var(--light-color);
}

.header .flex .navbar a:hover{
   text-decoration: underline;
   color:var(--green);
}

.header .flex .icons > *{
   font-size: 20px;
   color:var(--light-color);
   cursor: pointer;
   margin-left: 1.5rem;
}

.header .flex .icons > *:hover{
   color:var(--green);
}

.header .flex .icons a span,
.header .flex .icons a i{
   color:var(--light-color);
}

.header .flex .icons a:hover span,
.header .flex .icons a:hover i{
   color:var(--green);
}

.header .flex .icons a span{
   font-size: 2rem;
}

#menu-btn{
   display: none;
}
    </style>
</head>

<header class="header">

   <div class="flex">
      <p class="logo" style="font-size: 15px;">Our Guruji Dr.Ramakrishnan G Passed Away on July 15,2022. So We Are Temporarily Not Operating.<span>.</span></p>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <div class="icons">
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-facebook"></i>
         <i class="fa-brands fa-instagram"></i>
         <i class="fa-brands fa-linkedin"></i>
         </div>
         
          </div>
      </div>

   </div>

</header>
<br>
<?php include 'header1.php'; ?>
<br>
