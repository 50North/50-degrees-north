<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,900|Ubuntu:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />

    <title>50° North - Digital Solutions</title>
  </head>
  <body class="full-height-grow" data-barba="wrapper">
    <div class="load-container">
      <div class="loading-screen"></div>
    </div>
    <main data-barba="container" data-barba-namespace="home">

      
    @include('includes.header')


      <section class="home-main-section ">
        <div class="call-to-action  animate-this">
          <h1 class="title">50° NORTH</h1>
          <p class="subtitle">Digital Solutions</p>
          <span class="slogan"> Find Your Way with Data.</span>
          <a href="{{ url('/') }}" class="btn">learn more</a>
         
        </div>
        <img class="covers-img" src="res/mount.jpg" />
       
      </section>
      <section id="about" class="about-main-section ">
      
        <img class="covers-img" src="res/mount.jpg" />
      
      <div class="call-to-action ">
        <h1 class="title"  ">OUR WORK</h1>
        <hr>
        <p class="description">We specialise in information management. 
          We provide digital tools and solutions to help you bridge 
          the gap between data and powerful information.
        </p>
        <a href="about.html" class="btn">OUR WORK</a>
        </div>
    </section>

    <section class="showcase-main-section ">
      
      <span class="slogan"> See what I’ve been doing on Tableau public..</span>
      <div class="call-to-action  animate-this">
            <div class="card">
              <img src="/res/showcase.PNG" alt="John" style="width:100%">
              <p class="card-title">Coronavirus Analysis</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Accusamus quidem commodi provident ex amet,  </p>
              <p><button>look inside</button></p>
            </div><div class="card">
              <img src="/res/showcase.PNG" alt="John" style="width:100%">
              <p class="card-title">Coronavirus Analysis</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quidem commodi provident ex amet, </p>
              <p><button>look inside</button></p>
            </div><div class="card">
              <img src="/res/showcase.PNG" alt="John" style="width:100%">
              <p class="card-title">Coronavirus Analysis</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quidem commodi provident ex amet, </p>
              <p><button>look inside</button></p>
            </div>
           
      </div>
    
    </section>


      <section class="join-main-section"  >
        <div class="call-to-action ">
          <h1 class="title">START YOUR JOURNEY</h1>
         <div>
          
        
      
      </section>
    <!-- Footer -->
    @include('includes.footer')
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@barba/core"></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"
    ></script>
    <script src="main.js"></script>
  </body>
</html>
