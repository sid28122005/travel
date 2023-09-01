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
==================== this is contact section ==========================
===================================================================== -->

<section class="my-5 ">
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