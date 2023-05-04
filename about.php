<?php include 'navbar.php' ?>

    <style>
        .ajib
        {
            font-size: 2.7rem;
            color:black;
            padding-top: 8px;
            font-weight: bold;
            border-bottom: 1px solid teal;
            margin-left: 20%;
            padding-bottom: 1%;
            margin-right: 20%;
        }
        .jumbotron
        {
          background: #E5E7E9;
          color: black;
        }

        @media (max-width: 980px)
        {
        .carousel-item img
          {
            height: 200px;
          }
        }

        @media (max-width: 980px)
        {
          .jumbotron
          {
            height: 120%;
          }
        .carousel-item img
          {
            height: 200px;
          }
          .col-lg-6
          {
            border-right: none;
            border-bottom: 1px solid goldenrod;
          }
          
        }
        @media (max-width: 380px)
        {
          .jumbotron
          {
            height: 120%;
          }
        .carousel-item img
          {
            height: 200px;
          }
          .col-lg-6
          {
            border-right: none;
            border-bottom: 1px solid goldenrod;
          }
          .py
          {
            font-size: 2rem;
          }
          .ja
          {
            font-size: 2rem;
          }
        }
        
    </style>
  
  
      
    <section class="mt-4">
    
        <div class="container about">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="#">
                <img src="img/igor-miske-JVSgcV8_vb4-unsplash.jpg" class="d-block w-100" alt="...">
              </a>
                <div class="carousel-caption d-none d-md-block">
                  <h1>Web Site Designing</h1>
                  <p class="para0">We Can Learn You Full Responsive Website Design</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/22-220999_web-developer-wallpaper-web-development.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1 class="text-light">Web Developing</h1>
                  <p class="para1">YOU CAN JOIN ME AND LEARN WEB DEVELOPING.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/hitesh-choudhary-D9Zow2REm8U-unsplash.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Python Programming</h1>
                  <p>I AM SENIOR PYTHON PROGRAMMER</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/clement-h-95YRwf6CNw8-unsplash.jpg" class="d-block w-100 wow1"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Java Programming</h1>
                  <p>I AM ALSO A JAVA PROGRAMMER</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/tran-mau-tri-tam-k4rXG_9zCbY-unsplash.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>UI Desiging</h1>
                  <p>I KNOW UI UX DESIGNING</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <hr>
    </section>

    <h1 class="text-center mt-5 ajib">What We Do !</h1>
    <section class="jumbotron mt-5"  style="margin-top: 10%;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 col-md-12 mio1">
                    <h1 class="bittext">Web <span class="ya"></span></h1>
                    <p>You Can Learn With Me And After Completing Your Course You Can Expert In Web Designer. I Am Expert Web Designer</p>
                </div>
               
                <div class="col-lg-6 col-md-12">
                    <h1 class="bittext1 mb-3">Web <span class="ya1"></span></h1>
                    <p>You Can Learn With Me And After Completing Your Course You Can Expert In Web Developing. I Am Expert  Web Developer</p>
                </div>
                
                <div class="col-lg-6 col-md-12 mio2" style="margin-top: 9%;">
                    <h1 class="text-danger mb-3 py"><span class="ya2"></span> Programming</h1>
                    <p>I Am A Senior Python Programmer. You Can Hire Me For Leraning Python.Python Is The Most Famous Language In The World</p>
                </div>
                <div class="col-lg-6 col-md-12" style="margin-top: 9%;">
                    <h1 class="text-warning mb-3 ja"><span class="ya3"></span> Programming</h1>
                    <p>I Am A Expert Java Programmer. You Can Hire Me. Java Is A Most Valuable Progarmming Lanugaue In The World. So You Have To Learn It</p>
                </div>
                <div class="col-lg-12" style="margin-top: 9%;">
                    <h1><span class="ya4"></span> Designing</h1>
                    <p>I Am Expert UI UX designer And Also Professional UI UX Designer. You Can Learn As A beginner And After That Course Make Sure You Can Work Professionaly</p>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Optional JavaScript -->
    <script type="text/javascript" src="typed.js"></script>
    <script type="text/javascript">
          var typed = new Typed('.ya', {
        strings: ['Designing'],
        typeSpeed: 70,
        backSpeed: 100,
        loop:true,
      });
    </script>
    <script type="text/javascript">
        var typed = new Typed('.ya1', {
      strings: ['Developing'],
      typeSpeed: 70,
      backSpeed: 100,
      loop:true,
    });
  </script>
  <script type="text/javascript">
        var typed = new Typed('.ya2', {
    strings: ['Python'],
    typeSpeed: 70,
    backSpeed: 100,
    loop:true,
    });
    </script>
    </script>
    <script type="text/javascript">
          var typed = new Typed('.ya3', {
      strings: ['Java'],
      typeSpeed: 70,
      backSpeed: 100,
      loop:true,
      });
      </script>
      <script type="text/javascript">
        var typed = new Typed('.ya4', {
    strings: ['UI UX'],
    typeSpeed: 70,
    backSpeed: 100,
    loop:true,
    });
    </script>
  <script>
     var bleep = new Audio()
    bleep.src = "this is.mp3";
  </script>