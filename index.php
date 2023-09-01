<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>

<!-- =====================================================================
============= this is navbar section ==============================
========================================================================== -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SakshiWanre</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Serivces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

<!-- ================================================================
==================== this is cover section ==========================
===================================================================== -->

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/china.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>China</h3>
                    <p>We had such a great time in CHINA!</p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="images/singa2.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Singapore</h3>
                    <p>Thank you, Singapore!</p>
                </div>   
            </div>
            <div class="carousel-item">
                <img src="images/img.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>California</h3>
                    <p>We love the Big Apple!</p>
                </div>   
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

<!-- ================================================================
==================== this is about section ==========================
===================================================================== -->
    
    <section class="my-5">
        <div class="py-5 container">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/singa1.jpg" alt="this is img" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">We Are Your Tour Guider</h2>
                    <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo aliquam quibusdam ipsum quia omnis culpa aliquid aperiam doloremque voluptas ex!</p>
                    <a href="about.php" class="btn mb-2">check more</a>
                </div>
            </div>
        </div>
    </section>

<!-- ================================================================
==================== this is services section ==========================
===================================================================== -->

    <section class="section-services section section--hidden">
      <div class="container">
        <h2 class="common-heading text-center">Explore things!</h2>
      </div>

      <div class="container grid grid-three-col">
        <div class="service-box">
          <ion-icon name="airplane-outline" class="serive-icon"></ion-icon>
          <h3>Travel</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
        </div>

        <div class="service-box">
          <ion-icon name="bonfire-outline" class="serive-icon"></ion-icon>
          <h3>Born Fire</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
        </div>

        <div class="service-box">
          <ion-icon name="tennisball-outline" class="serive-icon"></ion-icon>
          <h3>Games</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
        </div>

        <div class="service-box">
          <ion-icon name="restaurant-outline" class="serive-icon"></ion-icon>
          <h3>Food Funs</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
        </div>
        <div class="service-box">
          <ion-icon name="business-outline" class="serive-icon"></ion-icon>
          <h3>Stay@ 5🎆</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
        </div>
        <div class="service-box">
          <ion-icon name="golf-outline" class="serive-icon"></ion-icon>
          <h3>Trek</h3>
          <p>
            “It is not because things are difficult that we do not dare; it is
            because we do not dare that they are difficult.”
          </p>
        </div>
      </div>
    </section>

<!-- ================================================================
==================== this is Gallery section ==========================
===================================================================== -->

    <section class="section-portfolio " id="portfolio-section">
      <div class="container">
        <h2 class="common-heading text-center">Pacakages</h2>
      </div>
      <div class="container grid grid-three-col portfolio-images">
        <div class="img-ovelay " >
          <img src="images/amsterdam.jpg" loading="lazy" alt="portfolio images "  />
          <div class="overlay">
            <a href="#" target="_blank"  class="common-heading">Amsterdam</a>
          </div>
        </div>

        <div class="img-ovelay ">
          <img src="images/london.jpg" loading="lazy" alt="portfolio images " />
          <div class="overlay">
             <a href="#" target="_blank"  class="common-heading">Chicago</a>
          </div>
        </div>

        <div class="img-ovelay ">
          <img src="images/hawai1.jpg" loading="lazy" alt="portfolio images "  />
          <div class="overlay">
             <a href="" target="_blank"  class="common-heading">Hawai</a>
          </div>
        </div>
        <div class="img-ovelay " >
          <img src="images/city.jpg" loading="lazy" alt="portfolio images "  />
          <div class="overlay">
            <a href="#" target="_blank"  class="common-heading">Italy</a>
          </div>
        </div>

        <div class="img-ovelay">
          <img src="images/img4.jpg" loading="lazy" alt="portfolio images " />
          <div class="overlay">
             <a href="#" target="_blank"  class="common-heading">New York</a>
          </div>
        </div>

        <div class="img-ovelay ">
          <img src="images/snow.jpg" loading="lazy" alt="portfolio images "  />
          <div class="overlay">
             <a href="" target="_blank"  class="common-heading">Switzerland</a>
          </div>
        </div>
        <div class="img-ovelay ">
          <img src="images/img1.jpg" loading="lazy" alt="portfolio images "  />
          <div class="overlay">
             <a href="" target="_blank"  class="common-heading">Japan</a>
          </div>
        </div>
        <div class="img-ovelay ">
          <img src="images/img3.jpg" loading="lazy" alt="portfolio images "  />
          <div class="overlay">
             <a href="" target="_blank"  class="common-heading">Paris</a>
          </div>
        </div>
        <div class="img-ovelay ">
          <img src="images/hongkong.jpg" loading="lazy" alt="portfolio images "  />
          <div class="overlay">
             <a href="" target="_blank"  class="common-heading">Hongkong</a>
          </div>
        </div>
      </div>
    </section>

<!-- ================================================================
==================== this is contact section ==========================
===================================================================== -->

    <section class="my-5 section">
        <div class="py-5 container">
            <h2 class="text-center">Book your journey</h2>
        </div>

        <div class="container">
            <form action="userinfo.php" method="post">
                <div class="container-fluid">
                    <div class="row w-55 m-auto pb-3">
                        <div class="col">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name" name="name">
                        </div>
                        <div class="col">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Enter email" name="email">
                        </div>
                    </div>
                    <div class="row w-55 m-auto pb-3">
                        <div class="col">
                            <label>Phone</label>
                            <input type="number" class="form-control" placeholder="Enter phone no." name="phone">
                        </div>
                        <div class="col">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Enter address" name="address">
                        </div>
                    </div>
                    <div class="row w-55 m-auto pb-3">
                        <div class="col">
                            <label>Where To</label>
                            <input type="text" class="form-control" placeholder="Place you want to visit" name="location">
                        </div>
                        <div class="col">
                            <label>How Many</label>
                            <input type="number" class="form-control" placeholder="Number of guests" name="guests">
                        </div>
                    </div>
                    <div class="row w-55 m-auto pb-3">
                        <div class="col">
                            <label>Arrivals</label>
                            <input type="date" class="form-control" placeholder="dd-mm-yyy" name="arrivals">
                        </div>
                        <div class="col">
                            <label>Leaving</label>
                            <input type="date" class="form-control" placeholder="dd-mm-yyyy" name="leaving">
                        </div>
                    </div>
                    <div class="pl-3">
                        <button type="submit" class="btn mb-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">madeby@SakshiWanre✌️</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
</body>
</html>