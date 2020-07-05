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
                <span class="slogan"> This is a different page (work).</span>
                <a href="{{ url('/') }}" class="btn">learn more</a>

            </div>
            <img class="covers-img" src="res/mount.jpg" />

        </section>
        <section id="about" class="about-main-section ">

            <img class="covers-img" src="res/mount.jpg" />

            <div class="call-to-action ">
                <h1 class="title">Data Analysis</h1>
                <hr>
                <p class="description">Unlock hidden potential from your data.
                </p>
                <a href="{{ url('portfolio/data-analysis') }}" class="btn">View Projects</a>
            </div>
        </section>




        <section class="showcase-main-section ">

            <span class="slogan">Website Design</span>
            <p>I mean with a website this pretty, this is a given - right?. </p>
            <div class="call-to-action  animate-this">
                <div class="card-dark">
                    <img src="/res/showcase.PNG" alt="John" style="width:100%">
                    <p class="card-title">Website Name</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Accusamus quidem commodi provident ex
                        amet, </p>
                    <a href="{{ url('work') }}">
                        <p><button>look inside</button></p>
                    </a>
                </div>
                <div class="card-dark">
                    <img src="/res/showcase.PNG" alt="John" style="width:100%">
                    <p class="card-title">Website Name</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quidem commodi provident ex
                        amet, </p>
                    <p><button>look inside</button></p>
                </div>
                <div class="card-dark">
                    <img src="/res/showcase.PNG" alt="John" style="width:100%">
                    <p class="card-title">Website Name</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quidem commodi provident ex
                        amet, </p>
                    <p><button>look inside</button></p>
                </div>
                <div class="card-dark">
                    <img src="/res/showcase.PNG" alt="John" style="width:100%">
                    <p class="card-title">Website Name</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quidem commodi provident ex
                        amet, </p>
                    <p><button>look inside</button></p>
                </div>
            </div>

        </section>


        <section class="join-main-section">
            <div class="call-to-action ">
                <h1 class="title">START YOUR JOURNEY</h1>
                <div>



        </section>
        <footer class="main-footer">
            <div class="container">
                <nav class="footer-nav">
                    <ul>
                        <li><a href="pp.html">Privacy policy</a></li>
                    </ul>
                </nav>

                <nav class="footer-nav">
                    <ul>
                        <li>
                            <a class="social-link" href="#"><img src="/res/fb.png" /></a>
                        </li>
                        <li>
                            <a class="social-link" href="#"><img src="/res/insta.png" /></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@barba/core"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
    <script src="main.js"></script>
</body>

</html>
