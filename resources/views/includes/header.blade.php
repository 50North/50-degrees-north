<header id="main-header " class="main-header ">
        <a href="/" class="brand-logo">
          <img src="res/logo.png" alt="50" style="max-width: 140px;" />
        </a>
        <nav class="main-nav">
          <ul class="nav-links">
            <li><a href="{{ url('/') }}">About</a></li>
            <li><a href="{{ url('/') }}">Work</a></li>
            <li><a href="{{ url('/') }}">Blog</a></li>
            <li><a href="{{ url('/') }}">Contact</a></li>
          </ul>
        </nav>
        <nav class="footer-nav">
          <ul>
            <li>
              <a class="social-link" href="#"><img src="res/fb.png" /></a>
            </li>
            <li>
              <a class="social-link" href="#"><img src="res/insta.png" /></a>
            </li>
          </ul>
        </nav>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <script>
          const navSlide = () => {
            const burger = document.querySelector(".burger");
            const nav = document.querySelector(".nav-links");
            const navLinks = document.querySelectorAll(".nav-links li");

            //toggle Nav
            burger.addEventListener("click", () => {
              nav.classList.toggle("nav-active");
              //Animate Links
              navLinks.forEach((li, index) => {
                if (li.style.animation) {
                  li.style.animation = "";
                } else {
                  li.style.animation =
                    "navLinkFade 0.5s ease forwards ${index / 7 + 1.3}s ";
                }
              });
              //burger animation
              burger.classList.toggle("toggle");
            });
          };
          navSlide();
        </script>
      </header>