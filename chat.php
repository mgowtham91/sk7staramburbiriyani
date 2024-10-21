<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        /* Navbar styling */
        .navbar {
            background-color: #ad1c18; /* Use your logo color */
        }

        .navbar-nav .nav-item {
            position: relative;
        }

        .navbar-nav .nav-link {
            color: #fff;
            padding: 10px 15px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #f1c40f;
        }

        /* Banner styling */
        .carousel-inner img {
            height: 550px;
            object-fit: cover;
        }

        /* About section styling */
        .about-section {
            padding: 60px 0;
            background-color: #fff;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .about-image {
            width: 50%;
            border-radius: 8px;
        }

        .about-text {
            width: 50%;
        }

        /* Special dishes section */
        .special-dishes {
            background-color: #f0f0f0;
            padding: 60px 0;
            text-align: center;
        }

        .dish-card {
            border: none;
            transition: transform 0.3s ease;
        }

        .dish-card:hover {
            transform: scale(1.05);
        }

        /* Footer styling */
        .footer {
            background-color: #ad1c18;
            padding: 20px 0;
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#special-dishes">Special Dishes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner/Carousel -->
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1500x600" class="d-block w-100" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1500x600" class="d-block w-100" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1500x600" class="d-block w-100" alt="Banner 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="about-content">
                <img src="https://via.placeholder.com/500x500" class="about-image" alt="Shop">
                <div class="about-text">
                    <h2>About Our Story</h2>
                    <p>Welcome to our restaurant, where we serve the best dishes made with love and fresh ingredients. Our story began with a passion for food and a dream to create a place where people can enjoy a memorable dining experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Dishes Section -->
    <section id="special-dishes" class="special-dishes">
        <div class="container">
            <h2>Our Special Dishes</h2>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card dish-card">
                        <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Dish 1">
                        <div class="card-body">
                            <h5 class="card-title">Dish Name 1</h5>
                            <p class="card-text">A delicious blend of spices and fresh ingredients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card dish-card">
                        <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Dish 2">
                        <div class="card-body">
                            <h5 class="card-title">Dish Name 2</h5>
                            <p class="card-text">A mouth-watering dish that is a customer favorite.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card dish-card">
                        <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Dish 3">
                        <div class="card-body">
                            <h5 class="card-title">Dish Name 3</h5>
                            <p class="card-text">An exotic dish that brings flavors from around the world.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <p>© 2024 Restaurant. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
