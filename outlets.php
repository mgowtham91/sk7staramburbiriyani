<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Outlets - Flavors of Joy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html"> 
                <img src="logo.png" alt="Restaurant Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
                <span class="navbar-toggler-icon"></span> 
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li> 
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li> 
                    <li class="nav-item"><a class="nav-link active" href="outlets.html">Outlets</a></li> <!––Update this line––>
                    <li class="nav-item"><a class="nav-link" href="index.html#specials">Specials</a></li> 
                    <li class="nav-item"><a class="nav-link" href="index.html#contact">Contact</a></li> 
                </ul>
            </div>
        </div>
    </nav>

    <section class="outlets-banner"> <div class="banner-overlay">
            <div class="container">
                <div class="banner-content">
                    <h1 class="display-4">Our Outlets</h1>
                    <p class="lead">Find a Flavors of Joy near you!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="outlets-content py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100"> 
                        <div class="card-body d-flex flex-column"> 
                            <h5 class="card-title">Outlet Name 1</h5>
                            <p class="card-text">123 Main Street, City, State, Zip Code</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100"> 
                        <div class="card-body d-flex flex-column"> 
                            <h5 class="card-title">Outlet Name 2</h5>
                            <p class="card-text">456 Oak Avenue, Town, State, Zip Code</p>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </section>

    <footer class="py-4 bg-dark text-white">
        <div class="container text-center">
            <p class="m-0">© 2023 Flavors of Joy</p>
            <div class="social-icons mt-3">
                <a href="#" class="mx-2"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-instagram fa-lg"></i></a>
            </div>
        </div>
    </footer>


    </body>
</html>